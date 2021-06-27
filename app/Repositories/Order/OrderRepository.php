<?php

namespace App\Repositories\Order;

use App\Repositories\BaseRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Models\Product;
use App\Models\Order;
use App\Models\ProductOrder;
class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Order::class;
    }

    public function storeOrder($attributes = [],$item = [])
    {
        $order = Order::create($attributes);
        foreach($item as $key => $value){
            $order->products()->attach($key,['quantity'=> $value]);
        }
        return "ok";
    }
    public function updateOrder($attributes = [],$item = []){
        $idOrder = $attributes['id'];
        $order = Order::find($idOrder)->update($attributes);   
        
        $productOrder = new ProductOrder;
        $productOrder->where('order_id',$idOrder)->delete();
        
        foreach($item as $key => $value){
            if($value > 0){
                $proOrder = ProductOrder::create([
                'product_id'=>$key,
                'order_id'=>$idOrder,
                'quantity'=>$value,
            ]);
            }
        }
    }
}