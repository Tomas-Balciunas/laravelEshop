@extends('shop/main')

@section('content')
@include('shop/_partials/errors')
<div class="orders">
<form action="/placeOrder{{$post->id}}" method="post">
    {{csrf_field()}}
    <h4>{{$post->title}}</h4>
    <h4>{{$post->price}}$</h4>
    <div>
        <h6 for="name">Name</h6>
        <input type="text" name="name"></input>
    </div>
    <div>
        <h6 for="lastname">Last Name</h6>
        <input type="text" name="lastname"></input>
    </div>
    <div>
        <h6 for="address">Address</h6>
        <input type="text" name="address"></input>
    </div>
    <div>
        <h6 for="address">Contact Phone</h6>
        <input type="text" name="contact"></input>
    </div>
    <div>
        <button type="submit">Užsakyti</button>
    </div>
</form>
</div>
@endsection