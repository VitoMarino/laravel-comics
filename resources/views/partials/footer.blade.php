<footer>
    <section class="primo-Footer">
        <nav class="nav-prima">
            <ul>
                <!--DC COMICS-->
                <li>
                    <h5>
                        DC COMICS
                    </h5>
                </li>

                @foreach ($linksFooter as $linkFooter)
                    <li>
                        <a href="">
                            {{ $linkFooter['0'] }}
                        </a>
                    </li>
                @endforeach

                <!--SHOP-->
                <li>
                    <h5>
                        SHOP
                    </h5>
                </li>
                @foreach ($linksFooter as $linkFooter)
                    <li>
                        <a href="">
                            {{ $linkFooter['1'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <!--DC-->
            <ul>
                <li>
                    <h5>
                        DC
                    </h5>
                </li>

                @foreach ($linksFooter as $linkFooter)
                <li>
                    <a href="">
                        {{ $linkFooter['0'] }}
                    </a>
                </li>
                @endforeach

            </ul>

            <!--SITES-->
            <ul>
                <li>
                    <h5>
                        SITES
                    </h5>
                </li>
                @foreach ($linksFooter as $linkFooter)
                <li>
                    <a href="">
                        {{ $linkFooter['0'] }}
                    </a>
                </li>
                @endforeach
            </ul>

            <ul>
                <li>
                    <img class="logo" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC">
                </li>
            </ul>

        </nav>
    </section>

    <section>
        <nav class="nav-footer-social">
            <ul>
                <button>
                    SIGN-UP NOW!
                </button>
            </ul>
            <ul>
                <li>
                    Follow Us
                </li>
            </ul>

            <div class="div-social">
                <img src="/img/footer-facebook.png" alt="Facebook">
                <img src="/img/footer-twitter.png" alt="x">
                <img src="/img/footer-youtube.png" alt="YouTube">
                <img src="/img/footer-pinterest.png" alt="Pinterest">
                <img src="/img/footer-periscope.png" alt="Periscope">
            </div>
        </nav>
    </section>

    <section class="footer-finale">

    </section>
</footer>
