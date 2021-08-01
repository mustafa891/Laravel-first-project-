@extends('layouts.manager')
@section('title','Manager')

@section('content')

    <div class="container">
        <div class="btn-add d-flex justify-content-end">
            <a href="{{route('food.create')}}" class="btn custom2-btn">Add a new food</a>
        </div>
        <div class="foods">
            <h4 class="lead ">Update {{$food->name}}</h4>
            <div class="row justify-content-center">
                <form action="{{route('food.update',$food->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')

                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name Food</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name') ?? $food->name}}">
                            <samll class="text-danger">@error('name') {{$message}} @enderror</samll>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="exampleInputPassword1" value="{{old('price') ?? $food->price}}">
                            <samll class="text-danger">@error('price') {{$message}} @enderror</samll>
                        </div>

                        <div class="form-group d-flex flex-column ">
                            <label for="file" class="form-label">Profile Image:</label>
                            <input type="file" name="image" id="file">
                            <small class="text-danger">@error('profile_image') {{ $message }} @enderror</small>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" style="height: 130px !important;" value="{{old('desc') ?? $food->desc}}"></textarea>
                            <samll class="text-danger">@error('desc') {{$message}} @enderror</samll>
                        </div>
                        <button type="submit" class="btn custom1-btn mb-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    {{$food->image}}
@endsection
