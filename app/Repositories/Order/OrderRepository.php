<?php

namespace App\Repositories\Order;

use App\Repositories\BaseRepository;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Order::class;
    }

    // public function getOrder()
    // {
    //     return $this->model->select('name')->take(5)->get();
    // }
}