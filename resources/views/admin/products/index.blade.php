@extends('layouts.app') 
@section('body-class', 'product-page') 
@section('title','Listado de productos') 
@section('content')

<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Productos disponibles</h2>

            <div class="team">
                <div class="row">
                    <a class="btn btn-primary btn-round" href="{{ url('admin/products/create')}}">Anadir producto</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="col-md-4 text-center">Descripcion</th>
                                <th text-center>Categoria</th>
                                <th class="text-right">Precio</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td class="text-center">{{$product->id}}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->category ? $product->category->name: 'General' }}</td>
                                <td class="text-right">&euro; {{ $product->price }}</td>
                                <td class="td-actions text-right">
                                    {{-- ACCIONES DE BORRAR - EDITAR - MOSTRAR --}}
                                    <form action="{{ url('/admin/products/'.$product->id.'/delete') }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="button" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-info"></i>
                                                    </button>
                                        <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                            </a>

                                        <a href="{{ url('/admin/products/'.$product->id.'/images') }}" rel="tooltip" title="Imagenes del Producto" class="btn btn-warning btn-simple btn-xs">
                                                        <i class="fa fa-image"></i>
                                            </a>
                                        <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>

        </div>

    </div>

</div>

@include('includes.footer')
@endsection