<?php
/**
 * Invoice Limited
 *
 * LICENCE: NVC Commercial
 *
 * @category   STL
 * 
 * @package    nvc_invoice_API
 * 
 * @copyright  Copyright (c) 2020 Invoice Technologies Ltd. (http://www.nvc-invoice.com)
 * 
 * @license    NVC Commercial
 * 
 * @version    1.0
 * 
 * @since      1.0
 * 
 * @author  Nzambu Nzioki <nzambunzioki@gmail.com>
 * 
 */

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Auth\JWTAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Auth\ForgotPasswordMail;
use App\Http\Requests\Auth\JWTRequest;
use App\Http\Resources\Auth\JWTResource;
use App\Http\Resources\Auth\LogoutResource;
use App\Http\Resources\Errors\ErrorResource;
use App\Http\Requests\Auth\ChangePasswordRequest;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Resources\Auth\ForgotPasswordResource;

/**
 * @group Authentication
 *
 * Authentication endpoints
 * 
 * @package Controllers
 */
class JWTController extends Controller
{
    /**
     * Login
     * 
     * Gain access to the application
     * 
     * @apiResource App\Http\Resources\Auth\JWTResource
     * @apiResourceModel App\Models\User   
     * 
     * @return object A token generated for the user to access the system
     */
    public function login(JWTRequest $request) 
    {
        $credentials = [
            "email" => $request->email, 
            "password" => $request->password
        ];
        if (! $token = $this->auth()->attempt($credentials)) {
            $request["code"] = "ATH001";
            $request["status"] =  401;
            $request["title"] = "The password is incorrect";
            $request["detail"] = "Please provide the correct user password";
            return (new ErrorResource($request))
                ->response()
                ->setStatusCode(401);
        }
        $request->access_token = $token;
        return $this->respondWithToken($request);
    }

    /**
     * Refresh token
     * 
     * Refresh the bearer token when user is logged in and token is about to expire
     * 
     * @apiResource App\Http\Resources\Auth\JWTResource
     * @apiResourceModel App\Models\User
     * 
     * @return object A new access token generated for the user to access the system
     */
    public function refreshToken(Request $request)
    {
        $request->access_token = $this->auth()->refresh();
        return $this->respondWithToken($request);
    }

    /**
     * Log out
     * 
     * Voluntatirly end access to the application
     * 
     * @return object A success message
     */
    public function logout(Request $request) 
    {
        $this->auth()->logout();
        return new LogoutResource($request);
    }

    /**
     * Forgot password
     * 
     * Send user an email with a link to change password in the event user forgot password or needs to change password
     * 
     * @apiResource App\Http\Resources\Auth\ForgotPasswordResource
     * @apiResourceModel App\Models\User
     * 
     * @return object A success message
     */
    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)
                    ->update([
                        "reset_password_link" => Str::random(128)
                    ]);
        $user = User::where('email', $email)->first();
        Mail::to($email)->send(new ForgotPasswordMail($user));
        return new ForgotPasswordResource($request);
        return Mail::to('patricknzambu@gmail.com')->send(new ForgotPasswordMail($user));
    }

    /**
     * Change password
     * 
     * Set a new password that will be used to gain access the application
     * 
     * @apiResource App\Http\Resources\Auth\ChangePasswordResource
     * @apiResourceModel App\Models\User
     * 
     * @return object A success message
     */
    public function changePassword(ChangePasswordRequest $request, $link)
    {
        User::where('reset_password_link', $link)->update(['password' => $request->password]);
        return new ChangePasswordResource();
    }

    /**
     * Auth guard
     * 
     * An instance of the auth guard
     * 
     * @return object The Auth guard instance
     */
    public function auth()
    {
        // return Auth::guard();
        return auth();
    }

    /**
     * Token
     * 
     * Get the token array structure.
     *
     * @param  array $request
     *
     * @return object Access token
     */
    protected function respondWithToken($request)
    { 
        $request["token_type"] = "bearer";
        $request["expires_in"] = $this->auth()->factory()->getTTL() * 60;
        return  (new JWTResource($request))
            ->response()
            ->setStatusCode(200);
    }
}
