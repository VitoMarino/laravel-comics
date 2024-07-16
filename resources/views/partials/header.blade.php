<header>
    <section>
    <nav>
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
    </nav>
    <nav>
        <ul>
            @foreach ($elements as $element)
                <li>
                    <a href="">
                        {{ $element }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</section>
</header>


