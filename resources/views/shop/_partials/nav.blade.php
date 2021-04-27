<nav>
    <div class="navcont">
        <div id="iconcont">
            <a href="/"><img src="{{asset('img/shopicon.png')}}" class="shopicon"></a>
        </div>
        <div class="navbarcont">
            <div class="navbar">
                <div class=""><a class="" href="/">Pradinis</a></div>
                <div class=""><a class="" href="/admin">Admin</a></div>
                @if (Auth::check())
                <div class=""><a class="" href="/logout">Atsijungti</a></div>
                @else
                <div class=""><a class="" href="/login">Prisijungti</a></div>
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