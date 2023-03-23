<?php

namespace App\Http\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Session;

class OrderService
{

    public function show($id)
    {
        return Order::where('id',$id)->first();
    }

    public function transition( $request)
    {
        $order = Order::find($request->id);
        $status = $order-> state;
        $tran =  $status -> transitionTo($request->state);
        $order->update([
            'state' => $tran->state,
            'comment'=>$request->comment
        ]);

    }
}
