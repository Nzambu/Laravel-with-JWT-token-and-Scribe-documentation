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
use App\Models\Auth\JWTAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\JWTRequest;

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
     * @apiResource App\Http\Requests\Auth\JWTRequest
     * @apiResourceModel App\Models\Auth\JWTAuth   
     * 
     * @return object A token generated for the user to access the system
     */
    public function login(JWTRequest $request) {
        return User::all();
    }

    /**
     * Refresh token
     * 
     * Refresh the bearer token when user is logged in and token is about to expire
     * 
     * @apiResource App\Http\Requests\Auth\JWTRequest
     * @apiResourceModel App\Models\Auth\JWTAuth
     * 
     * @return object A new access token
     */
    public function refreshToken(){

    }

    /**
     * Log out
     * 
     * Voluntatirly end access to the application
     * 
     * @return object A success message
     */
    public function logout() {

    }
}
