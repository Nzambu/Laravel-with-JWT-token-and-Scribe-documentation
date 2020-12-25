<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class LogoutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            "type" => "authorization",
            "id" => "logout",
            "attributes" => [
                "message" => "Successfully logged out",
            ],
            "links" => [
                "self" => $request->fullUrl()
            ]
        ];
    }
}
