<div class="col-md-6 text-center align-items-center">
    {{--Form--}}
    <form action="{{route('order.store')}}" method="POST">
        @csrf
        <span class="card-title fw-bold lead">{{$food->name}}</span> <br>
        <div name="price" class="mt-3 d-block">Price :<input class="readOnly" style="width: 60px;" type="text" name="price" id="price" value="{{$food->price}}" readonly> IQD</div>
        <div class="my-2 d-block">
            Piece :
            <strong class="mx-2 lead pointer" id="less">-</strong>
            <input class="readOnly" style="width: 20px" type="text" name="piece" id="piece" value="1" readonly>
            <strong class="mx-1 pointer" id="plus">+</strong>
        </div>
        <span class="my-2 d-block">Desc : {{$food->desc}} </span>
        {{--Toppings--}}
        @if($food->name == 'Pizza')
        <div class="toppings d-flex justify-content-center">
            @foreach($food->Toppings() as $topping)
                <div class="form-group mt-2 mx-1 ">
                    <label for="{{$topping}}" class="form-label text-muted fw-bold">{{$topping}}</label>
                    <input type="checkbox" name="toppings[]" id="{{$topping}}" value="{{$topping}}">
                </div>
            @endforeach
        </div>
        @endif
        {{--Inputs--}}
        <input type="hidden" id="PriceOnePiece" value="{{$food->price}}">
        <input type="hidden" name="_tokenUUUID" value="{{Request::segment(2)}}">
        <span class="text-success">{{session('msg')}}</span> <br>
        <button class="btn btn-success mt-3">{{__('text.order')}}</button>
        {{--EndForm--}}
    </form>
</div>
