@extends('shop/main')
@section('content')
@if (count($posts) == 0)
<h2 style="text-align: center;">Prekių krepšelyje nėra</h2>
@else
<div class="cartview">
    <table>
        <tr>
            <th>Prekės pavadinimas</th>
            <th>Kaina</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td class="cartproduct">
                <a href="/post/{{$post->id}}">
                    {{$post->product_name}}
                </a>
            </td>
            <td class="count">{{$post->price}}$</td>
            <td class="del"><a id="del" href="/remove/{{$post->id}}">X</a></td>
        </tr>
        @endforeach
    </table>
    <div>
        <h4>Iš viso: <span id="total"></span>$</h4>
    </div>
    <a id="buy" href="/order">Pirkti</a>
</div>
@endif
@endsection