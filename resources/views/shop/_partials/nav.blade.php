<nav>
    <div class="navcont">
        <div id="iconcont">
            <a href="/"><img src="{{asset('img/shopicon.png')}}" class="shopicon"></a>
        </div>
        <div class="navbarcont">
            <div class="navbar">
                <a href="/"><div><h5>Pradinis</h5></div></a>
                <a href="/admin"><div><h5>Admin</h5></div></a>
                @if (Auth::check())
                <a href="/logout"><div><h5>Atsijungti</h5></div></a>
                @else
                <a href="/login"><div><h5>Prisijungti</h5></div></a>
                @endif
            </div>
            <div class="categorycont">
                @foreach ($categories as $item)
                <div>
                    <a href="/category/{{$item->id}}">{{$item->category}}</a>
                </div>
                @endforeach
            </div>
        </div>
        <div id="carticoncont">
            <a href="/cart"><img src="{{asset('img/carticon.png')}}" class="shopicon"></a>
        </div>
    </div>
</nav>