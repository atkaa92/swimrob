@extends('layouts.admin')
@push('stylesheets')
  <style>
	
  </style>
@endpush
@section('admin')
    <div class="container">
        @if(!empty($messages->toArray()))
            <table class="table">
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Телефон</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $m)
                        <tr class="table-success">
                            <td>{{ $m->name}}</td>
                            <td>{{ $m->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h3>Нет новых сообщений</h3>
        @endif
    </div>
@endsection
@push('scripts')
<script>
    jQuery(document).ready(function($){
        
    })
</script>
@endpush