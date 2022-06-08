<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodDrinkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'ten' =>$this->ten,
            'gia' =>$this->gia,
            'food_drink_bill' => FoodDrinkBillResource::collection($this->food_drink_bill),
        ];
    }
}
