@extends('layouts.admin')

@section('admin')
    <form action="/add-product-func" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <input type="text" placeholder="Имя :" required class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Описание :" required rows="5" id="desc" name="desc"></textarea>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" id="price" required placeholder="Цена :" name="price">
                </div>
                <div class="form-group">
                    <label for="images" class="btn btn-primary btn-block">
                        <i class="fa fa-upload"></i>
                        Загрузить картинку
                    </label>
                    <input class="d-none" id="images" type="file" required name="images[]" multiple>
                </div>
                {{ csrf_field() }}
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success btn-block">
                    <i class="fa fa-save"></i>
                    Сохранить
                </button>
            </div>
            <div class="col-6">
                <button  type="reset" class="btn btn-danger btn-block">
                    <i class="fa fa-trash"></i>
                    Очистить
                </button>
            </div>
        </div>
    </form>
@endsection