@extends('layouts.manager')
@section('title','Manager')

@section('content')

    <div class="container">
        <div class="latest-order">
            <h4 class="lead ">Top 3 Latest Order</h4>
            <div class="row">
              @foreach($lastOrder as $order)

                <div class="col-md-4 col-3">
                    <div class="card shadow border-0">
                        <div class="card-body ">
                            <h5 class="card-title">Order By {{$order->user()->value('username')}}</h5>
                            <p class="card-text">Piece {{$order->data['piece']}} </p>
                            <div class="justify-content-between d-flex align-items-center">
                                <a href="" class="custom1-btn btn">View Order</a>
                                <span>{{$order->price}}<span class="mx-2 text-decoration-line-through text-muted">{{$order->data['price']}}</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

@endsection
