        <header>
            <img src="{{ asset('img/marchio-sito-test.png') }}" alt="La Molisana">
            <ul class="list-inline">
                <li class="{{ route::currentRoutName() == 'home' ? 'active' : '' }}">
                    <a href="{{ route('home') }}">HOME</a>
                </li>
                <li {{ route::currentRoutName() == 'prodotto' ? 'active' : '' }}>
                    <a href="{{ route('prodotti') }}">PRODOTTI</a>
                </li>
                <li {{ route::currentRoutName() == 'news' ? 'active' : '' }}>
                    <a href="{{ route('news') }}">NEWS</a>
                </li>
            </ul>
        </header>
        