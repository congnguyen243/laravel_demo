<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $table = 'product_order';
    public function getProductsOfOrder($idOrder){
        return ProductOrder::where('order_id',$idOrder)->join('products','product_order.product_id','=','products.id')->get();
    }
}