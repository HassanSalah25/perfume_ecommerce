@php $best_selling_products = get_best_selling_products(20); @endphp

@if (get_setting('best_selling') == 1 && count($best_selling_products) > 0)
    <section>
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-12">
                    <div class="owl-custom-nav menu-" data-target="#best-seller-carousel">
                        <div class="d-flex justify-content-between">
                            <h3 class="text-uppercase mb-4">{{ translate('Best Sellers') }}</h3>
                            <div class="arrow-simple">
                                <a class="btn-prev"></a>
                                <a class="btn-next"></a>
                            </div>
                        </div>

                        <div id="best-seller-carousel" class="owl-carousel owl-4-cols">
                            @foreach ($best_selling_products as $key => $product)
                                <div class="item">
                                    @include('frontend.'.get_setting('homepage_select').'.partials.product_box_3',['product' => $product])
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
