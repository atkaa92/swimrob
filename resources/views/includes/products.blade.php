<div class="col-12 col-sm-6 col-md-3 mb-3">
    <div class="card" data-toggle="modal" data-target="#productModal" data-id="{{ $product->id }}">
        <img class="card-img-top c-img" src="{{ asset("/products/$product->id/".$product->generalImg()) }}" alt="Card image cap">
        <div class="card-header text-center">
            {{ $product->name }}
        </div>
        <div class="card-body">
            <p class="Swift">
                {{ str_limit($product->desc, 100) }}
            </p>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-12 text-center">
                    <span  data-id="{{$product->id}}" class="basket btn btn-success" style="background-color:#689d2f;margin-bottom:8px;cursor:pointer">Kупить за один клик</span>
                </div>
                <div class="col-4 text-center">
                    <span class="butt basket forOneClick {{ isset($_COOKIE['products']) && in_array($product->id,json_decode($_COOKIE['products'])) ? 'active' : '' }}" data-id="{{$product->id}}">
                        <i class="fa fa-shopping-bag"></i>
                        <span class="d-inline-block badge badge-secondary num">{{ $product->buyed }}</span>
                    </span>
                </div>
                <div class="col-4 text-center">
                    <span class="butt not {{ $product->checkNot() == 'like' ? 'active' : ''  }}" data-id="{{ $product->id }}" data-job="1">
                        <i class="fa fa-thumbs-up"></i>
                        <span class="d-inline-block badge badge-secondary num">{{ $product->likes()->count() }}</span>
                    </span>
                </div>
                <div class="col-4 text-center">
                    <span class="butt not {{ $product->checkNot() == 'dislike' ? 'active' : ''  }}" data-id="{{ $product->id }}" data-job="0">
                        <i class="fa fa-thumbs-down"></i>
                        <span class="d-inline-block badge badge-secondary num">{{ $product->dislikes()->count() }}</span>
                    </span>
                </div>
            </div>
            <div class="text-muted mt-3">
                <small class="mr-5 pull-left">Цена</small>
                <span class="d-inline-block badge badge-secondary pull-right">{{ number_format($product->price) }}P</span>
            </div>
        </div>
    </div>
</div>