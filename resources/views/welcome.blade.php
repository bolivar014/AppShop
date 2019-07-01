@extends('layouts.app')
    @section('title','Bienvenidos a App-Shop')

    @section('body-class','landing-page')

    @section('styles')
    <style>
        .team .row .col-md-4
        {
            margin-bottom:5em;

        }
        .row
        {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }
        .row > [class*='col-']
        {
            display: flex;
            flex-direction: column;
        }
    </style>
    @endsection

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
                <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">¿Porque App-Shop?</h2>
                    <h5 class="description">Puedes revisar nuestra relación completa de productos, <strong>Comparar precios y realizar tus pedidos</strong> cuando estes seguro.</h5>
                </div>
                </div>
                <div class="features">
                <div class="row">
                    <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-info">
                        <i class="material-icons">chat</i>
                        </div>
                        <h4 class="info-title">Atendemos tus dudas</h4>
                        <p>Atendemos rapidamente cualesquier consulta que tengas, via chat. no estas sólo, sino que siempre estamos atentos a tus inquietudes...</p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-success">
                        <i class="material-icons">verified_user</i>
                        </div>
                        <h4 class="info-title">Pagos Seguros</h4>
                        <p>Todo pedido que realices por nuestra plataforma, sera confirmado a traves de una llamada, sino confias en pagos electronicos, puedes pagar contra entrega el valor acordado.</p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-danger">
                        <i class="material-icons">fingerprint</i>
                        </div>
                        <h4 class="info-title">Información Privada</h4>
                        <p>Los Pedidos que realices sólo los conoceras tú a traves de nuestro panel de usuario, nadie más va tener acceso a esta información.</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="section text-center">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                <div class="row">
                    <div class="col-md-4">
                    <div class="team-player">
                        <div class="card card-plain">
                        <div class="col-md-6 ml-auto mr-auto">
                            <img src="{{ asset('img/faces/avatar.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <h4 class="card-title">Gigi Hadid
                            <br>
                            <small class="card-description text-muted">Model</small>
                        </h4>
                        <div class="card-body">
                            <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="team-player">
                        <div class="card card-plain">
                        <div class="col-md-6 ml-auto mr-auto">
                            <img src="{{ asset('img/faces/christian.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <h4 class="card-title">Christian Louboutin
                            <br>
                            <small class="card-description text-muted">Designer</small>
                        </h4>
                        <div class="card-body">
                            <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="team-player">
                        <div class="card card-plain">
                        <div class="col-md-6 ml-auto mr-auto">
                            <img src="{{ asset('img/faces/kendall.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <h4 class="card-title">Kendall Jenner
                            <br>
                            <small class="card-description text-muted">Model</small>
                        </h4>
                        <div class="card-body">
                            <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            
             <!-- prueba -->
             <div class="section text-center">
                <h2 class="title">Productos Disponibles.</h2>
                
                <div class="team">
                    <div class="row">
                        @forelse ($products as $product)                    
                            <div class="col-md-4">
                                <div class="team-player card card-plain">
                                <!-- code en el SRC -->
                                    <img src="{{ $product->featured_image_url }}"  alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">
                                        <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a>
                                        <br>
                                        <small class="text-muted">{{ $product->category->name }}</small>
                                    </h4>
                                    <p class="description">{{ $product->description }}</p>
                                </div>
                            </div>
                        @empty
                        <h1 class="h2">Lo sentimos, En el momento no contamos con productos disponibles...</h1>
                        @endforelse

                        @if(count($products))
                            <div class="mt-2 mx-auto">
                                {{ $products->links('pagination::bootstrap-4') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
          <!--FIN prueba -->

            <div class="section section-contacts">
                <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center title">¿Aún no te has Registrado?</h2>
                    <h4 class="text-center description">Registrate ingresando tus datos basicos, y podrás realizar tus pedidos a través de nuestro carrito de compras, si aun no te decides, de todas formas, con tu cuenta de usuario podrás hacer todas tus consultas sin compromiso.</h4>
                    <form class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nombre Completo</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email</label>
                            <input type="email" name="" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleMessage" class="bmd-label-floating">Mensaje</label>
                        <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto text-center">
                        <button class="btn btn-primary btn-raised">
                            Enviar Consulta
                        </button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        
        <!-- Incluir la vista Footer -->
        @include('includes.footer')
        <!-- FIN - Incluir la vista Footer -->
    @endsection
