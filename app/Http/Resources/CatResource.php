<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
         //especificamos la representacion de json
         return [
            "id"=>$this->id,
            "type" => "Cat",
            "attributes" => [
                "id"=>$this->id,
                "name"=>$this->name,
                "age"=>$this->age
            ]
        ];
    }
}
