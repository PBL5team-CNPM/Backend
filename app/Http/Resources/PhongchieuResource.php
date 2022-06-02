<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhongchieuResource extends JsonResource
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
            'ten_phong' =>$this->ten_phong,
            'soluong_day' =>$this->soluong_day,
            'soluong_cot' =>$this->soluong_cot,
            'ghengoi' => GhengoiResource::collection($this->ghengoi),
            'soluong_ghe' => $this->ghengoi->count(),
            'soluong_con' => $this->ghengoi->where('da_chon', 0)->count(),
            'soluong_ve' => VephimResource::collection($this->ghengoi),
        ];
    }
}
