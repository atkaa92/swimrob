<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="text-center col-xs-12">
                <div id="fh5co-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('/images/logo_2.png') }}" alt="Logo">
                        <span class="sitename"><i>Swim Shop</i></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xs-6 text-center menu-1"></div>
            @if(request()->segment(1) != 'backet')
                <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                    <ul>
                        <li class="shopping-cart"><a href="{{ url('/backet') }}" class="cart"><span><small class="shopping-cart-small">{{ $cartcount }}</small><i class="fa fa-shopping-basket"></i></span></a></li>
                    </ul>
                </div>
            @endif
            
        </div>
    </div>
</nav>