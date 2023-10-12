<nav>
    <div class="header">
        <div class="header__content">
            <div class="header__logo">
                <img src="{{url('/assets/images/dc-logo.png')}}" alt="" />
            </div>
            <div class="header__links">
                <ul>
                    @foreach ($header_links as $header_link)
                    <li>
                        <a href="{{$header_link['href']}}"
                            class="nav-link">{{$header_link['text']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>