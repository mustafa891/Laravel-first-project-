@extends('layouts.layout')
@section('title', 'Restaurant')

@section('content')


    <section class="container-lg" >
        <div class="row justify-content-center g-4">
          {{-- Cards   --}}
            @each('restaurant.food', $foods, 'food')
         {{-- end Card --}}
        </div>
    </section>

@endsection
