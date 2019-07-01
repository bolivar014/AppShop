@extends('layouts.app')
    @section('title','Bienvenidos a App-Shop')

    @section('body-class','landing-page')

    @section('content') 
        <div class="main main-raised">
            <div class="container">
                <div class="section text-center">
                    <h2 class="title">Editar Producto Seleccionado.</h2>
                    <form action="{{ url('/admin/products/'.$product->id.'/edit') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="" class="control-label">Nombre Del Producto:</label>
                                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="" class="control-label">Precio Del Producto</label>
                                    <input type="text" class="form-control" step="0.01" name="price" value="{{ $product->price}}">
                                </div>
                            </div>        
                        </div>
                        
                        <div class="form-group label-floating">
                            <label for="" class="control-label">Descripción Corta</label>
                            <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                        </div>
                    
                        <textarea class="form-control" name="long_description" id="" cols="30" rows="4">{{ $product->long_description }}</textarea>
                   
                        <button class="btn btn-primary">Registrar Producto</button>
                    </form>
                   
                </div>
            </div>
        </div>
        <footer class="footer">
        </footer>

    @endsection
