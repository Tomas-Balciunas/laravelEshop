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
            <th></th>
            <th>Kiekis</th>
            <th></th>
            <th>Pilna kaina</th>
        </tr>
        <tbody class="carttable">
            @foreach($posts as $post)
            <tr>
                <td class="cartproduct">
                    <a href="/post/{{$post->product_id}}">
                        {{$post->product_name}}
                    </a>
                </td>
                <td class="count">{{$post->price}}$</td>
                <td>
                    <form method="POST" action="/removequantity/{{$post->id}}">{{csrf_field()}}<button type="submit">-</button></form>
                </td>
                <td class="quantity">{{$post->quantity}}</td>
                <td>
                    <form method="POST" action="/addquantity/{{$post->id}}">{{csrf_field()}}<button type="submit">+</button></form>
                </td>
                <td class="totalprice"></td>
                <td class="del"><a id="del" href="/remove/{{$post->id}}">X</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <h4>Iš viso: <span id="total"></span>$</h4>
    </div>
    <a id="buy" href="/order">Pirkti</a>
</div>
@endif
@endsection