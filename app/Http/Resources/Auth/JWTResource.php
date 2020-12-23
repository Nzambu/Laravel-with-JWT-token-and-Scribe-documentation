<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class JWTResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "type" => "authentication",
            "id" => "auth",
            "attributes" => [
                "email" => $request->email,
                "token" => "shjfacjkahgclkadjclksvh;hafvlk;afvlkafjvlsfak;jvlfsak"
            ]
        ];
    }
}
