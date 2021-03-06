@extends('layouts.default')
@section('content')

<div class="container" style="margin-bottom:10%;">
    <div class="row" style="margin-top: 5vh;">
        <div class="col">
            <div data-ride="carousel" class="carousel slide" id="carousel-1">
                <div role="listbox" class="carousel-inner d-flex">
                    @foreach ($house->image as $image)
                    <div class="carousel-item">
                        <div class="row photos">
                            <div class="col d-flex justify-content-center item">
                                @if (in_array(pathinfo($image->filename, PATHINFO_EXTENSION),["mp4", "avi", "ogg", "webm"]))
                                    <video style="height: 300px; max-width:80vw;"  controls>
                                            <source src="{{ asset('images/'.$image->filename) }}" type="video/{{pathinfo($image->filename, PATHINFO_EXTENSION)}}">
                                    </video>
                                @else
                                    <button style="background: transparent;color: transparent;border: transparent;" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="{{ asset('images/'.$image->filename) }}" style="height: 300px;" /></button>
                                @endif
                            </div>
                        </div>
                    </div>

                    @endforeach
                    <!-- modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($house->image as $key=>$image)
                                    @if (!in_array(pathinfo($image->filename, PATHINFO_EXTENSION),["mp4", "avi", "ogg", "webm"]))
                                        <div class="{{$key==0?'carousel-item active':'carousel-item'}}">
                                            <img style="width:100%;" class="img-fluid mx-auto" src="{{ asset('images/'.$image->filename) }}" />
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <a style="background-color:black;" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a  style="background-color:black;"class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- fim do modal -->


                    
                </div>
                <div><a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"
                        style="margin-right: 0px;margin-left: 10%;"><span class="carousel-control-prev-icon"
                            style="background-image: url('{{ asset('assets/img/Rectangle 32.png') }}');"></span><span
                            class="sr-only">Previous</span></a>
                    <a href="#carousel-1" role="button" data-slide="next" class="carousel-control-next"
                        style="margin-right: 10%;"><span class="carousel-control-next-icon"
                            style="background-image: url('{{ asset('assets/img/Rectangle 31.png') }}');"></span><span
                            class="sr-only">Next</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 5vh;margin-bottom: 5vh;">
        <div class="col">
            <h1 class="text-center" style="color: rgb(20,62,122);"><strong>{{ $house->title  }}</strong></h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
        <div class="col">
            <div class="row row-cols-1">

              @if($house->type==3)              
                <div class="col d-flex flex-row justify-content-center align-items-center">
                    <h2 class="text-center" style="color:rgb(20,62,122);">{{ $house->tname }}</h2>
                </div>
              @endif

                <div class="col d-flex flex-row justify-content-center align-items-center align-items-xl-center"><i
                        class="icon ion-ios-home" style="font-size: 36px;margin-left: 3%;"></i>
                    <h3 style="margin: 0px;margin-left: 15px;">{{ $house->address->first()->bairro  }}</h3>
                </div>

              @if ($house->type==1)
                  
                <div class="col d-flex flex-row justify-content-center align-items-center align-items-xl-center"
                    style="height: 54px;"><i class="la la-bed" style="font-size: 36px;margin-left: 3%;"></i>
                    <h3 style="margin: 0px;margin-left: 15px;">{{ $house->rooms  }} Quartos</h3>
                </div>
                <div class="col d-flex flex-row justify-content-center align-items-center align-items-xl-center"
                    style="height: 54px;"><i class="las la-bath" style="font-size: 36px;margin-left: 3%;"></i>
                    <h3 style="margin: 0px;margin-left: 15px;">{{ $house->bathrooms  }} Banheiros</h3>
                </div>
             @endif  
                
                <div class="col d-flex flex-row justify-content-center align-items-center align-items-xl-center"
                    style="height: 54px;"><i class="las la-ruler-horizontal"
                        style="font-size: 36px;margin-left: 3%;"></i>
                    <h3 style="margin: 0px;margin-left: 15px;">{{ number_format($house->size, 2, '.', '') }} m²</h3>
                </div>

                @if($house->garage==1)
                <div class="col d-flex flex-row justify-content-center align-items-center align-items-xl-center"
                    style="height: 54px;"><i class="la la-car" style="font-size: 36px;margin-left: 3%;"></i>
                    <h3 style="margin: 0px;margin-left: 15px;">Com Garagem</h3>
                </div>
                @endif

                @if($house->recreation==1)
                <div class="col d-flex flex-row justify-content-center align-items-center align-items-xl-center"
                    style="height: 54px;"><i class="las la-table-tennis" style="font-size: 36px;margin-left: 3%;"></i>
                    <h3 style="margin: 0px;margin-left: 15px;">Área de Lazer</h3>
                </div>
                @endif

                <div class="col d-flex flex-row justify-content-center align-items-center justify-content-xl-center align-items-xl-center"
                    style="height: 54px;"><i class="la la-money"
                        style="font-size: 36px;margin-left: 3%;color: rgb(58,204,160);"></i>
                    <h2 class="display-price" style="margin: 0px;margin-left: 15px;color: #18c38f;">
                        <strong>{{ number_format($house->price, 2, '.', '')  }}</strong></h2>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row" id="coldesc">
                <div class="col text-center">
                    <h5><strong>Descrição -</strong></h5>
                    <p style="margin:4% 0;">{{ $house->description }}<br /></p>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center" style="margin-top: 1vh;">
                    <a style="color:transparent; "
                        href="https://api.whatsapp.com/send?phone=5517992451895&text=Ol%C3%A1!%20Eu%20tenho%20interesse%20em%20comprar%20uma%20casa!">
                        <button class="btn" type="button"
                            style="font-size: 22px;background-color:#143E7A;width: 325px;">
                            <h5 class="text-white" style="  display: inline;
                ">Quero Comprar!</h5><i class="icon ion-social-whatsapp-outline"
                                style="color:white;margin-left:5%;"></i>
                            <h5 style="display:inline;color:white;">1</h5>
                        </button></a></div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <a style="color:transparent; "
                        href="https://api.whatsapp.com/send?phone=5517992451895&text=Ol%C3%A1!%20Eu%20tenho%20interesse%20em%20comprar%20uma%20casa!">
                        <button class="btn" type="button"
                            style="font-size: 22px;background-color:#25D366;width: 325px;">
                            <h5 class="text-white" style="  display: inline;
                ">Quero Comprar!</h5><i class="icon ion-social-whatsapp-outline"
                                style="color:white;margin-left:5%;"></i>
                            <h5 style="display:inline;color:white;">2</h5>
                        </button></a></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function() {


    $('.carousel-item').first().addClass("active");


});
</script>

@endsection