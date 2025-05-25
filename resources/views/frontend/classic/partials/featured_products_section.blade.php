@if (count(get_featured_products()) > 0)
    <section class="bg-light">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-12">
                    <div class="owl-custom-nav menu-" data-target="#today-deals-carousel">
                        <div class="d-flex justify-content-between">
                            <h3 class="text-uppercase mb-4">{{ translate('Featured Products') }}</h3>
                            <div class="arrow-simple">
                                <a class="btn-prev"></a>
                                <a class="btn-next"></a>
                            </div>
                        </div>

                        <div id="today-deals-carousel" class="owl-carousel owl-4-cols">
                            @foreach (get_featured_products() as $key => $product)
                                <div class="item">
                                        @include('frontend.'.get_setting('homepage_select').'.partials.product_box_2',['product' => $product])

                                </div>
                            @endforeach
                        </div> <!-- end carousel -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
