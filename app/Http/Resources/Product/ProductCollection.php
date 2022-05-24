<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
            [
                'name' => $this->name,
                'totalPrice' => round(((100-$this->discount)/100)*$this->price, 2),
                'discount' => $this->discount,
                'rating' => $this->reviews->count()>0 ? round($this->reviews->sum('star')/$this->reviews->count(), 2) : "Not rated",
                'href' => [
                    'link' => route('product.show', $this->id)
                ]
            ];
    }
}
