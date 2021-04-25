@extends('shop/main')
@section('content')
@if (count($categoryshow) == 0)
<h2 style="text-align: center;">Prekių šioje kategorijoje nėra</h2>
@else

<div class="homecont">
    @foreach($categoryshow as $post)
    <div class="product">
        <h3>{{$post->title}}</h3>
        <div class="productcontent">
            <div class="productimg">
                <img width="100px" src="{{asset('/storage/'.$post->path)}}" alt="????">
            </div>
            <div class="summary">
                <img src="{{asset('/img/pointer.png')}}" id="pointer">
                <div class="abc">
                    <p>{{$post->content}}</p>
                </div>
                <h4>{{$post->price}}$</h4>
            </div>
        </div>
        <a href="/post/{{$post->id}}">
            <h5>Plačiau</h5>
        </a>
    </div>
    @endforeach
</div>
@endif
@endsection