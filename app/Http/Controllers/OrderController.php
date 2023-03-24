<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderService;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index($id)
    {
//        //
//        $title = "List Order";
//        return view('listOrder',compact('title'));
        $title = "Detail Order";
        $order =  $this->orderService->show($id);
        $logstates = $this->orderService->listLogStates($id);
        return view('order.index',compact('order','logstates','title'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Create Order";
        return view('create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->orderService->transition($request);
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function createOrder(Request $request){

        $this->orderService->create($request);
//        dd($request);
    }
}
