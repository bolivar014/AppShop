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
            
             <!-- prueba -->
                <div class="section text-center">
                    <h2 class="title">Productos Disponibles.</h2>
                
                    <div class="team">
                        <div class="row">
                            <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round mr-auto">Agregar Producto...</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nombre</th>
                                        <th class="col-md-3 ">Descripción</th>
                                        <th>Categoria</th>
                                        <th class="text-right">Precio</th>
                                        <th class="text-right">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                    <tr>
                                        <td class="text-center">{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->category ? $product->category->name : 'General' }}</td>
                                        <td class="text-right">{{ $product->price }}</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Ver Información" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-info"></i>
                                            </button>
                                            <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" type="button" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                        <h1 class="h2">Lo sentimos, en el momento no tenemos Productos disponibles...</h1>
                                    @endforelse
                                </tbody>
                            </table>                    
                        </div>
                        <div class="row">
                            @if(count($products))
                                <div class="mt-2 mx-auto">
                                    {{ $products->links('pagination::bootstrap-4') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            <!--FIN prueba -->
            </div>
        </div>
        <footer class="footer">
        </footer>

    @endsection
