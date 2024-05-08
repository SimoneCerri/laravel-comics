@extends('layouts.app')

@section('page-title')
    Comics Details
@endsection

@section('page-main')
    <div class="container comic_image">
        <div class="">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>
    <div class="container comic_main_info">
        <div class="row">
            <div class="col-8">
                <h2>
                    {{ $comic['title'] }} : {{ $comic['series'] }}
                </h2>
                <div class="row">
                    <div class="col-9 price_avaiable d-flex justify-content-between">
                        <div class="price">
                            <span class="text-secondary ps-3">U.S. Price:</span>
                            <span class="text-white">{{ $comic['price'] }}</span>
                        </div>
                        <div class="avaiable">
                            <span class="text-secondary">
                                AVAIABLE
                            </span>
                        </div>
                    </div>
                    <div class="col-3 check_avaiable text-center text-white">
                        Check Avaiability
                    </div>
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <strong class="text-secondary">
                        ADVERTISEMENT
                    </strong>
                </div>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container comic_other_info">
        <div class="row">
            <div class="col-6">
                <h3>
                    <strong>
                        Talent
                    </strong>
                </h3>
                <hr>
                <div class="row">
                    <div class="col-4">
                        Art by:
                    </div>
                    <div class="col-8">
                        Nome1,Nome2,Nome3,Nome4,Nome5,Nome6,Nome7
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        Written by:
                    </div>
                    <div class="col-8">
                        Nome1,Nome2,Nome3,Nome4,Nome5,Nome6,Nome7
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-6">
                <h3>
                    <strong>
                        Specs
                    </strong>
                </h3>
                <hr>
                <div class="row">
                    <div class="col-4">
                        Series:
                    </div>
                    <div class="col-8">
                        {{$comic['series']}}    
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        U.S. Price:
                    </div>
                    <div class="col-8">
                        {{$comic['price']}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        On Sale Date:
                    </div>
                    <div class="col-8">
                        {{$comic['sale_date']}}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
