@extends('layouts.master')

@section('content')

    <style>
        .thanks{

            text-align:center;
        }
          .col-12{
             text-align:center !important;
          }
          img{
              max-height:500px;
              max-width:100%;
          }
         .thanks a{
            background:#717fe0;
            margin-top: 220px;
            border-color: #717fe0;
            padding: 10px 60px;
        }
         @media(max-width:767px){
            .thanks a{
                margin-top: 45px;
                margin-bottom: 35px;
            }
            img{
              max-height:400px;
          }
        }
    </style>
    <div class="thanks row">
        <div class="col-md-7">
            <img src="/images/thanks.jpg" alt="">
        </div>
      <div class="col-md-5">
          <a href="{{url('/')}}" class="btn btn-primary btn-lg">Вернуться в магазин</a>
      </div>
    </div>
    <div style="clear:both;width:100%;height:1px"></div>
@endsection