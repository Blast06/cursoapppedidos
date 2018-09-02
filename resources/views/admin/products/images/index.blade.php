@extends('layouts.app') 
@section('body-class', 'product-page') 
@section('title','Imagenes de productos') 
@section('content')

<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Imagenes del producto " {{ $product->name }} "</h2>

            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }} {{-- no escribo la ruta porque es la misma donde esta esta pagina --}}
                <input type="file" name="photo" required>
                <button type="submit" class="btn btn-primary btn-round">Anadir imagen</button>
                <a class="btn btn-default btn-round" href="{{ url('admin/products')}}">Volver atras</a>

            </form>

            <hr>



            <div class="row">
                @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src=" {{ $image->url }}" width="250">
                            <form action="" method="POST">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <input type="hidden" name="image_id" value="{{ $image->id }}">
                                <button type="submit" class="btn btn-danger btn-round">Eliminar</button> 
                                @if($image->featured)
                                <button type="button" rel="tooltip" title="Imagen destacada"
                                    class="btn btn-info btn-fab-mini btn-round">
                                    <i class="material-icons">favorite</i>
                                </button>
                                @else
                                <a href=" {{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }} " class="btn btn-primary btn-fab-mini btn-round">
                                    <i class="material-icons">favorite</i>
                                </a> @endif

                            </form>
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