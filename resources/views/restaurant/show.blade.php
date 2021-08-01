@extends('layouts.layout')
@section('title', 'Restaurant')

@section('content')

    <section class="container-lg">
        <div class="row justify-content-center">
            <div class="col-md-9 col ">
                <div class="card">
                    <div class="card-body d-md-flex">
                        {{--Image Food--}}
                        <div class="col-md-6 ">
                            <img class="card-img img-fluid" style="max-height: 283px;" src="{{asset('storage/'.$food->image)}}"
                                 alt="">
                        </div>
                        {{--Info Foood--}}
                        @include('restaurant.foodnfo', ['food' => $food])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
