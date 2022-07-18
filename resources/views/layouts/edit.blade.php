<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Braga Corretor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{ asset('assets/css/Footer-Basic.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/Simple-Slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/Social-Icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-price-format/2.2.0/jquery.priceformat.min.js"></script>
    <script src="{{ asset('assets/js/Simple-Slider.js') }}"></script>
    <script src="{{ asset('assets/js/animations.js') }}" ></script>

</head>

<body>
    
    <div class="sticky-top mb-3">
        <!-- Start: Header - Mobile -->
        <div>
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="{{ route('casas.index') }}"
                        style="width: 80px;height: 30px;margin: 0px;padding: 0px;"><img
                            class="d-flex align-items-center" src="{{ asset('assets\img\Group 1.svg') }}"
                            style="width: 80px;height: 30px;" /></a><button data-toggle="collapse"
                        data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle
                            navigation</span><span class="navbar-toggler-icon"
                            style="background-image:url('../assets/img/bars-solid.svg'); color:white;"></span></button>
                    <div class="collapse navbar-collapse d-md-flex d-xl-flex justify-content-md-end justify-content-xl-end"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li role="presentation" class="nav-item">

                                    <a class="nav-link active home" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Sair') }}
                                 </a>
         
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
        @yield('content')
    <!-- Start: Footer -->

    <div class="footer-basic" style="background-color: rgb(20,62,122);">
        <footer>
            <div class="social">
                <a href="#">
                    <i data-toggle="tooltip" data-placement="top" title="Copiar email" id="emailIcon"
                        class="icon ion-email" style="color: rgb(255,255,255); cursor:pointer;"></i></a>
                <a
                    href="https://api.whatsapp.com/send?phone=5517992451895&text=Ol%C3%A1!%20Eu%20tenho%20interesse%20em%20comprar%20uma%20casa!"><i
                        data-toggle="tooltip" data-placement="top" title="Enviar mensagem no WhatsApp 1"
                        class="icon ion-social-whatsapp-outline" style="color: rgb(255,255,255);"></i></a>
                <a
                    href="https://api.whatsapp.com/send?phone=5511948021701&text=Ol%C3%A1!%20Eu%20tenho%20interesse%20em%20comprar%20uma%20casa!"><i
                        data-toggle="tooltip" data-placement="top" title="Enviar mensagem no WhatsApp 2"
                        class="icon ion-social-whatsapp-outline" style="color: rgb(255,255,255);"></i></a>
                <a href="https://www.facebook.com/terrenosembarretos/"><i data-toggle="tooltip" data-placement="top"
                        title="Ir para o Facebook" class="icon ion-social-facebook"
                        style="color: rgb(255,255,255);"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a class="home" href="{{ route('casas.index') }}"
                        style="color: rgb(255,255,255);">Home</a></li>
                <li class="list-inline-item"><a class="pesquisa" href="#" style="color: rgb(255,255,255);">Pesquisa</a>
                </li>
            </ul>
            <p class="copyright" style="color: rgb(249,249,249);">Corretor Braga - CRECISP 69219-F / CNAI 21516</p>
            <a style="text-decoration:none;" href="https://articadev.com">
                <p class="copyright" style="color: rgb(249,249,249);">Desenvolvido por Artica © 2020</p>
            </a>
        </footer>
    </div>
    <!-- End: Footer -->




</body>

</html>
