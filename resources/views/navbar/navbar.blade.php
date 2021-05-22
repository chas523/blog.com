<header>
    <div class="container">
        <nav>
            <div class="logo"><a href="/"><img src="{{asset('images/logo.png') }}" alt="logo"></a></div>
            <ul class="menu_item">
                <li class="menu_item_link"><a href="/lifestyle">lifestyle</a></li>
                <li class="menu_item_link"><a href="/photodiary">photodiary</a></li>
                <li class="menu_item_link"><a href="/music">music</a></li>
                <li class="menu_item_link"><a href="/travel">travel</a></li>
                @if (Route::has('login'))
                    @auth
                        <li class="menu_item_link"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li class="menu_item_link"><a href="{{ route('login') }}">Log in</a></li>
                        @if (Route::has('register'))
                            <li class="menu_item_link"><a href="{{ route('register') }}">register</a></li>
                        @endif
                    @endauth
                @endif
            </ul>
            <button class="hamburger hamburger--squeeze " type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
            </button>
        </nav>
    </div>
</header>