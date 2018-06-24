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
    <form action="/add-product-func/{{ $product->id }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="btn btn-primary btn-block myImagesModalBtn">
                            <i class="fa fa-photo"></i>
                            Kартинки
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $product->name }}" placeholder="Имя :" required class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Описание :" required rows="5" id="desc" name="desc">{{$product->desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ $product->price }}" type="number" id="price" required placeholder="Цена :" name="price">
                    </div>
                    {{ csrf_field() }}
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success btn-block">
                        <i class="fa fa-save"></i>
                        Сохранить
                    </button>
                </div>
            </div>
        </form>
    </div>

    {{-- modals --}}
    <div class="modal" id="myImagesModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Kартинки</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body cart text-center">
                    @foreach($product->images as $i)
                        <div class="card-body  col-3">
                            <div>
                                <img src="{{ asset('products/'.$product->id.'/'.$i['name']) }}" alt="">
                            </div>
                            <br style="clear:both">
                            <div class="btn-group text-center">
                                <button type="button" data-id="{{ $i->id }}" class="makeGeneralImage btn {{ $i->general ? ' btn-success' : ' btn-default' }}" data-toggle="tooltip" data-placement="top" title="Cделать основной"><i class="fa fa-check"></i></button>
                                <button type="button" data-id="{{ $i->id }}" class="btn btn-danger deleteCurrentImage" data-toggle="tooltip" data-placement="top" title="Удалить"><i class="fa fa-remove"></i></button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <form action="/addImage/{{ $product->id }}" method="post" enctype="multipart/form-data" class="addImageForm">
                        {{ csrf_field() }}
                        <input class="btn btn-info" id="images" type="file" required name="images[]" multiple>
                        <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Загрузить картинку </button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    jQuery(document).ready(function($){
        $(document).on('click', '.myImagesModalBtn', function(){
            $("#myImagesModal").modal('show');
        })

        $(document).on('click', '.makeGeneralImage', function(){
            var myThis = $(this);
            var myId = $(this).data('id');
            if ($(this).hasClass("btn-success")) {
                return;
            }else{
                $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                $.post("/makeGeneralImage", {myId}, function(data, status){
                   if(data == 'V'){
                    $('.makeGeneralImage').each(function(i, obj) {
                        $(this).removeClass('btn-success')
                    });
                    myThis.addClass('btn-success')
                   }
                }, "json")
            }
        })

        $(document).on('click', '.deleteCurrentImage', function(){
            var myThis = $(this);
            var myId = $(this).data('id');
            if ($(this).prev('.makeGeneralImage').hasClass("btn-success")) {
                alert('Bы не можете удалить основную фотографию.')
            }else{
                $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                $.post("/deleteCurrentImage", {myId}, function(data, status){
                   if(data == 'V'){
                    myThis.closest('.card-body').remove()
                   }
                }, "json")
            }
        })

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    })
</script>
@endpush