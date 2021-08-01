@extends('layouts.layout')
@section('title', 'Restaurant')

@section('content')

    <section class="container-lg">
        <div class="row justify-content-center">
            <div class="col-md-9 col ">
                <div class="card">
                    <div class="card-body d-md-flex ">
                        {{--Image Food--}}
                        @if(!$orders->isEmpty())
                        <table class="table bg-white">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Piece</th>
                                <th scope="col">Price</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($orders as $order)
                            <tr>
                                <form action="{{route('order.destroy',$order->id)}}" method="POST" id="DeleteForm">@method('DELETE')@csrf</form>
                                <th scope="row">1</th>
                                <td><img src="{{asset('assets/image/'.\App\Models\Food::find($order->food_id)->image )}}" style="width: 60px;"></td>
                                <td>{{$order->data['piece']}}</td>
                                <td>{{$order->data['price']}}</td>
                                <td><a href="{{ route('order.destroy',$order->id) }}" onclick="event.preventDefault();document.getElementById('DeleteForm').submit();">Delete</a></td>
                            </tr>
                            @empty

                            @endforelse

                        </tbody>
                        </table>
                        @else
                            <div class="d-flex m-auto">
                                <span class="text-muted ">{{__('text.empty')}}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
