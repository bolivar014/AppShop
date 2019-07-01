@extends('layouts.app')

   @section('body-class','signup-page')

    @section('content')
        <div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <div class="card card-login">
                            <form class="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="card-header card-header-primary text-center">
                                    <h4 class="card-title">Registrarse!</h4>
                                    <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    </div>
                                </div>
                                <p class="description text-center">Llena Tus Datos!</p>
                                <div class="card-body">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">face</i>
                                            </span>
                                        </div>    
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  placeholder="Name..." required autofocus>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">mail</i>
                                            </span>
                                        </div>    
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email..." required autofocus>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="password..." required>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar password ..." required>
                                    </div>
                                </div>
                            <!--
                                <div class="form-group row">
                                    <div class="col-md-6 md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordarme') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            -->
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.footer')
        </div>
    @endsection
