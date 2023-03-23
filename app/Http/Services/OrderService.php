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
      //  dd($request->state);
       // dd($order->state);
        //state tiep theo update
            $order = Order::find($request->id);
            //state hien tai arr
            $status = $order-> state;
            $comment = $request->input('comment');
//            if($status == $request->state){
//                dd("fail");
//            }
            $tran =  $status -> transitionTo($request->state);
        //dd($tran->state);
        LogState::create([

            'order_id' => $request->id,
            'from' => $status,
            'to' => $request->state,
            'comment' => $comment,
            'created_at' => now()
        ]);
    }

    public function listLogStates($id)
    {
         return  LogState::where("order_id",$id)->get();
    }
}
