<div class="de__pcard text-center">
    <div class="atr__images">
        @if (discount_in_percentage($product) > 0)
            <div class="atr__promo">
                -{{ discount_in_percentage($product) }}%
            </div>
        @endif

        <a href="{{ route('product', $product->slug) }}">
            <img class="atr__image-main"
                 src="{{ get_image($product->thumbnail) }}"
                 alt="{{ $product->getTranslation('name') }}"
                 onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">

            @php $photos = json_decode($product->photos, true); @endphp
            @if (!empty($photos) && count($photos) > 1)
                <img class="atr__image-hover"
                     src="{{ uploaded_asset($photos[1]) }}"
                     alt="{{ $product->getTranslation('name') }}">
            @endif
        </a>

        <div class="atr__extra-menu">
            <a class="atr__quick-view" href="{{ route('product', $product->slug) }}">
                <i class="icon_zoom-in_alt"></i>
            </a>
            <div class="atr__add-cart" onclick="showAddToCartModal({{ $product->id }})">
                <i class="icon_cart_alt"></i>
            </div>
            <div class="atr__wish-list" onclick="addToWishList({{ $product->id }})">
                <i class="icon_heart_alt"></i>
            </div>
        </div>
    </div>

    <div class="de-rating-ext">
        <span class="d-stars">
            @php $rating = floor($product->rating ?? 0); @endphp
            @for ($i = 0; $i < 5; $i++)
                <i class="fa-solid fa-star{{ $i < $rating ? '' : '-o' }}"></i>
            @endfor
        </span>
    </div>

    <h3 class="fs-14 fw-600">
        <a href="{{ route('product', $product->slug) }}" class="text-reset">
            {{ $product->getTranslation('name') }}
        </a>
    </h3>

    <div class="atr__main-price">
        {{ single_price(number_format((float) home_discounted_base_price($product))) }}
        @if (home_base_price($product) != home_discounted_base_price($product))
            <del class="text-muted fs-12">{{ single_price(home_base_price($product)) }}</del>
        @endif
    </div>
</div>
