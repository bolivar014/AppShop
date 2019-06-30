@extends('layouts.app')
    @section('title','Bienvenidos a App-Shop')

    @section('body-class','landing-page')

    @section('content') 
        <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 class="title">Bienvenidos a App-Shop!.</h1>
                <h4>Solicita tus pedidos en linea y proximamente nos comunicaremos con tigo, para confirmar la entrega...</h4>
                <br>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i><strong> ¿Cómo Funciona?</strong>
                </a>
                </div>
            </div>
            </div>
        </div>
        <div class="main main-raised">
            <div class="container">
                <div class="section text-center">
                    <h2 class="title">Registrar Producto.</h2>
                    <form action="{{ url('/admin/products') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="" class="control-label">Nombre Del Producto:</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="" class="control-label">Precio Del Producto</label>
                                    <input type="text" class="form-control" name="price">
                                </div>
                            </div>        
                        </div>
                        
                        <div class="form-group label-floating">
                            <label for="" class="control-label">Descripción Corta</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                    
                        <textarea class="form-control" name="long_description" id="" cols="30" rows="4" placeholder="Descripción Extensa Del Producto..."></textarea>
                   
                        <button class="btn btn-primary">Registrar Producto</button>
                    </form>
                   
                </div>
            </div>
        </div>
        <footer class="footer">
        </footer>

    @endsection
