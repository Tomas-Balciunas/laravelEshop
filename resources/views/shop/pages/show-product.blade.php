@extends('shop/main')

@section('content')
<div class="viewcont">
    <div>
        <h2>{{$post->title}}</h2>
    </div>
    <div class="viewproduct">
        <div class="productimg">
            <img src="{{asset('/storage/'.$post->path)}}" alt="????">
        </div>
        <div class="productinfo">
            <span>Kategorija:</span>
            <h4>{{$post->category->category}}</h4>
            <hr />
            <span>Kiekis sandelyje:</span>
            <h4>{{$post->quantity}}</h4>
            <hr />
            <span>Kaina:</span>
            <h4>{{$post->price}}$</h4>
            @if ($post->quantity == 0)
            <h5>Prekių neliko</h5>
            @else
            <a href="/order/{{$post->id}}">
                <h5>Užsakyti</h5>
            </a>
            @endif
        </div>
    </div>
    <div class="content">
        <p>{{$post->content}}</p>
    </div>
    <div class="commentcont">
        <form action="/post/{{$post->id}}/comment" method="POST">
            {{csrf_field()}}
            <textarea name="body"></textarea>
            <button type="submit">Palikti atliepimą</button>
        </form>
    </div>
    <hr />
    <div class="comments">
        @foreach($post->comments as $comment)
        <hr />
        <h6 style="color: gray; text-align:right;">{{$comment->created_at}}</h6>
        <p>{{$comment->body}}</p>
        <hr />
        @endforeach
    </div>
</div>



@endsection