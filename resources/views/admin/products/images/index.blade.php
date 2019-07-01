@extends('layouts.app')
    @section('title','Imagenes De Productos...')

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
                <!-- prueba -->
                    <div class="section text-center">
                        <h2 class="title">Imagenes Del Producto "{{ $product->name }}"...</h2>

                        <form action="" method="post">
                            {{ csrf_field() }}
                            <input type="file" name="photo" required>
                            <button type="submit" class="brn btn-primary btn-round">Subir Imagen</button>
                        
                            <a href="{{ url('/admin/products') }}" class="btn btn-primary btn-round">Volver Atras...</a>

                        </form>

                        <hr>
                        
                        <div class="row">
                            @forelse($images as $image)
                                <div class="col-md-4" style="border: 0.2px solid gray;">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img src="{{ $image->image }}" alt="">
                                            
                                            <button type="submit" class="btn btn-danger btn-round">Eliminar Imagen</button>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            <h1 class="h2 text-center">Lo Sentimos, El Producto no Cuenta Con Imagenes Asociadas...</h1>
                            @endforelse
                        </div>
                    </div>
                <!--FIN prueba -->
            </div>
        </div>

        <!-- Incluir la vista Footer -->
        @include('includes.footer')
        <!-- FIN - Incluir la vista Footer -->
    
    @endsection
