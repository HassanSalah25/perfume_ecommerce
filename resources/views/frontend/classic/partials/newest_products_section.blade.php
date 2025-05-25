@if (count($newest_products) > 0)
    <section>
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-12">
                    <div class="owl-custom-nav menu-" data-target="#new-arrivals-carousel">
                        <div class="d-flex justify-content-between">
                            <h3 class="text-uppercase mb-4">{{ translate('New Arrivals') }}</h3>
                            <div class="arrow-simple">
                                <a class="btn-prev"></a>
                                <a class="btn-next"></a>
                            </div>
                        </div>

                        <div id="new-arrivals-carousel" class="owl-carousel owl-4-cols">
                            @foreach ($newest_products as $key => $new_product)
                                <div class="item">
                                    @include('frontend.'.get_setting('homepage_select').'.partials.product_box_1',['product' => $new_product])
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
