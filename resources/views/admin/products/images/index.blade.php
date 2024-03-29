@extends('layouts.app')
    @section('title','Imagenes De Productos...')

    @section('body-class','landing-page')

    @section('content') 
        <div class="main main-raised">
            <div class="container">       
                <!-- prueba -->
                    <div class="section text-center">
                        <h2 class="title">Imagenes Del Producto "{{ $product->name }}"...</h2>

                        <form action="" method="post" enctype="multipart/form-data">
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
                                            <img src="{{ $image->url }}" alt="" width="250" heigth="250">
                                            <form action="" method="post">
                                                {{ csrf_field(  ) }}
                                                {{ method_field('DELETE') }}
                                                <input type="hidden" name="image_id" value="{{ $image->id }}">
                                                <button type="submit" class="btn btn-danger btn-round">Eliminar Imagen</button>
                                                @if ($image->featured)
                                                    <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen Destacada">
                                                        <i class="material-icons">favorite</i>
                                                    </button>
                                                @else
                                                    <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                                        <i class="material-icons">favorite</i>
                                                    </a>
                                                @endif
                                            </form>
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
