@extends('layouts.default')
@section('content')


@isset($new_house)
<div class="simple-slider deskslider">
    <div class="swiper-container">
        <div class="swiper-wrapper">


            @foreach ($new_house->image as $image)

            @if($loop->index < 3 && !in_array(pathinfo($image->filename, PATHINFO_EXTENSION),["mp4", "avi", "ogg", "webm"]))

            <div class="swiper-slide view" style="background-image:url({{ asset('images/'.$image->filename) }});">
                <a href="{{ route('casas.show',$new_house->id) }}">

                    <div class="mask flex-center {{$loop->index==0 ? 'rgba-black-strong' : ''}}">
                        @if($loop->index ==0)

                        <h1 style="color:white;">{{ $new_house->title }}</h1>
                        <h3 style="color:white;margin-top:5%">Venha conferir!</h3>
                        @endif

                    </div>
                </a>
            </div>
            
            @endif

            @endforeach

        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev" style="background-image: url(assets/img/Rectangle%2034.png)"></div>
        <div class="swiper-button-next" style="background-image: url(assets/img/Rectangle%2033.png)"></div>
    </div>
</div>
@endisset
@isset($error)
<div class="alert alert-danger">
    <p>{{ $error }}</p>
</div>
@endisset

<div class="container" style="min-height:55.5vh;">

    <!-- Start: Card Group -->
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3" style="margin-top: 5vh;">
        @foreach($houses as $house)
        <div class="col" style="margin-bottom:3%">
            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                <div class="simple-slider card-img-top">
                    <a href="{{ route('casas.show',$house->id) }}">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                            @foreach($house->image as $image)
                                @if($loop->index < 3 && !in_array(pathinfo($image->filename, PATHINFO_EXTENSION),["mp4", "avi", "ogg", "webm"]))
                                 <div class="swiper-slide" style="background-image:url({{ asset('images/'.$image->filename) }}); height:226px;">
                                </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev" style="background-image: url(assets/img/Rectangle%2032.png)">
                        </div>
                        <div class="swiper-button-next" style="background-image: url(assets/img/Rectangle%2031.png)">
                        </div>
                </div>
                </a>
                <!-- Card content -->
                <div class=" card-body">

                    <div class="col" style="margin-right: 10vw;">
                        <div class="row d-flex flex-column justify-content-center align-items-center">
                            <div class="col d-flex justify-content-center align-items-center">
                                <a href="{{ route('casas.show',$house->id) }}">
                                    <h4 class="text-center" style="min-height:56px;color: #143E7A; margin-bottom:8%;">
                                        {{ $house->title }}
                                    </h4>
                                </a>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 5%;">
                            <div class="col d-flex justify-content-left align-items-center"><i class="las la-home"
                                    style="font-size: 26px;margin-right: 5%;color: rgb(0,0,0);"></i>
                                <h6>{{ $house->address->first()->bairro }}</h6>
                            </div>
                        </div>


                        @if($house->type==1)
                        <div class="row" style="margin-bottom: 3%;">
                            <div class="col d-flex justify-content-left"><i class="la la-bed"
                                    style="font-size: 26px;margin-right: 5%;color: rgb(0,0,0);"></i>
                                <h6 class="text-center">
                                    {{ $house->rooms." ".Illuminate\Support\Str::of('Quarto')->plural($house->rooms) }}
                                </h6>
                            </div>
                        </div>

                        @if($house->garage==1)

                        <div class="row" style="margin-bottom: 8%;">
                            <div class="col d-flex justify-content-left"><i class="la la-car"
                                    style="font-size: 26px;margin-right: 5%;color: rgb(0,0,0);"></i>
                                <h6 class="text-center">Com Garagem</h6>
                            </div>
                        </div>

                        @elseif($house->recreation==1)
                        <div class="row" style="margin-bottom: 8%;">
                            <div class="col d-flex justify-content-left"><i class="las la-table-tennis"
                                    style="font-size: 26px;margin-right: 5%;color: rgb(0,0,0);"></i>
                                <h6 class="text-center">Área de Lazer</h6>
                            </div>
                        </div>

                        @else
                        <div class="row" style="margin-bottom: 3%;">
                            <div class="col d-flex justify-content-center"><i class="las la-toilet"
                                    style="font-size: 26px;margin-right: 5%;color: rgb(0,0,0);"></i>
                                <h6 class="text-center">
                                    {{ $house->bathrooms." ".Illuminate\Support\Str::of('Banheiro')->plural($house->bathrooms) }}
                                </h6>
                            </div>
                        </div>

                        @endif

                        @else
                        @if ($house->type==3)

                        <div class="row" style="margin-bottom: 5%;">
                            <div class="col d-flex justify-content-center align-items-center">
                                <h5 class="text-center" style="color: #143E7A;">{{ $house->tname }}</h5>
                            </div>
                        </div>

                        @endif

                        <div class="row" style="margin-bottom: 8%;">
                            <div class="col d-flex justify-content-left"><i class="las la-ruler-horizontal"
                                    style="font-size: 26px;margin-right: 5%;color: rgb(0,0,0);"></i>
                                <h6 class="text-center">{{ number_format($house->size, 2, '.', '') }} m²</h6>
                            </div>
                        </div>

                        @endif



                        <div class="row" style="margin-bottom: 0%;">
                            <div class="col d-flex justify-content-center"><button
                                    onclick="location.href='{{ route('casas.show',$house->id) }}';" class="btn"
                                    type="button" style="font-size: 22px;background-color:#143E7A;width: 100%;"><i
                                        class="las la-wallet text-white" style="margin-right:3%"></i>
                                    <h5 class="display-price text-white" style="  display: inline;
                ">{{ number_format($house->price, 2, '.', '') }}</h5>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{ $houses->links() }}

</div>

<!-- End: Card Group -->



<script type="text/javascript">
$(function() {


    $('.carousel-item').first().addClass("active");


});
</script>

@endsection