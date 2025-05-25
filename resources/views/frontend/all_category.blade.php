@extends('frontend.layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section id="subheader" class="relative bg-light">
        <div class="container relative z-index-1000">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">{{ translate('Home') }}</a></li>
                        <li class="active">{{ translate('Catalog') }}</li>
                    </ul>
                    <h1 class="text-uppercase">{{ translate('Catalog') }}</h1>
                    <p class="col-lg-10 lead">{{ get_setting('catalog_subtitle', null, App::getLocale()) ?? 'Transform Your Garden into a Personal Paradise!' }}</p>
                </div>
            </div>
        </div>
        <img src="{{ static_asset('front/images/logo-wm.webp') }}" class="abs end-0 bottom-0 z-2 w-20" alt="{{ env('APP_NAME') }}">
    </section>

    <!-- All Categories -->
    <section class="rtl">
        <div class="container">
            <div class="row g-4">
                @foreach ($categories->take(4) as $key => $category)
                    <div class="col-lg-6">
                        <div class="p-4 h-100 hover" data-bgcolor="#{{ ['DCE0D9', 'E9E8E1', 'dce0ce', 'f3edde'][$key % 4] }}">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <div class="size-100px overflow-hidden border">
                                        <img src="{{ uploaded_asset($category->banner) }}" class="w-100 hover-scale-1-1" alt="{{ $category->getTranslation('name') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <span>{{ translate('Up to 50% Off') }}</span>
                                    <h3>{{ $category->getTranslation('name') }}</h3>
                                    <a class="btn-main bg-color-2" href="{{ route('products.category', $category->slug) }}">{{ translate('Shop Now') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $('.show-hide-cetegoty').on('click', function() {
            var el = $(this).siblings('ul');
            if (el.hasClass('less')) {
                el.removeClass('less');
                $(this).html('{{ translate('Less') }} <i class="las la-angle-up"></i>');
            } else {
                el.addClass('less');
                $(this).html('{{ translate('More') }} <i class="las la-angle-down"></i>');
            }
        });
    </script>
@endsection
