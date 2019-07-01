@extends('layouts.app')
    @section('title','App-Shop | Dashboard')

    @section('body-class','landing-page')

    @section('content') 
        <div class="main main-raised">
            <div class="container">
                <div class="section text-center">
                    <h2 class="title">Dashboard</h2>
                    @if(session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif

                    <ul class="nav nav-pills nav-pills-primary" role="tablist">
                        <li class="active">
                            <a href="#dashboard" role="tab" data-toggle="tab">
                                <i class="material-icons">dashboard</i>
                                Carrito De Compras...
                            </a>
                        </li>
                        <li>
                            <a href="#task" role="tab" data-toggle="tab">
                                <i class="material-icons">list</i>
                                Pedidos Realizados...
                            </a>
                        </li>
                    </ul>
                    
                    <hr>

                    <p>Tu carrito de compras presenta una cantidad de: <strong> {{ auth()->user()->cart->details->count() }} </strong>, Productos Seleccionados... </p>

                    <hr>
                    
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="col-md-2 text-center">Nombre</th>
                                        <th class="text-right">Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                        <th class="text-right">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse (auth()->user()->cart->details as $detail)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ $detail->product->featured_image_url }}" height="50px;" alt="">
                                        </td>
                                        <td>
                                            <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank">{{ $detail->product->name }}</a>
                                        </td>
                                        <td class="text-right">{{ $detail->product->price }}</td>
                                        <td>{{ $detail->quantity }}</td>
                                        <td>{{ $detail->quantity * $detail->product->price }}</td>
                                        
                                        <td class="td-actions text-right">
                                            <form action="{{ url('/cart') }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                                                <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank" type="button" rel="tooltip" title="Ver Información" class="btn btn-info btn-simple btn-xs">
                                                    <i class="fa fa-info"></i>
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

                            <div class="text-center">
                               <form action="{{ url('/order') }}" method="post">
                                    {{ csrf_field() }}
                                    <button class="btn btn-primary btn-round">
                                        <i class="material-icons">done</i>
                                        Confirmar Pedido
                                    </button>
                               </form>
                            </div>

                </div>
            </div>
        </div>
        

        <!-- Incluir la vista Footer -->
        @include('includes.footer')
        <!-- FIN - Incluir la vista Footer -->
    @endsection
