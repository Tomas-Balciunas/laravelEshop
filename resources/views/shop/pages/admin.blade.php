@extends('shop/main')

@section('content')
@include('shop/_partials/errors')

<!----- NEW PRODUCT ----->
<div class="maincont">
    <button class="coll">Pridėti prekę</button>
    <div class="collcont">
        <form action="/store" method="post" enctype="multipart/form-data" class="addproduct">
            {{csrf_field()}}
            <h6>Pavadinimas:</h6>
            <input type="text" name="title"></input>
            <h6>Aprašymas:</h6>
            <textarea type="textarea" name="content"></textarea>
            <h6>Kiekis:</h6>
            <input type="number" name="quantity"></input>
            <h6>Kaina:</h6>
            <input type="number" name="price" step=".01"></input>
            <h6>Kategorija:</h6>
            <select name="categoryselect">
                <option style="display: none;"></option>
                @foreach ($items as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            <h6>Nuotrauka:</h6>
            <input type="file" name="img">
            <button type="submit">Pridėti</button>
        </form>
    </div>

    <!----- NEW CATEGORY ----->

    <button class="coll">Pridėti kategoriją</button>
    <div class="collcont">
        <form action="/storecategory" method="post">
            {{csrf_field()}}
            <input type="text" name="categorytitle"></input>
            <button type="submit">Pridėti</button>
        </form>
    </div>

    <!----- USER ORDERS ----->

    <button class="coll">Mano užsakymai</button>
    <div class="collcont">
        <div class="order">
            <table>
                <tr>
                    <th>Užsakymo nr.</th>
                    <th>Užsakymo kaina</th>
                    <th>Pristatymo adresas</th>
                    <th>Užsakymo data</th>
                </tr>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->price}}$</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->created_at}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <!----- USER PRODUCTS ----->

    <button class="coll">Mano prekės</button>
    <div class="collcont">
        <div class="homecont">
            @foreach($userposts as $post)
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
                <div class="adminbuttons">
                    <a href=/delete/{{$post->id}}>
                        <h5>Trinti</h5>
                    </a>
                    <a href=/update/{{$post->id}}>
                        <h5>Redaguoti</h5>
                    </a>
                    <a href="/post/{{$post->id}}">
                        <h5>Plačiau</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection