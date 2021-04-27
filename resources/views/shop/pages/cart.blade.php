@extends('shop/main')
@section('content')
@if (count($posts) == 0)
<h2 style="text-align: center;">Prekių krepšelyje nėra</h2>
@else
<div>
    @foreach($posts as $post)
    <div>
        <p>{{$post->product_name}}</p>
        <p>{{$post->price}}</p>
    </div>
    @endforeach
</div>

<a href="/order">Pirkti</a>
@endif
@endsection