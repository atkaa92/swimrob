@extends('layouts.admin')
@push('stylesheets')
  <style>
	.pagination li{
        padding: 4px 8px;
        background: #007bff;
        margin: 1px;
        border-radius: 3px;
    }
	.pagination li a{
        color: #fff;
    }
	.pagination li span{
        color: #fff;
    }
	.pagination li.active span{
        color: #000;
    }
	.pagination li.active{
        background: transparent;
    }
  </style>
@endpush
@section('admin')
    <div class="container">
        <div class="row">
            @foreach($products as $p)
                <div class="card text-center col-12 col-sm-6 col-md-4 col-lg-3">
                    <div >
                        <img src="{{ asset('products/'.$p->id.'/'.$p['images'][0]['name']) }}" alt="">
                    </div>
                    <div class="card-body">
                        <p>Цена - {{ $p->price }}</p>
                        <p>Имя продуктa - {{ $p->name }}</p>
                        <div class="btn-group">
                            <a href="/getProduct/{{$p->id}}" class="btn btn-primary">Изменить</a>
                            <a href="/deleteProduct/{{$p->id}}" class="btn btn-danger deleteProduct">Удалить</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br style="clear:both">
    <div class="row text-center">
        <div style="margin:auto">
            {{ $products->links() }}
        </div>
    </div>

    {{-- modals --}}
    <div class="modal" id="myDeleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Вы уверены ???</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-danger deleteYes">Удалить</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    jQuery(document).ready(function($){
        $(document).on('click', '.deleteProduct', function(event){
            event.preventDefault();
            var thisHref = $(this).attr('href')
            $("#myDeleteModal").modal('show');
            $('.deleteYes').attr('href', thisHref);
        })
    })
</script>
@endpush