<?php

namespace App\Http\Services;

use App\Models\Order;

class OrderService
{

    public function show($id)
    {
        return Order::where('id',$id)->first();
    }
}
