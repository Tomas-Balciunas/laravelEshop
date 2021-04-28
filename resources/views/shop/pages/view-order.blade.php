@extends('shop/main')
@section('content')
<div class="cartview">
<table>
    <tr>
        <th>Prekės pavadinimas</th>
        <th>Kaina</th>
    </tr>
    @foreach($orders as $item)
    <tr>
        <td class="cartproduct">{{$item->product_name}}</td>
        <td>{{$item->price}}$</td>
    </tr>
    @endforeach
</table>
</div>
@endsection