<div class="col-md-3 col-7">
    <div class="card shadow border-0">
        <img src="{{asset('storage/'.$food->image)}}" class="card-img-top" style="" alt="...">
        <div class="card-body ">
            <h5 class="card-title">{{$food->name}}</h5>
            <p class="card-text">{{Str::limit($food->desc,120)}}</p>
            <div class="justify-content-between d-flex align-items-center">
                <a href="{{$food->url()}}" class="btn btn-primary">Buy Now</a>
                <span>{{$food->price}}<span class="mx-2 text-decoration-line-through text-muted">12.99$</span></span>
            </div>
        </div>
    </div>
</div>
