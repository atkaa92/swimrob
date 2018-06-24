@extends('layouts.master')
@push('stylesheets')
  <style>
	
  </style>
@endpush
@section('content')
    <div class="container p-4 fh5co-services">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="fh5co-tabs  animate-box">
                    <ul class="fh5co-tab-nav">
                        <li class="active bascketswitch" data-myswitch="switch1"><a href="#" data-tab="1"><span>Продукты</span></a></li>
                        <li class="bascketswitch" data-myswitch="switch2"><a href="#" data-tab="2"><span>Завершит</span><span class="hidden-xs"> заказ</span></a></li>
                    </ul>

                    <!-- Tabs -->
                    <div class="fh5co-tab-content-wrap">
                        <form class="form-inline " action="{{ url('/send-mail') }}" method="post">
                            {{ csrf_field() }}
                            <div class="fh5co-tab-content tab-content active switch2" data-tab-content="1">
                                <div class="wrap-table-shopping-cart">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th>Продукт</th>
                                            <th class="hidden-xs"></th>
                                            <th>Цена</th>
                                            <th>Количество</th>
                                            <th class="hidden-xs">Итог</th>
                                            <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                                <tr class="table_row" data-id="{{ $product->id }}">
                                                    <input type="hidden" value="{{ $product->id }}" name="ids[]">
                                                    <td class="hidden-xs">
                                                        <div class="how-itemcart1">
                                                            <img src="/products/{{ $product->id }}/{{$product->generalImg()}}" alt="IMG">
                                                        </div>
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td class="currentprice" data-price="{{$product->price}}">{{ number_format($product->price) }}</td>
                                                    <td class="text-center">
                                                        <i class="fa fa-minus count" data-job="minus"></i>
                                                        <input readonly class="form-control currentinput" type="number" name="counts[]" value="1">
                                                        <i class="fa fa-plus count" data-job="plus"></i>
                                                    </td>
                                                    <td class="hidden-xs"><span class="currenttotal">{{$product->price}}</span>.00 P</td>
                                                    <td>
                                                        <i data-part="basket" class="close fa fa-remove"></i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="fh5co-tab-content tab-content switch1" data-tab-content="2">
                                <div class="col-xs-12 text-center">
                                    <h3>Оставьте свои контактные данные и мы перезвоним Вам за 4 минуты</h3>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="name" class="sr-only">Ваше Имя</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ваше Имя" value="{{ $name }}">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="tel" class="sr-only">Телефон</label>
                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Телефон" value="{{ $email }}">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <button type="submit" class="btn btn-info btn-block">Купить прямо сейчас</button>
                                </div>
                                <div class="col-xs-12">
                                    <h5 class="text-right">Стоимость заказа <span class="wholeTotal">{{$total}}</span>.00 P</h5>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
jQuery(document).ready(function($){
    $('.count').click(function () {
        var job = $(this).attr('data-job');
        var currentinput = $(this).closest('tr').find('.currentinput');
        var currentprice = $(this).closest('tr').find('.currentprice')
        var currenttotal = $(this).closest('tr').find('.currenttotal')
        var currentcount = currentinput.val();
        var wholeTotal = $(".wholeTotal").text();
        switch (job){
            case 'plus':
                currentinput.val(++currentcount);
                var currenttotalresult = Number(currenttotal.text()) + Number(currentprice.data('price'));
                currenttotal.text(currenttotalresult)
                var wholeTotalResult = Number(wholeTotal) + Number(currentprice.data('price'));
                $(".wholeTotal").text(" "+wholeTotalResult)
                break;
            case 'minus':
                if(currentcount > 1){
                    currentinput.val(--currentcount);
                    var currenttotalresult = Number(currenttotal.text()) - Number(currentprice.data('price'));
                    currenttotal.text(currenttotalresult)
                    var wholeTotalResult = Number(wholeTotal) - Number(currentprice.data('price'));
                    $(".wholeTotal").text(" "+wholeTotalResult)
                }
                break;
        }
    })

    $('.close').click(function () {
        var parent = $(this).closest('tr');
        var id = parent.attr('data-id');
        var cookie = JSON.parse($.cookie('products'));
        var index = cookie.indexOf(id);
        var currenttotal = parent.find('.currenttotal').text();
        var wholeTotal = $(".wholeTotal").text();
        var wholeTotalResult = Number(wholeTotal) - Number(currenttotal);
        $(".wholeTotal").text(" "+wholeTotalResult)
        if(index !== -1){
            cookie.splice(index,1)
        }
        $.cookie('products', JSON.stringify(cookie))
        parent.remove()
    })
})
</script>
@endpush
