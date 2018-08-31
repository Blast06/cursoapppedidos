@extends('layouts.app') 
@section('body-class', 'product-page') 
@section('content')

<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section ">
            <h2 class="title text-center">Registrar nuevo producto</h2>

            <form action="{{ url('/admin/products')}}" method="POST">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del producto</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio</label>
                            <input type="number" name="price" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="form-group label-floating">
                    <label class="control-label">Descripcion breve del producto</label>
                    <input type="text" name="description" class="form-control">
                </div>

                <textarea class="form-control" placeholder="Descripcion larga" name="longdescription" rows="5"></textarea>

                <button class="btn btn-primary text-center">Registrar producto</button>

            </form>

        </div>
    </div>

</div>

@include('includes.footer')
@endsection