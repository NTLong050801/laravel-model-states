<!doctype html>
<html lang="en">
<head>
    @extends('layouts.head')
</head>
<body>
<div class="container">
    <form action="{{route('create.post')}}" method="post" >
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">total</label>
            <input type="number" name="total" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
@extends('layouts.footer')
</html>
