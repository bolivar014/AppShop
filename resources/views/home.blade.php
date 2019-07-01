@extends('layouts.app')
    @section('title','App-Shop | Dashboard')

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
                    <h2 class="title">Dashboard</h2>
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Incluir la vista Footer -->
        @include('includes.footer')
        <!-- FIN - Incluir la vista Footer -->
    @endsection
