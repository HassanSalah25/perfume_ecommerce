@extends('frontend.layouts.app')

@section('content')
    <style>
        @media (max-width: 767px) {
            #flash_deal .flash-deals-baner {
                height: 203px !important;
            }
        }
    </style>
    @php $lang = get_system_language()->code;  @endphp
    <section id="section-intro" class="slider-light no-top no-bottom relative overflow-hidden z-1000">
        <div class="v-center relative">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @php
                        $slider_images_json = get_setting('home_slider_images', null, $lang);
                        $slider_links_json = get_setting('home_slider_links', null, $lang);
                        $decoded_slider_images = $slider_images_json ? json_decode($slider_images_json, true) : [];
                        $sliders = get_slider_images($decoded_slider_images);
                        $slider_links = $slider_links_json ? json_decode($slider_links_json, true) : [];
                    @endphp

                    @foreach ($sliders as $key => $slider)
                        <div class="swiper-slide">
                            <div class="swiper-inner jarallax">
                                <img src="{{ $slider ? my_asset($slider->file_name) : static_asset('assets/img/placeholder.jpg') }}"
                                     class="jarallax-img" alt="{{ env('APP_NAME') }} promo"
                                     onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">

                                <div class="sw-caption z-1000">
                                    <div class="container">
                                        <div class="row g-4 align-items-center justify-content-between">
                                            <div class="spacer-double"></div>

                                            <!-- Text Left -->
                                            <div class="col-lg-5">
                                                <div class="spacer-single"></div>
                                                <div class="sw-text-wrapper">
                                                    <div class="subtitle">{{ translate('Best Quality Plants') }}</div>
                                                    <h2 class="slider-title text-uppercase mb-4">
                                                        {{ translate('Discover Amazing') }} <span
                                                                class="id-color-2">{{ translate('variety of plants') }}</span>
                                                    </h2>
                                                    <p class="slider-text">{{ translate('From vibrant flowering plants to lush tropical greens, we offer an incredible variety to turn your space into a living paradise.') }}</p>

                                                    <div class="d-flex mb-4 slider-extra xs-hide">
                                                        @foreach ([
                                                            ['icon' => 'coupon-svgrepo-com.svg', 'label' => 'Special Price'],
                                                            ['icon' => 'shipped-truck-svgrepo-com.svg', 'label' => 'Free Delivery'],
                                                            ['icon' => 'recommended-like-svgrepo-com.svg', 'label' => 'Guarantee'],
                                                        ] as $badge)
                                                            <div class="d-inline me-3 w-130px text-center overlay-white-6 p-3 rounded-1">
                                                                <img src="{{ static_asset('front/images/shop/svg/' . $badge['icon']) }}"
                                                                     class="w-40 mb-1" alt="">
                                                                <h6 class="mb-0">{{ translate($badge['label']) }}</h6>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <a class="btn-main mb10 mb-3"
                                                       href="{{ $slider_links[$key] ?? '#' }}">{{ translate('Shop Now') }}</a>
                                                </div>
                                            </div>

                                            <!-- Image Right -->
                                            <div class="col-lg-6">
                                                <div class="relative">
                                                    <div class="abs abs-middle bg-blur overlay-white-70 w-250px p-4 rounded-1">
                                                        <h5>{{ translate('Algonema Plant with Teracota Pot') }}</h5>
                                                        <div class="de-rating-ext">
                                                        <span class="d-stars">
                                                            @for ($i = 0; $i < 5; $i++)
                                                                <i class="fa-solid fa-star"></i>
                                                            @endfor
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ $slider ? my_asset($slider->file_name) : static_asset('assets/img/placeholder.jpg') }}"
                                                         class="w-100" alt="">
                                                </div>
                                            </div>

                                            <div class="spacer-single"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Nav Arrows -->
                <div class="swiper-button-prev no-bg text-dark"></div>
                <div class="swiper-button-next no-bg text-dark"></div>
            </div>
        </div>
    </section>


    <section style="background-size: cover; background-repeat: no-repeat;" class="rtl">
        <div class="container relative z-1" style="background-size: cover; background-repeat: no-repeat;">
            <div class="row g-4 gx-5 align-items-center"
                 style="background-size: cover; background-repeat: no-repeat;">
                <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="subtitle wow fadeInUp mb-3 animated"
                         style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">
                        Our Story
                    </div>
                    <h2 class="text-uppercase wow fadeInUp animated" data-wow-delay=".2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Crafting <span
                                class="id-color-2">Beautiful Gardens</span> Since '99</h2>
                    <p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        Established in 1999, our garden service has been transforming outdoor spaces into thriving,
                        beautiful landscapes for over two decades. With a commitment to quality and personalized
                        care, our experienced team offers a full range of services, from design to maintenance,
                        ensuring your garden flourishes in every season.</p>
                    <a class="btn-main btn-line wow fadeInUp" href="projects.html" data-wow-delay=".6s"
                       style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">Our Projects</a>
                </div>

                <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="row g-4" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="col-sm-6" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="row g-4" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="col-lg-12"
                                     style="background-size: cover; background-repeat: no-repeat;">
                                    <img src="front/images/misc/3.webp" class="w-100 rounded-1 wow zoomIn animated"
                                         alt=""
                                         style="visibility: visible; animation-name: zoomIn;">
                                </div>
                                <div class="col-lg-12"
                                     style="background-size: cover; background-repeat: no-repeat;">
                                    <div class="rounded-1 relative bg-color-2 text-light p-4"
                                         style="background-size: cover; background-repeat: no-repeat;">
                                        <img src="front/images/icons/tree.png" class="abs abs-middle w-60px" alt="">
                                        <div class="de_count ps-80 wow fadeInUp"
                                             style="background-size: cover; background-repeat: no-repeat; visibility: hidden; animation-name: none;">
                                            <h2 class="mb-0 fs-32"><span class="timer" data-to="550"
                                                                         data-speed="3000"></span>+</h2>
                                            <span class="op-7">Garden Designed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="row g-4" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="col-lg-12"
                                     style="background-size: cover; background-repeat: no-repeat;">
                                    <div class="rounded-1 relative bg-color-2 text-light p-4"
                                         style="background-size: cover; background-repeat: no-repeat;">
                                        <img src="front/images/icons/happy.png" class="abs abs-middle w-60px" alt="">
                                        <div class="de_count ps-80 wow fadeInUp animated"
                                             style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">
                                            <h2 class="mb-0 fs-32"><span class="timer" data-to="850"
                                                                         data-speed="3000"></span>+</h2>
                                            <span class="op-7">Happy Customers</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12"
                                     style="background-size: cover; background-repeat: no-repeat;">
                                    <img src="front/images/misc/4.webp" class="w-100 rounded-1 wow zoomIn animated"
                                         alt=""
                                         style="visibility: visible; animation-name: zoomIn;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- Flash Deal -->
    @php
        $flash_deal = get_featured_flash_deal();
    @endphp
    @if ($flash_deal != null)
        <section class="mb-2 mb-md-3 mt-2 mt-md-3" id="flash_deal">
            <div class="container">
                <!-- Top Section -->
                <div class="d-flex flex-wrap mb-2 mb-md-3 align-items-baseline justify-content-between">
                    <!-- Title -->
                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                        <span class="d-inline-block">{{ translate('Flash Sale') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24"
                             class="ml-3">
                            <path id="Path_28795" data-name="Path 28795"
                                  d="M30.953,13.695a.474.474,0,0,0-.424-.25h-4.9l3.917-7.81a.423.423,0,0,0-.028-.428.477.477,0,0,0-.4-.207H21.588a.473.473,0,0,0-.429.263L15.041,18.151a.423.423,0,0,0,.034.423.478.478,0,0,0,.4.2h4.593l-2.229,9.683a.438.438,0,0,0,.259.5.489.489,0,0,0,.571-.127L30.9,14.164a.425.425,0,0,0,.054-.469Z"
                                  transform="translate(-15 -5)" fill="#fcc201"/>
                        </svg>
                    </h3>
                    <!-- Links -->
                    <div>
                        <div class="text-dark d-flex align-items-center mb-0">
                            <a href="{{ route('flash-deals') }}"
                               class="fs-10 fs-md-12 fw-700 text-reset has-transition opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary mr-3">{{ translate('View All Flash Sale') }}</a>
                            <span class=" border-left border-soft-light border-width-2 pl-3">
                                <a href="{{ route('flash-deal-details', $flash_deal->slug) }}"
                                   class="fs-10 fs-md-12 fw-700 text-reset has-transition opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary">{{ translate('View All Products from This Flash Sale') }}</a>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Countdown for small device -->
                <div class="bg-white mb-3 d-md-none">
                    <div class="aiz-count-down-circle"
                         end-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                </div>

                <div class="row gutters-5 gutters-md-16">
                    <!-- Flash Deals Baner & Countdown -->
                    <div class="flash-deals-baner col-xxl-4 col-lg-5 col-6 h-200px h-md-400px h-lg-475px">
                        <a href="{{ route('flash-deal-details', $flash_deal->slug) }}">
                            <div class="h-100 w-100 w-xl-auto"
                                 style="background-image: url('{{ uploaded_asset($flash_deal->banner) }}'); background-size: cover; background-position: center center;">
                                <div class="py-5 px-md-3 px-xl-5 d-none d-md-block">
                                    <div class="bg-white">
                                        <div class="aiz-count-down-circle"
                                             end-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Flash Deals Products -->
                    <div class="col-xxl-8 col-lg-7 col-6">
                        @php
                            $flash_deal_products = get_flash_deal_products($flash_deal->id);
                        @endphp
                        <div class="aiz-carousel border-top @if (count($flash_deal_products) > 8) border-right @endif arrow-inactive-none arrow-x-0"
                             data-rows="2" data-items="5" data-xxl-items="5" data-xl-items="3.5" data-lg-items="3"
                             data-md-items="2"
                             data-sm-items="2.5" data-xs-items="1.7" data-arrows="true" data-dots="false">
                            @foreach ($flash_deal_products as $key => $flash_deal_product)
                                <div class="carousel-box border-left border-bottom">
                                    @if ($flash_deal_product->product != null && $flash_deal_product->product->published != 0)
                                        @php
                                            $product_url = route('product', $flash_deal_product->product->slug);
                                            if ($flash_deal_product->product->auction_product == 1) {
                                                $product_url = route('auction-product', $flash_deal_product->product->slug);
                                            }
                                        @endphp
                                        <div
                                                class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center has-transition hov-shadow-out z-1">
                                            <a href="{{ $product_url }}"
                                               class="d-block py-md-3 overflow-hidden hov-scale-img"
                                               title="{{ $flash_deal_product->product->getTranslation('name') }}">
                                                <!-- Image -->
                                                <img src="{{ get_image($flash_deal_product->product->thumbnail) }}"
                                                     class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition"
                                                     alt="{{ $flash_deal_product->product->getTranslation('name') }}"
                                                     onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                <!-- Price -->
                                                <div
                                                        class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price lh-1-5">
                                                    <span
                                                            class="d-block text-primary fw-700">{{ home_discounted_base_price($flash_deal_product->product) }}</span>
                                                    @if (home_base_price($flash_deal_product->product) != home_discounted_base_price($flash_deal_product->product))
                                                        <del
                                                                class="d-block fw-400 text-secondary">{{ home_base_price($flash_deal_product->product) }}</del>
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif



    @if (count($featured_categories) > 0)
        <section class="p-4" style="background-size: cover; background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row g-4">
                    @foreach ($featured_categories->take(4) as $index => $category)
                        @php
                            $category_name = $category->getTranslation('name');
                            $image = isset($category->bannerImage->file_name)
                                ? my_asset($category->bannerImage->file_name)
                                : static_asset('assets/img/placeholder.jpg');

                            $delay = $index * 0.3; // .0s, .3s, .6s, etc.
                        @endphp

                        <div class="col-lg-3 col-sm-6 wow fadeInRight animated"
                             data-wow-delay=".{{ $delay }}s"
                             style="visibility: visible; animation-delay: .{{ $delay }}s; animation-name: fadeInRight;">
                            <div class="bg-color text-light rounded-1 overflow-hidden">
                                <div class="hover relative overflow-hidden text-light text-center">
                                    <img src="{{ $image }}" class="hover-scale-1-1 w-100" alt="{{ $category_name }}">
                                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <a class="btn-line" href="{{ route('products.category', $category->slug) }}">
                                            {{ translate('View Details') }}
                                        </a>
                                    </div>
                                    <img src="{{ static_asset('images/logo-icon.webp') }}" class="abs abs-centered w-20"
                                         alt="">
                                    <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                        <h4 class="mb-3">{{ $category_name }}</h4>
                                    </div>
                                    <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0 Z-1"></div>
                                </div>

                                <div class="p-4 py-2">
                                    <p class="mt-3">
                                        {{ translate('Explore the best products in') }} {{ $category_name }}.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    <!-- Banner section 1 -->
    @php $homeBanner1Images = get_setting('home_banner1_images', null, $lang);   @endphp
    @if ($homeBanner1Images != null)
        <div class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                @php
                    $banner_1_imags = json_decode($homeBanner1Images);
                    $data_md = count($banner_1_imags) >= 2 ? 2 : 1;
                    $home_banner1_links = get_setting('home_banner1_links', null, $lang);
                @endphp
                <div class="w-100">
                    <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15"
                         data-items="{{ count($banner_1_imags) }}" data-xxl-items="{{ count($banner_1_imags) }}"
                         data-xl-items="{{ count($banner_1_imags) }}" data-lg-items="{{ $data_md }}"
                         data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true"
                         data-dots="false">
                        @foreach ($banner_1_imags as $key => $value)
                            <div class="carousel-box overflow-hidden hov-scale-img">
                                <a href="{{ isset(json_decode($home_banner1_links, true)[$key]) ? json_decode($home_banner1_links, true)[$key] : '' }}"
                                   class="d-block text-reset overflow-hidden">
                                    <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                         data-src="{{ uploaded_asset($value) }}" alt="{{ env('APP_NAME') }} promo"
                                         class="img-fluid lazyload w-100 has-transition"
                                         onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Featured Products -->
    <div id="section_featured">

    </div>


    @if (addon_is_activated('preorder'))

        <!-- Preorder Banner 1 -->
        @php $homepreorder_banner_1Images = get_setting('home_preorder_banner_1_images', null, $lang);   @endphp
        @if ($homepreorder_banner_1Images != null)
            <div class="mb-2 mb-md-3 mt-2 mt-md-3">
                <div class="container">
                    @php
                        $banner_2_imags = json_decode($homepreorder_banner_1Images);
                        $data_md = count($banner_2_imags) >= 2 ? 2 : 1;
                        $home_preorder_banner_1_links = get_setting('home_preorder_banner_1_links', null, $lang);
                    @endphp
                    <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15"
                         data-items="{{ count($banner_2_imags) }}" data-xxl-items="{{ count($banner_2_imags) }}"
                         data-xl-items="{{ count($banner_2_imags) }}" data-lg-items="{{ $data_md }}"
                         data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true"
                         data-dots="false">
                        @foreach ($banner_2_imags as $key => $value)
                            <div class="carousel-box overflow-hidden hov-scale-img">
                                <a href="{{ isset(json_decode($home_preorder_banner_1_links, true)[$key]) ? json_decode($home_preorder_banner_1_links, true)[$key] : '' }}"
                                   class="d-block text-reset overflow-hidden">
                                    <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                         data-src="{{ uploaded_asset($value) }}" alt="{{ env('APP_NAME') }} promo"
                                         class="img-fluid lazyload w-100 has-transition"
                                         onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <section class="jarallax text-light relative"
                 style="background-image: url('{{ asset('images/background/8.webp') }}');">
            <div class="de-overlay"></div>
            <div class="container relative z-1">
                <div class="row g-4 gx-5 align-items-center rtl">
                    <div class="col-lg-6">
                        <div class="subtitle wow fadeInUp mb-3">{{ translate('Our Story') }}</div>
                        <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".2s">
                            {{ translate('Crafting Beautiful Gardens') }} <span
                                    class="id-color-2">{{ translate("Since '99") }}</span>
                        </h2>
                        <p class="wow fadeInUp">
                            {{ translate("Established in 1999, our garden service has been transforming outdoor spaces into thriving, beautiful landscapes for over two decades. With a commitment to quality and personalized care, our experienced team offers a full range of services, from design to maintenance, ensuring your garden flourishes in every season.") }}
                        </p>
                        <a class="btn-main btn-line wow fadeInUp" data-wow-delay=".6s" href="{{ route('projects') }}">
                            {{ translate('Our Projects') }}
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <div class="row g-4">
                            <!-- Trustpilot Rating -->
                            <div class="col-sm-6">
                                <div class="text-center p-4 bg-blur rounded-1">
                                    <h4 class="mb-1 fs-24">{{ translate('Excellent') }}</h4>
                                    <div class="de-rating-ext fs-18">
                                        <div class="d-stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                        <div class="fs-15 mb-2">{{ translate('Based on 185 reviews') }}</div>
                                        <img src="{{ asset('images/misc/trustpilot.webp') }}" class="w-120px"
                                             alt="Trustpilot">
                                    </div>
                                </div>

                                <!-- Gardens Designed -->
                                <div class="rounded-1 relative bg-dark-2 p-4">
                                    <img src="{{ asset('images/icons/tree.png') }}" class="abs abs-middle w-60px"
                                         alt="Tree Icon">
                                    <div class="de_count ps-80 wow fadeInUp">
                                        <h2 class="mb-0 fs-32"><span class="timer" data-to="550"
                                                                     data-speed="3000">550</span>+</h2>
                                        <span class="op-7">{{ translate('Garden Designed') }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Happy Customers & Google Rating -->
                            <div class="col-sm-6">
                                <div class="spacer-single sm-hide"></div>

                                <div class="rounded-1 relative bg-dark-2 p-4">
                                    <img src="{{ asset('images/icons/happy.png') }}" class="abs abs-middle w-60px"
                                         alt="Happy Icon">
                                    <div class="de_count ps-80 wow fadeInUp">
                                        <h2 class="mb-0 fs-32"><span class="timer" data-to="850"
                                                                     data-speed="3000">850</span>+</h2>
                                        <span class="op-7">{{ translate('Happy Customers') }}</span>
                                    </div>
                                </div>

                                <div class="text-center p-4 bg-blur rounded-1">
                                    <h4 class="mb-1 fs-24">4.8 {{ translate('out of 5') }}</h4>
                                    <div class="de-rating-ext fs-18">
                                        <div class="d-stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                        <div class="fs-15 mb-2">{{ translate('Based on 200 reviews') }}</div>
                                        <img src="{{ asset('images/misc/google.webp') }}" class="w-120px" alt="Google">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Jarallax container auto handled by class --}}
        </section>


        <!-- Featured Preorder Products -->
        <div id="section_featured_preorder_products">

        </div>
    @endif


    <!-- Banner Section 2 -->
    <section class="pb-0 rtl">
        <div class="container">
            <div class="row g-4">
                @php
                    $promos = [
                        [
                            'image' => 'front/images/shop/misc/5.webp',
                            'title' => 'Natural Plants',
                            'bg' => '#DCE0D9',
                            'btn' => 'Shop Now',
                            'link' => route('products.all')
                        ],
                        [
                            'image' => 'front/images/shop/misc/6.webp',
                            'title' => 'Shop Gifts',
                            'bg' => '#E9E8E1',
                            'btn' => 'Shop Now',
                            'link' => route('products.all')
                        ],
                        [
                            'image' => 'front/images/shop/misc/8.webp',
                            'title' => 'Garden Care',
                            'bg' => '#DCE0CE',
                            'btn' => 'Order Now',
                            'link' => route('products.all')
                        ],
                        [
                            'image' => 'front/images/shop/misc/9.webp',
                            'title' => 'Garden Accessories',
                            'bg' => '#F3EDDE',
                            'btn' => 'Shop Now',
                            'link' => route('products.all')
                        ],
                    ];
                @endphp

                @foreach ($promos as $promo)
                    <div class="col-lg-6">
                        <div class="p-4 h-100 hover" data-bgcolor="{{ $promo['bg'] }}">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <img src="{{ asset($promo['image']) }}" class="w-100 hover-scale-1-1"
                                         alt="{{ $promo['title'] }}">
                                </div>
                                <div class="col-md-6">
                                    <span>Up to 50% Off</span>
                                    <h3>{{ $promo['title'] }}</h3>
                                    <a class="btn-main bg-color-2" href="{{ $promo['link'] }}">{{ $promo['btn'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Best Selling  -->
    <div id="section_best_selling">

    </div>

    <!-- New Products -->
    <div id="section_newest">

    </div>

    @php
        $testimonials = [
        [
            'name' => 'Michael S.',
            'role' => 'Customer',
            'image' => 'front/images/testimonial/1.webp',
            'rating' => 5,
            'comment' => "Absolutely fantastic service! My phone's screen was cracked, and GadgetFix had it fixed in no time. The repair was flawless, and the customer service was top-notch. Highly recommend!"
        ],
        [
            'name' => 'Robert L.',
            'role' => 'Customer',
            'image' => 'front/images/testimonial/2.webp',
            'rating' => 5,
            'comment' => "Smooth and professional. They kept me updated and delivered exactly what was promised. 10/10 would come again."
        ],
        [
            'name' => 'Jake M.',
            'role' => 'Customer',
            'image' => 'front/images/testimonial/3.webp',
            'rating' => 4,
            'comment' => "Great experience overall. The repair was fast and the pricing was fair. Would recommend to friends."
        ],
        [
            'name' => 'Alex P.',
            'role' => 'Customer',
            'image' => 'front/images/testimonial/4.webp',
            'rating' => 5,
            'comment' => "Super helpful staff and amazing turnaround. These guys know their stuff!"
        ],
        [
            'name' => 'Carlos R.',
            'role' => 'Customer',
            'image' => 'front/images/testimonial/5.webp',
            'rating' => 5,
        'comment' => "Highly impressed. From the website to the service — seamless. My tech is happy, and so am I."
            ]
        ];
    @endphp

    @if (!empty($testimonials))
        <section class="jarallax">
            <img src="{{ static_asset('front/images/background/7.webp') }}" class="jarallax-img" alt="">
            <div class="container relative z-2">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                            @foreach ($testimonials as $testimonial)
                                <div class="item">
                                    <div class="bg-light relative p-4">
                                        <i class="icofont-quote-right abs top-0 end-0 fs-32 m-4 id-color-2"></i>
                                        <div class="relative">
                                            <img class="relative z-2 w-60px circle" alt="{{ $testimonial['name'] }}"
                                                 src="{{ static_asset($testimonial['image']) }}">
                                        </div>
                                        <div class="mt-3 fw-600">{{ $testimonial['name'] }}
                                            <span>{{ $testimonial['role'] }}</span></div>
                                        <div class="de-rating-ext mb-3">
                                        <span class="d-stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="fa-solid fa-star{{ $i < $testimonial['rating'] ? '' : '-o' }}"></i>
                                            @endfor
                                        </span>
                                        </div>
                                        <p>"{{ $testimonial['comment'] }}"</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


    @php
        $hero_banner = [
    'title' => 'Discover Amazing <span class="id-color-2">variety of plants</span>',
    'subtitle' => 'Best Quality Plants',
    'description' => 'From vibrant flowering plants to lush tropical greens, we offer an incredible variety to turn your space into a living paradise.',
    'btn_text' => 'Shop Now',
    'btn_link' => 'shop-shop-all.html',
    'background_image' => 'front/images/shop/slider/bg.webp',
    'hero_image' => 'front/images/shop/misc/7.webp',
];

    @endphp
    <section class="jarallax rtl">
        <img src="{{ asset($hero_banner['background_image']) }}" class="jarallax-img" alt="">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-between">

                <div class="col-lg-5">
                    <div class="sw-text-wrapper">
                        <div class="subtitle">{{ $hero_banner['subtitle'] }}</div>
                        <h2 class="mb-2 text-uppercase">{!! $hero_banner['title'] !!}</h2>
                        <p>{{ $hero_banner['description'] }}</p>
                        <a class="btn-main mb10 mb-3" href="{{ $hero_banner['btn_link'] }}">{{ $hero_banner['btn_text'] }}</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="relative">
                        <img src="{{ asset($hero_banner['hero_image']) }}" class="w-100" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    @if ($blogs->count() > 0)
        <section class="rtl">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 text-center">
                        <h3 class="text-uppercase">{{ translate('Latest Blog') }}</h3>
                    </div>

                    @foreach ($blogs as $blog)
                        <div class="col-lg-6">
                            <div class="bg-light overflow-hidden">
                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <div class="auto-height relative" style="background-image: url('{{ uploaded_asset($blog->banner) }}'); background-size: cover;">
                                            <div class="abs start-0 top-0 bg-color-2 text-white p-3 pb-2 m-3 text-center fw-600 rounded-5px">
                                                <div class="fs-36 mb-0">{{ $blog->created_at->format('d') }}</div>
                                                <span>{{ $blog->created_at->format('M') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 relative">
                                        <div class="p-30 pb-60">
                                            <h4>
                                                <a class="text-dark" href="{{ route('blog.details', $blog->slug) }}">
                                                    {{ $blog->title }}
                                                </a>
                                            </h4>
                                            <p class="mb-0">
                                                {{ Str::limit(strip_tags($blog->content), 100) }}
                                            </p>
                                            <div class="abs bottom-0 pb-20">
                                                <div class="d-inline fs-14 fw-600 me-3">
                                                    <i class="icofont-chat id-color-2 me-2"></i>{{ $blog->comments_count ?? 0 }} {{ translate('Comments') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endif
    <!-- Banner Section 3 -->
    @php $homeBanner3Images = get_setting('home_banner3_images', null, $lang);   @endphp
    @if ($homeBanner3Images != null)
        <div class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                @php
                    $banner_3_imags = json_decode($homeBanner3Images);
                    $data_md = count($banner_3_imags) >= 2 ? 2 : 1;
                    $home_banner3_links = get_setting('home_banner3_links', null, $lang);
                @endphp
                <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15"
                     data-items="{{ count($banner_3_imags) }}" data-xxl-items="{{ count($banner_3_imags) }}"
                     data-xl-items="{{ count($banner_3_imags) }}" data-lg-items="{{ $data_md }}"
                     data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true"
                     data-dots="false">
                    @foreach ($banner_3_imags as $key => $value)
                        <div class="carousel-box overflow-hidden hov-scale-img">
                            <a href="{{ isset(json_decode($home_banner3_links, true)[$key]) ? json_decode($home_banner3_links, true)[$key] : '' }}"
                               class="d-block text-reset overflow-hidden">
                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                     data-src="{{ uploaded_asset($value) }}" alt="{{ env('APP_NAME') }} promo"
                                     class="img-fluid lazyload w-100 has-transition"
                                     onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <!-- Auction Product -->
    @if (addon_is_activated('auction'))
        <div id="auction_products">

        </div>
    @endif

    <!-- Cupon -->
    @if (get_setting('coupon_system') == 1)
        <div class="mb-2 mb-md-3 mt-2 mt-md-3"
             style="background-color: {{ get_setting('cupon_background_color', '#292933') }}">
            <div class="container">
                <div class="row py-5">
                    <div class="col-xl-8 text-center text-xl-left">
                        <div class="d-lg-flex">
                            <div class="mb-3 mb-lg-0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="109.602" height="93.34" viewBox="0 0 109.602 93.34">
                                    <defs>
                                        <clipPath id="clip-pathcup">
                                            <path id="Union_10" data-name="Union 10" d="M12263,13778v-15h64v-41h12v56Z"
                                                  transform="translate(-11966 -8442.865)" fill="none" stroke="#fff"
                                                  stroke-width="2"/>
                                        </clipPath>
                                    </defs>
                                    <g id="Group_24326" data-name="Group 24326"
                                       transform="translate(-274.201 -5254.611)">
                                        <g id="Mask_Group_23" data-name="Mask Group 23"
                                           transform="translate(-3652.459 1785.452) rotate(-45)"
                                           clip-path="url(#clip-pathcup)">
                                            <g id="Group_24322" data-name="Group 24322"
                                               transform="translate(207 18.136)">
                                                <g id="Subtraction_167" data-name="Subtraction 167"
                                                   transform="translate(-12177 -8458)" fill="none">
                                                    <path
                                                            d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z"
                                                            stroke="none"/>
                                                    <path
                                                            d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z"
                                                            stroke="none" fill="#fff"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_24321" data-name="Group 24321"
                                           transform="translate(-3514.477 1653.317) rotate(-45)">
                                            <g id="Subtraction_167-2" data-name="Subtraction 167"
                                               transform="translate(-12177 -8458)" fill="none">
                                                <path
                                                        d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z"
                                                        stroke="none"/>
                                                <path
                                                        d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z"
                                                        stroke="none" fill="#fff"/>
                                            </g>
                                            <g id="Group_24325" data-name="Group 24325">
                                                <rect id="Rectangle_18578" data-name="Rectangle 18578" width="8"
                                                      height="2" transform="translate(120 5287)" fill="#fff"/>
                                                <rect id="Rectangle_18579" data-name="Rectangle 18579" width="8"
                                                      height="2" transform="translate(132 5287)" fill="#fff"/>
                                                <rect id="Rectangle_18581" data-name="Rectangle 18581" width="8"
                                                      height="2" transform="translate(144 5287)" fill="#fff"/>
                                                <rect id="Rectangle_18580" data-name="Rectangle 18580" width="8"
                                                      height="2" transform="translate(108 5287)" fill="#fff"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="ml-lg-3">
                                <h5 class="fs-36 fw-400 text-white mb-3">{{ translate(get_setting('cupon_title')) }}</h5>
                                <h5 class="fs-20 fw-400 text-gray">{{ translate(get_setting('cupon_subtitle')) }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 text-center text-xl-right mt-4">
                        <a href="{{ route('coupons.all') }}"
                           class="btn text-white hov-bg-white hov-text-dark border border-width-2 fs-16 px-4"
                           style="border-radius: 28px;background: rgba(255, 255, 255, 0.2);box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.16);">{{ translate('View All Coupons') }}</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Category wise Products -->
    <div id="section_home_categories" class="mb-2 mb-md-3 mt-2 mt-md-3">

    </div>

    @if (addon_is_activated('preorder'))
        <!-- Newest Preorder Products -->
        @include('preorder.frontend.home_page.newest_preorder')
    @endif

    <!-- Classified Product -->
    @if (get_setting('classified_product') == 1)
        @php
            $classified_products = get_home_page_classified_products(6);
        @endphp
        @if (count($classified_products) > 0)
            <section class="mb-2 mb-md-3 mt-2 mt-md-3">
                <div class="container">
                    <!-- Top Section -->
                    <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                        <!-- Title -->
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                            <span class="">{{ translate('Classified Ads') }}</span>
                        </h3>
                        <!-- Links -->
                        <div class="d-flex">
                            <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                               href="{{ route('customer.products') }}">{{ translate('View All Products') }}</a>
                        </div>
                    </div>
                    <!-- Banner -->
                    @php
                        $classifiedBannerImage = get_setting('classified_banner_image', null, $lang);
                        $classifiedBannerImageSmall = get_setting('classified_banner_image_small', null, $lang);
                    @endphp
                    @if ($classifiedBannerImage != null || $classifiedBannerImageSmall != null)
                        <div class="mb-3 overflow-hidden hov-scale-img d-none d-md-block">
                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                 data-src="{{ uploaded_asset($classifiedBannerImage) }}"
                                 alt="{{ env('APP_NAME') }} promo" class="lazyload img-fit h-100 has-transition"
                                 onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                        </div>
                        <div class="mb-3 overflow-hidden hov-scale-img d-md-none">
                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                 data-src="{{ $classifiedBannerImageSmall != null ? uploaded_asset($classifiedBannerImageSmall) : uploaded_asset($classifiedBannerImage) }}"
                                 alt="{{ env('APP_NAME') }} promo" class="lazyload img-fit h-100 has-transition"
                                 onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                        </div>
                    @endif
                    <!-- Products Section -->
                    <div class="bg-white">
                        <div class="row no-gutters border-top border-left">
                            @foreach ($classified_products as $key => $classified_product)
                                <div
                                        class="col-xl-4 col-md-6 border-right border-bottom has-transition hov-shadow-out z-1">
                                    <div class="aiz-card-box p-2 has-transition bg-white">
                                        <div class="row hov-scale-img">
                                            <div class="col-4 col-md-5 mb-3 mb-md-0">
                                                <a href="{{ route('customer.product', $classified_product->slug) }}"
                                                   class="d-block overflow-hidden h-auto h-md-150px text-center">
                                                    <img class="img-fluid lazyload mx-auto has-transition"
                                                         src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                         data-src="{{ isset($classified_product->thumbnail->file_name) ? my_asset($classified_product->thumbnail->file_name) : static_asset('assets/img/placeholder.jpg') }}"
                                                         alt="{{ $classified_product->getTranslation('name') }}"
                                                         onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <h3
                                                        class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                                    <a href="{{ route('customer.product', $classified_product->slug) }}"
                                                       class="d-block text-reset hov-text-primary">{{ $classified_product->getTranslation('name') }}</a>
                                                </h3>
                                                <div class="fs-14 mb-3">
                                                    <span
                                                            class="text-secondary">{{ $classified_product->user ? $classified_product->user->name : '' }}</span><br>
                                                    <span
                                                            class="fw-700 text-primary">{{ single_price($classified_product->unit_price) }}</span>
                                                </div>
                                                @if ($classified_product->conditon == 'new')
                                                    <span
                                                            class="badge badge-inline badge-soft-info fs-13 fw-700 p-3 text-info"
                                                            style="border-radius: 20px;">{{ translate('New') }}</span>
                                                @elseif($classified_product->conditon == 'used')
                                                    <span
                                                            class="badge badge-inline badge-soft-danger fs-13 fw-700 p-3 text-danger"
                                                            style="border-radius: 20px;">{{ translate('Used') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif

    <!-- Top Sellers -->
    @if (get_setting('vendor_system_activation') == 1)
        @php
            $best_selers = get_best_sellers(10);
        @endphp
        @if (count($best_selers) > 0)
            <section class="mb-2 mb-md-3 mt-2 mt-md-3">
                <div class="container">
                    <!-- Top Section -->
                    <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                        <!-- Title -->
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                            <span class="pb-3">{{ translate('Top Sellers') }}</span>
                        </h3>
                        <!-- Links -->
                        <div class="d-flex">
                            <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                               href="{{ route('sellers') }}">{{ translate('View All Sellers') }}</a>
                        </div>
                    </div>
                    <!-- Sellers Section -->
                    <div class="aiz-carousel arrow-x-0 arrow-inactive-none" data-items="5" data-xxl-items="5"
                         data-xl-items="4" data-lg-items="3.4" data-md-items="2.5" data-sm-items="2" data-xs-items="1.4"
                         data-arrows="true" data-dots="false">
                        @foreach ($best_selers as $key => $seller)
                            @if ($seller->user != null)
                                <div
                                        class="carousel-box h-100 position-relative text-center border-right border-top border-bottom @if ($key == 0) border-left @endif has-transition hov-animate-outline">
                                    <div class="position-relative px-3" style="padding-top: 2rem; padding-bottom:2rem;">
                                        <!-- Shop logo & Verification Status -->
                                        <div class="position-relative mx-auto size-100px size-md-120px">
                                            <a href="{{ route('shop.visit', $seller->slug) }}"
                                               class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img"
                                               tabindex="0"
                                               style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                                     data-src="{{ uploaded_asset($seller->logo) }}"
                                                     alt="{{ $seller->name }}"
                                                     class="img-fit lazyload has-transition"
                                                     onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                                            </a>
                                            <div class="absolute-top-right z-1 mr-md-2 mt-1 rounded-content bg-white">
                                                @if ($seller->verification_status == 1)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24"
                                                         viewBox="0 0 24.001 24">
                                                        <g id="Group_25929" data-name="Group 25929"
                                                           transform="translate(-480 -345)">
                                                            <circle id="Ellipse_637" data-name="Ellipse 637" cx="12"
                                                                    cy="12" r="12" transform="translate(480 345)"
                                                                    fill="#fff"/>
                                                            <g id="Group_25927" data-name="Group 25927"
                                                               transform="translate(480 345)">
                                                                <path id="Union_5" data-name="Union 5"
                                                                      d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z"
                                                                      transform="translate(0 0)" fill="#3490f3"/>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24"
                                                         viewBox="0 0 24.001 24">
                                                        <g id="Group_25929" data-name="Group 25929"
                                                           transform="translate(-480 -345)">
                                                            <circle id="Ellipse_637" data-name="Ellipse 637" cx="12"
                                                                    cy="12" r="12" transform="translate(480 345)"
                                                                    fill="#fff"/>
                                                            <g id="Group_25927" data-name="Group 25927"
                                                               transform="translate(480 345)">
                                                                <path id="Union_5" data-name="Union 5"
                                                                      d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z"
                                                                      transform="translate(0 0)" fill="red"/>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Shop name -->
                                        <h2 class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                                            <a href="{{ route('shop.visit', $seller->slug) }}"
                                               class="text-reset hov-text-primary" tabindex="0">{{ $seller->name }}</a>
                                        </h2>
                                        <!-- Shop Rating -->
                                        <div class="rating rating-mr-2 text-dark mb-3">
                                            {{ renderStarRating($seller->rating) }}
                                            <span class="opacity-60 fs-14">({{ $seller->num_of_reviews }}
                                                {{ translate('Reviews') }})</span>
                                        </div>
                                        <!-- Visit Button -->
                                        <a href="{{ route('shop.visit', $seller->slug) }}" class="btn-visit">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                            <span class="button-text">{{ translate('Visit Store') }}</span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endif

    <!-- Top Brands -->
    @if (get_setting('top_brands') != null)
        <section class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                <!-- Top Section -->
                <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                    <!-- Title -->
                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">{{ translate('Top Brands') }}</h3>
                    <!-- Links -->
                    <div class="d-flex">
                        <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                           href="{{ route('brands.all') }}">{{ translate('View All Brands') }}</a>
                    </div>
                </div>
                <!-- Brands Section -->
                <div class="bg-white px-3">
                    <div
                            class="row row-cols-xxl-6 row-cols-xl-6 row-cols-lg-4 row-cols-md-4 row-cols-3 gutters-16 border-top border-left">
                        @php
                            $top_brands = json_decode(get_setting('top_brands'));
                            $brands = get_brands($top_brands);
                        @endphp
                        @foreach ($brands as $brand)
                            <div
                                    class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                                <a href="{{ route('products.brand', $brand->slug) }}" class="d-block p-sm-3">
                                    <img src="{{ $brand->logo != null ? uploaded_asset($brand->logo) : static_asset('assets/img/placeholder.jpg') }}"
                                         class="lazyload h-100 h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100"
                                         alt="{{ $brand->getTranslation('name') }}"
                                         onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                    <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                                        {{ $brand->getTranslation('name') }}
                                    </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection
@section('script')

    <!-- Javascript Files ================================================== -->
    <script src="{{ asset('front/js/plugins.js') }}"></script>
    <script src="{{ asset('front/js/designesia.js') }}"></script>
    <script src="{{ asset('front/js/swiper.js') }}"></script>
    <script src="{{ asset('front/js/custom-marquee.js') }}"></script>
    <script src="{{ asset('front/js/custom-swiper-2.js') }}"></script>


@endsection

