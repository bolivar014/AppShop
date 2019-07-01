<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','App-Shop')</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
    <!-- CSS Files -->
    <link href="{{ asset('css/material-kit.css?v=2.0.4') }}" rel="stylesheet" />
    
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet" />

    <!-- CDN Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- FIN - CDN Bootstrap-->
    
</head>
<body class="@yield('body-class')">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong>App-Shop!</strong>
                 </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"> {{ __('Ingresar') }} </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/products">Inicio</a>
                        </li>

                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if (auth()->user()->admin)
                                    <a class="dropdown-item" href="{{ url('/admin/products') }}">Gestionar Productos</a>
                                @endif 
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión... ') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
                        <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
                        <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
                        <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        @yield('content')
    </div>

        <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
                    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
                    <script type="text/javascript" src="assets/js/bootstrap-table.js"></script>
                
                    <script type="text/javascript">
                        var $table = $('#fresh-table'),
                            $alertBtn = $('#alertBtn'),
                            full_screen = false;
                            
                        $().ready(function(){
                            $table.bootstrapTable({
                                toolbar: ".toolbar",
                    
                                showRefresh: true,
                                search: true,
                                showToggle: true,
                                showColumns: true,
                                pagination: true,
                                striped: true,
                                pageSize: 8,
                                pageList: [8,10,25,50,100],
                                
                                formatShowingRows: function(pageFrom, pageTo, totalRows){
                                    //do nothing here, we don't want to show the text "showing x of y from..." 
                                },
                                formatRecordsPerPage: function(pageNumber){
                                    return pageNumber + " rows visible";
                                },
                                icons: {
                                    refresh: 'fa fa-refresh',
                                    toggle: 'fa fa-th-list',
                                    columns: 'fa fa-columns',
                                    detailOpen: 'fa fa-plus-circle',
                                    detailClose: 'fa fa-minus-circle'
                                }
                            });
                            
                                        
                            
                            $(window).resize(function () {
                                $table.bootstrapTable('resetView');
                            });
                    
                            
                            window.operateEvents = {
                                'click .like': function (e, value, row, index) {
                                    alert('You click like icon, row: ' + JSON.stringify(row));
                                    console.log(value, row, index);
                                },
                                'click .edit': function (e, value, row, index) {
                                    alert('You click edit icon, row: ' + JSON.stringify(row));
                                    console.log(value, row, index);    
                                },
                                'click .remove': function (e, value, row, index) {
                                    $table.bootstrapTable('remove', {
                                        field: 'id',
                                        values: [row.id]
                                    });
                            
                                }
                            };
                            
                            $alertBtn.click(function () {
                                alert("You pressed on Alert");
                            });
                            
                        });
                            
                    
                        function operateFormatter(value, row, index) {
                            return [
                                '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                                    '<i class="fa fa-heart"></i>',
                                '</a>',
                                '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                                    '<i class="fa fa-edit"></i>',
                                '</a>',
                                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                                    '<i class="fa fa-remove"></i>',
                                '</a>'
                            ].join('');
                        }
                    </script>
                    
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <!--	Plugin for Sharrre btn -->
    <script src="{{ asset('js/plugins/jquery.sharrre.js" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/material-kit.js?v=2.0.4" type="text/javascript"></script>
    <!--Otros -->
    <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-table.js"></script>

   
    <!-- CDN JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- FIN - CDN JQuery -->
    <!-- CDN Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- FIN - CDN Bootstrap-->

</body>
</html>
