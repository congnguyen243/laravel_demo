<?php

namespace App\Repositories\Order;

use App\Repositories\BaseRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Models\Product;
use App\Models\Order;
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
}