<header class="header-light transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <!-- Logo -->
                    <div class="de-flex-col">
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                @php $header_logo = get_setting('header_logo'); @endphp
                                <img class="logo-main" src="{{ $header_logo ? uploaded_asset($header_logo) : static_asset('assets/img/logo.png') }}" alt="">
                                <img class="logo-scroll" src="{{ $header_logo ? uploaded_asset($header_logo) : static_asset('assets/img/logo.png') }}" alt="">
                                <img class="logo-mobile" src="{{ $header_logo ? uploaded_asset($header_logo) : static_asset('assets/img/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <!-- Menu -->
                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            @php
                                $menu_labels = json_decode(get_setting('header_menu_labels'), true);
                                $menu_links = json_decode(get_setting('header_menu_links'), true);
                            @endphp
                            @if ($menu_labels)
                                @foreach ($menu_labels as $key => $label)
                                    <li>
                                        <a class="menu-item {{ url()->current() == $menu_links[$key] ? 'active' : '' }}" href="{{ $menu_links[$key] }}">
                                            {{ translate($label) }}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <!-- Search / Wishlist / Cart -->
                    <div class="de-flex-col d-flex align-items-center gap-3">
                        <!-- Search -->
                        <form class="w-100" action="{{ route('search') }}" method="GET">
                            <input type="text" name="keyword" class="de-quick-search w-100 rounded-20"
                                   placeholder="{{ translate('Search...') }}"
                                   @isset($query)value="{{ $query }}"@endisset>
                        </form>


                        <!-- Wishlist -->
                        @if (Auth::check() && auth()->user()->user_type == 'customer')
                            <a class="de-icon-counter" href="{{ route('wishlists.index') }}">
                                <div class="d-counter">
                                    @include('frontend.partials.wishlist')
                                </div>
                                <img style="width: 24px;" src="{{ static_asset('front/images/ui/heart.svg') }}" alt="">
                            </a>
                        @endif


                        <!-- Cart -->
                        <div id="btn-cart" class="de-icon-counter">
                            <div class="d-counter">
                                @include('frontend.partials.cart.cart') {{-- This partial renders cart count or UI --}}
                            </div>
                            <img src="{{ static_asset('front/images/ui/cart.svg') }}" alt="">
                        </div>

                        <!-- Mobile Menu Toggle -->
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
