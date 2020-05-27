<?php

namespace App;

use http\Client\Request;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

class Product extends Model
{
//    public function getBrand(){
//        return Brand::find( $this->brand_id);
//    }

    protected $fillable = ['code', 'name', 'description', 'image'];
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function getPriceForCount(){
        if (!is_null($this->pivot)){
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

//    public function getProductsBySearch(Request $request) : ?Builder
//    {
//        return null;
//    }
}
