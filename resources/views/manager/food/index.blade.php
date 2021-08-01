@extends('layouts.manager')
@section('title','Manager')

@section('content')

    <div class="container">
        <div class="btn-add d-flex justify-content-end">
            <a href="{{route('food.create')}}" class="btn custom2-btn">Add a new food</a>
        </div>
        <div class="foods">
            <h4 class="lead ">Foods</h4>
            <div class="row justify-content-center">
                <table class="table table-striped table-hover">
                    @foreach($foods as $food)
                        <tr>
                            <td class="bg-white">{{$food->id}}</td>
                            <td class="bg-white">{{$food->name}}</td>
                            <td class="bg-white">{{$food->price}}</td>
                            <td class="bg-white">{{$food->desc}}</td>
                            <td class="bg-white"><a class="text-danger" href="{{route('food.destroy',$food->id)}}" onclick="event.preventDefault();document.getElementById('deleteForm').submit()">Delete</a></td>
                            <td class="bg-white"><a href="{{route('food.edit',$food->id)}}">Edit</a></td>
                        </tr>
                        <form action="{{route('food.destroy',$food->id)}}" method="POST" id="deleteForm">@csrf @method('DELETE')</form>
                    @endforeach
                </table>
            </div>
        </div>



    </div>

@endsection
