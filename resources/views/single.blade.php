<?php ?>
<div class="row">
    <div class="col-12 col-md-4">
        <div class="d-flex align-items-center text-center mb-2">
            <span class="arrows" style="width: 50%;cursor: pointer" data-id="{{ $product->id }}" data-arrow="left">
                <span class="fa fa-arrow-left" style="font-family: 'FontAwesome'!important;"></span>
            </span>
            <span class="arrows" data-arrow="right" data-id="{{ $product->id }}" style="width: 50%;cursor: pointer">
                <span class="fa fa-arrow-right" style="font-family: 'FontAwesome'!important;"></span>
            </span>
        </div>
        <img id="current-image" data-current="{{$product->generalImg()}}" src="{{ asset('products/'.$product->id.'/'.$product->generalImg()) }}" style="width: 100%;">
    </div>
    <div class="col-12 col-md-8 mt-4 mt-md-0">
        <h3>{{ $product->name }}</h3>
        <p>
            {{ $product->desc }}
        </p>
        <p>
            <b class="mr-3 text-muted">Цена</b><b class="text-muted">{{ number_format($product->price) }}</b>
        </p>
        <div class="card-footer">
            <div class="row">
                <div class="col-4 text-center">
                    <span class="butt basket {{ isset($_COOKIE['products']) && in_array($product->id,json_decode($_COOKIE['products'])) ? 'active' : '' }}" data-id="{{ $product->id }}">
                        <i class="fa fa-shopping-bag"></i>
                        <span class="d-inline-block badge badge-secondary num">{{ $product->buyed }}</span>
                    </span>
                </div>
                <div class="col-4 text-center">
                    <span class="butt not {{ $product->checkNot() == 'like' ? 'active' : ''  }}" data-id="{{$product->id}}" data-job="1">
                        <i class="fa fa-thumbs-up"></i>
                        <span class="d-inline-block badge badge-secondary num">{{ $product->likes()->count() }}</span>
                    </span>
                </div>
                <div class="col-4 text-center">
                    <span class="butt not {{ $product->checkNot() == 'dislike' ? 'active' : ''  }}" data-id="{{$product->id}}" data-job="0">
                        <i class="fa fa-thumbs-down"></i>
                        <span class="d-inline-block badge badge-secondary num">{{ $product->dislikes()->count() }}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var images = [];
    <?php foreach($product->images->pluck('name')->toArray() as $image): ?>
        images.push('{{ $image }}')
    <?php endforeach; ?>
</script>