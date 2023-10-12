<div class="footer-container">
    <div class="footer__divider">
        <div class="fc_link_group">
            <ul class="fc_first_link_group">
                <li class="list-title">
                    DC COMICS
                </li>
                @foreach ($footer_links as $footer_link)
                <li>
                    <a href="{{$footer_link['href']}}"
                        class="nav-link">{{$footer_link['text']}}
                    </a>
                </li>
                @endforeach
            </ul>
            <ul class="fc_second_link_group">
                <li class="list-title">
                    SHOP
                </li>
                @foreach ($shop_links as $shop_link)
                <li>
                    <a href="{{$shop_link['href']}}"
                        class="nav-link">{{$shop_link['text']}}
                    </a>
                </li>
                @endforeach
            </ul>
            <ul class="fc_third_link_group">
                <li class="list-title">DC</li>
                @foreach ($dc_links as $dc_link)
                <li>
                    <a href="{{$dc_link['href']}}"
                        class="nav-link">{{$dc_link['text']}}
                    </a>
                </li>
                @endforeach
            </ul>
            <ul class="fc_fourth_link_group">
                <li class="list-title">
                    SITES
                </li>
                @foreach ($sites_links as $sites_link)
                <li>
                    <a href="{{$sites_link['href']}}"
                        class="nav-link">{{$sites_link['text']}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="fc_img_overlay_container">
            <img src="{{url('/assets/images/dc-logo-bg.png')}}" alt="" />
        </div>
    </div>
    <div class="bottom-footer">
        <div class="fc_btn_container">
            <button class="call__to__action__button">Sign Up Now</button>
        </div>
        <div class="fc_social_icons_container">
            <span class="hl-text">FOLLOW US</span>
            <img src="{{url('assets/images/footer-facebook')}}" alt="" />
            <img src="{{url('/assets/images/footer-twitter.png')}}" alt="" />
            <img src="{{url('/assets/images/footer-youtube.png')}}" alt="" />
            <img src="{{url('/assets/images/footer-pinterest.png')}}" alt="" />
            <img src="{{url('/assets/images/footer-periscope.png')}}" alt="" />
        </div>
    </div>
</div>