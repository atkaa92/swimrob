<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="text-center col-xs-11 col-sm-12 tal-sm pl-0-sm">
                <div id="fh5co-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('/images/logo_2.png') }}" alt="Logo">
                        <span class="sitename fz-25"><i>Swim Shop</i></span>
                    </a>
                </div>
            </div>
            @if(request()->segment(1) != 'backet')
                <div class="col-md-3 col-xs-4 text-right ">
                    <ul>
                        <li class="shopping-cart"><a href="{{ url('/backet') }}" class="cart"><span><small class="shopping-cart-small">{{ $cartcount }}</small><i class="fa fa-shopping-basket"></i></span></a></li>
                    </ul>
                </div>
            @endif
            
        </div>
    </div>
</nav>