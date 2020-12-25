<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Support\Facades\Response;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * Meta data to be rendered in each exception
     * 
     * @var array
     */
    protected $metadata = [
        "copyright" => "Copyright 2021 Invoice",
        "authors" => [
            "name" => "Patrick Nzambu",
            "email" => "patricknzambu@gmail.com"
        ]
    ];
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        // $this->reportable(function (Throwable $e) {
        //     //
        // });

        $this->renderable(function (MethodNotAllowedHttpException $exception){
            $request["type"] = "Not Allowed";
            $request["code"] = "MNA001";
            $reuest["title"] = "Method Not Allowed";
            $request["status"] =  502;            
            $request["detail"] = $exception->getMessage();
            $request["meta"] = $this->metadata;
            return Response::json($request);
        });        

        $this->renderable(function (TokenBlacklistedException $exception){
            $request["type"] = "Blacklisted";
            $request["code"] = "TBL001";
            $reuest["title"] = "Token Blacklisted";
            $request["status"] =  422;            
            $request["detail"] = $exception->getMessage();
            $request["meta"] = $this->metadata;
            return Response::json($request);
        });
    }
}
