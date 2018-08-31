@extends('layouts.app') 
@section('body-class', 'product-page') 
@section('content')

<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section ">
            <h2 class="title text-center">Editar producto</h2>

            <form action="{{ url('/admin/products/'.$product->id.'/edit')}}" method="POST">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del producto</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio</label>
                            <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}">
                        </div>
                    </div>
                </div>


                <div class="form-group label-floating">
                    <label class="control-label">Descripcion breve del producto</label>
                    <input type="text" name="description" class="form-control" value="{{ $product->description }}">
                </div>

                <textarea class="form-control" placeholder="Descripcion larga" name="longdescription" rows="5" >{{$product->longdescription}}</textarea>

                <button class="btn btn-primary ">Guardar cambios</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>

            </form>

        </div>
    </div>

</div>

@include('includes.footer')
@endsection