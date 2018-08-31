@extends('layouts.app') 
@section('body-class', 'product-page') 
@section('title','Imagenes de productos') 
@section('content')

<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Imagenes del producto</h2>

            <a class="btn btn-primary btn-round" href="{{ url('admin/products/create')}}">Anadir imagen</a>
            <a class="btn btn-default btn-round" href="{{ url('admin/products')}}">Volver atras</a>

            <div class="row">
                @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src=" {{ $image->image }}">
                        </div>
                    </div>

                </div>
                @endforeach


            </div>

        </div>

    </div>

</div>
    @include('includes.footer')
@endsection