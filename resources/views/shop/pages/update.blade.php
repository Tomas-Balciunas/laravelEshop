@extends('shop/main')

@section('content')
    @include('shop/_partials/errors')
    <div class="updatecont">
    <form action="/storeupdate/{{$post->id}}" method="post" enctype="multipart/form-data" class="addproduct">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <h6>Pavadinimas:</h6>
            <input type="text" name="title" value="{{$post->title}}"></input>
            <h6>Aprašymas:</h6>
            <textarea type="textarea" name="content">{{$post->content}}</textarea>
            <h6>Kiekis:</h6>
            <input type="number" name="quantity" value="{{$post->quantity}}"></input>
            <h6>Kaina:</h6>
            <input type="number" name="price" step=".01" value="{{$post->price}}"></input>
            <h6>Karegorija:</h6>
            <select name="categoryselect">
                <option style="display: none;"></option>
                @foreach ($items as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach    
            </select>
            <h6>Nuotrauka:</h6>
            <input type="file" name="img">
            <button type="submit">Keisti</button>
    </form>
    </div>
@endsection