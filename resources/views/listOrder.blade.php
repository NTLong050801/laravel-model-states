<!doctype html>
<html lang="en">
<head>
   @extends('layouts.head')
</head>
<body>
<div class="container mt-5">
    <a href="{{route('create')}}"><button class="btn btn-success">Create Order</button></a>

    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Total</th>
            <th scope="col">State</th>
            <th scope="col">Detail</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <th scope="row">{{$order->id}}</th>
                <td>{{$order->name}}</td>
                <td>{{$order->total}}</td>
                <td>{{$order->state}}</td>
                <td>
                    <a href="{{route('order.detail',$order->id)}}">
                        <button class="btn btn-info">
                            Detail
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
@extends('layouts.footer')
</html>
