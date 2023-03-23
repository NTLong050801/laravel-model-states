<?php

namespace App\Http\Services;

use App\Models\LogState;
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
        //state hien tai
        $status = $order-> state;
        //state tiep theo
        $tran =  $status -> transitionTo($request->state);
        LogState::create([
            'order_id' => $request->id,
            'from' => $status,
            'to' => $tran->state
        ]);


    }
}
