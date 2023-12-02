<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function stockStatus($stock){
        $status = "";
        if($count > 10){
            $status = "Instock";
        }else if($stock > 0){
            $status = "Low Stock";
        }else if($stock == 0){
            $status = "Out of Stock";
        }
        return $status;
    }
    public function toArray($request): array
    {
        //return parent::toArray($request);
        return[
            "id" => $this.id,
            "name" => $this.name,
            "price" => $this.price,
            "show_price" => $this.price." mmk",
            "stock" => $this.stock,
            "stock_status" => $this.stockStatus($this.stock),
            "date" => $this->created_at->format("d M Y"),
            "time" => $this->created_at->format("H:i A"),
        ];
    }
}
