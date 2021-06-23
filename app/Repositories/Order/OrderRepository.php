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
        // echo($order); 
        //dd($order);
        // echo($order->id);die();
        //$tmp = $this->model;
        // echo($tmp->get()->last());
        // var_dump($this->model->create($attributes)); die();
        foreach($item as $key => $value){
            // $product = Product::find($key);
            // $product->orders()->attach($tmp,['quantity'=>$value]);
            // $this->getModel()->attach($key,['quantity'=> $value]);
            $order->products()->attach($key,['quantity'=> $value]);
            // $tmp->get()->last()->products()->attach($key,['quantity'=> $value]);
            // var_dump($product);
            //$productsOrder->product_id = $key;

            //$this->model->create($attributes);
            //$this->model->productsOrder()->save($productsOrder);
            
        }
        return "ok";
        // return $this->model->products->find(1);
    }
}