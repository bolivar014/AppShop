@extends('layouts.app')
    @section('title','Bienvenidos a App-Shop')

    @section('body-class','landing-page')

    @section('content') 
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
                                        <th class="col-md-2 text-center">Nombre</th>
                                        <th class="col-md-4 text-center">Descripción</th>
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
                                            <form action="{{ url('/admin/products/'.$product->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="" type="button" rel="tooltip" title="Ver Información" class="btn btn-info btn-simple btn-xs">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('/admin/products/'.$product->id.'/images') }}" type="button" rel="tooltip" title="Imágenes Del Producto" class="btn btn-warning btn-simple btn-xs">
                                                    <i class="fa fa-image"></i>
                                                </a>
                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
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

        <!-- Incluir la vista Footer -->
        @include('includes.footer')
        <!-- FIN - Incluir la vista Footer -->
    
    @endsection
