<?php

namespace App\Http\Resources\Errors;

use Illuminate\Http\Resources\Json\JsonResource;

class ErrorResource extends JsonResource
{
    public static $wrap = "error";
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "type" => "error",
            "code" => $this->code,
            "status" => $this->status,
            "title" => $this->title,
            "detail" => $this->detail,
            "metadata" => [
                "copyright" => "Copyright 2021 Invoice",
                "authors" => [
                    "name" => "Patrick Nzambu",
                    "email" => "patricknzambu@gmail.com"
                ]
            ]
        ];
    }
}
