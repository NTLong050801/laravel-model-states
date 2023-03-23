<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h3>Sales Order Information</h3>

        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">#number</label>
            <span class="">{{$order->id}}</span>
        </div>

        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Customer</label>
            <div class="col-sm-10">
                <span class="">{{$order->name}}</span>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <span class="f">{{$order->total}}</span>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <span class="bs-primary rounded-pill">{{$order->state}}</span>

            </div>
        </div>



</div>

<div class="container mt-5">
    <h3>Update Status</h3>
    <form action="{{route('order.store',$order->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">New Status</label>
            <select class="form-select" name="state" aria-label="Default select example">
                <option value="pending" @if($order->state == 'pendding') selected @endif>Pending</option>
                <option value="declined" @if($order->state == 'declined') selected @endif>Declined</option>
                <option value="approved" @if($order->state == 'approved') selected @endif>Approved</option>
                <option value="processed" @if($order->state == 'processed') selected @endif>Processed</option>
            </select>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Comment</label>
            <input type="text" name="comment" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="button" class="btn btn-primary">Reset</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
<div class="container mt-5">
    <h3>Status History</h3>
    @if(!$logstates -> isEmpty())
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Form</th>
            <th scope="col">To</th>
            <th scope="col">Comment</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logstates as $logstate)
            <tr>
                <th scope="row">{{date_format($logstate->created_at,"d/m/Y")}}</th>
                <td>{{$logstate->from}}</td>
                <td>{{$logstate->to}}</td>
                <td>{{$logstate->comment}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <span>No history</span>
    @endif
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>
