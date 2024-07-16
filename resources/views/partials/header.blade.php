<header>
    <section>
    <nav>
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
    </nav>
    <nav>
        <ul>
            @foreach ($linksHeader as $linkHeader)
                <li>
                    <a href="">
                        {{ $linkHeader }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</section>
</header>


