@extends('layouts.admin')
@push('stylesheets')
  <style>
	
  </style>
@endpush
@section('admin')
    <div class="container">
        @if(!empty($notes->toArray()))
            <table class="table">
                <thead>
                    <tr>
                    <th>Имя продуктa</th>
                    <th><i class="fa fa-thumbs-up"></i> / <i class="fa fa-thumbs-down"></i></th>
                    <th>Итог <i class="fa fa-thumbs-up"></i></th>
                    <th>Итог <i class="fa fa-thumbs-down"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notes as $n)
                        <tr class=" {{ $n->type ? 'table-success' : 'table-danger' }}">
                            <td>{{ $n->product->name}}</td>
                            <td><i class="fa {{ $n->type ? ' fa-thumbs-up' : ' fa-thumbs-down' }}"></i></td>
                            <td>{{ $likes[$n->product_id]}}</td>
                            <td>{{ $dislikes[$n->product_id]}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h3>Нет новых заметок</h3>
        @endif
    </div>
@endsection
@push('scripts')
<script>
    jQuery(document).ready(function($){
        
    })
</script>
@endpush