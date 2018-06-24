@extends('layouts.master')

@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url(images/img_15.jpg);"></li>
                <li style="background-image: url(images/img_16.jpg);">
                    {{-- <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <span class="price">$800</span>
                                    <h2>Alato Cabinet</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                    <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </li>
                <li style="background-image: url(images/img_17.jpg);"></li>
                <li style="background-image: url(images/img_18.jpg);"></li>
            </ul>
        </div>
    </aside>
    <div id="fh5co-product">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>ОБЗОР ПРОДУКТОВ</h2>
                </div>
            </div>
            <div class="row">
                @foreach($products as $key => $product)
                    @if($key%3 === 0)
                        <div style="clear:both"></div>
                    @endif
                    <div class="col-md-4 text-center animate-box">
                        <div class="product">
                            <div class="product-grid" style="background-image:url({{ asset("/products/$product->id/".$product->generalImg()) }});">
                                <div class="inner">
                                    <p>
                                        @if(in_array($product->id, $cookieids) )
                                            <a  class="icon myactive">Продукт уже в корзине</a>
                                        @else
                                            <a data-id="{{ $product->id }}" class="icon basket">Добавить в корзину</a>
                                        @endif
                                        {{-- <a data-toggle="modal" data-target="#productModal{{ $product->id }}" data-id="{{ $product->id }}" class="icon"><i class="icon-eye"></i></a> --}}
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3>{{ $product->name }}</h3>
                                <span class="price">{{ $product->price }}P</span>
                            </div>
                            <div class="desc">
                                <p>{{ $product->desc }}</p>
                            </div>
                            <div class="oneclick">
                                <input data-id="{{ $product->id }}" type="button" name="oneclick" class="btn btn-info btn-block oneClick" value="Купить">
                            </div>
                        </div>
                    </div> 
                    <div class="modal fade" id="productModal{{ $product->id }}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title text-center" style="width: 100%;">Описание продукта</h2>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div id="fh5co-product">
                                        <div class="col-md-10 col-md-offset-1 animate-box">
                                            <div class="owl-carousel owl-carousel-fullwidth product-carousel">
                                                <div class="item">
                                                    <div class="active text-center">
                                                        <figure>
                                                            <img src="{{ asset("images/img_15.jpg") }}" alt="user">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="text-center">
                                                        <figure>
                                                            <img src="{{ asset("images/img_16.jpg") }}" alt="user">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="text-center">
                                                        <figure>
                                                            <img src="{{ asset("images/img_17.jpg") }}" alt="user">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="text-center">
                                                        <figure>
                                                            <img src="{{ asset("images/img_18.jpg") }}" alt="user">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animate-box">
                                                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                                    <h2>Hauteville Rocking Chair</h2>
                                                    <p>
                                                        <a href="#" class="btn btn-primary btn-outline btn-lg">Add to Cart</a>
                                                        <a href="#" class="btn btn-primary btn-outline btn-lg">Compare</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Закрыть</button>
                                </div>
                    
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
        <div class="row text-center">
            {!! $products->links() !!}
        </div>
    </div>
    <div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>СЕРТИФИКАТЫ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 text-center">
                    <a  href="{{ asset('/images/certificat/1.png') }}" target="blank">
                        <img src="{{ asset('/images/certificat/1.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <a  href="{{ asset('/images/certificat/1.png') }}" target="blank">
                        <img src="{{ asset('/images/certificat/2.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <a  href="{{ asset('/images/certificat/1.png') }}" target="blank">
                        <img src="{{ asset('/images/certificat/3.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-testimonial" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Доставка и оплата</h2>
                    <p>Доставляем товары в Москву и Московскую область и по всей России.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Стоимость доставки</h2>
                    <p>В Москву и МО доставка производится на следующий день после оформления заказа. В пределах МКАД – 300 рублей.</p>
                    <h4>По Московской области:</h4>
                    <p>300 + 25 рублей за километр, до 10 км от МКАД</p>
                    <p>300 + 20 рублей за километр, от 10 км от МКАД</p>
                    <h4>Доставка по России:</h4>
                    <p>Наложенный платёж, гарантировано доставим за 14 дней. Срочная доставка в регионы 3-7 дней. Только по 100% предоплате. Оплата</p>
                    <p>В Москве и Московской области – наличными курьеры. При доставке по России – наложенный платеж.</p>
                </div>
            </div>
        </div>
    </div>
@endsection