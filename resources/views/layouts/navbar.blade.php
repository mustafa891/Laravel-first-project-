{{--  Navbar  --}}
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">

    <div class="container-lg">
        <a class="navbar-brand " href="{{url('/')}}">
            <stronge class="fw-bold">Restaurant</stronge>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Links  --}}
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="{{url('/')}}">{{__('text.home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('text.services')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('text.contact')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-md-none" href="#">{{__('text.sign-in')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-md-none" href="#">{{__('text.login')}}</a>
                </li>
            </ul>
        </div>

        <div class="button justify-content-end d-none d-md-flex">
            <a href="{{route('order.index')}}" id="cart" class="btn btn-outline-primary fw-bold me-2"><img id="cart" style="padding: 0 5px; height: 20px;" src="{{asset('assets/icon/cart.svg')}}" class="img-fluid"></a>

            @if(Auth::user())
                <ul class="navbar-nav">
                    <li class="nav-item dropdown position-relative">
                        <a id="navbarDropdown" style="padding: 10px" class="btn btn-outline-primary fw-bold dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            @can('admin')<li><a class="dropdown-item" href="{{url('/admin')}}">Admin Panel</a></li>@endcan
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                            <form action="{{route('logout')}}" method="POST" id="logout-form">@csrf</form>
                        </ul>
                    </li>
                </ul>
            @else
            <a href="{{url('/register')}}" class="btn btn-outline-primary fw-bold ">{{__('text.sign-in')}}</a>
            <a href="{{url('/login')}}" class="btn btn-outline-primary fw-bold mx-3 ">{{__('text.login')}}</a>
            @endif
            {{--Localization DropDown--}}
            <div class="btn-group ms-2">
                <button type="button" class="btn shadow-sm dropdown-toggle border border-1 p-2 px-2" data-bs-toggle="dropdown" aria-expanded="false">
                   <img src="{{asset('assets/icon/'.session()->get('locale').'.png')}}"  class="me-2" style="width: 20px;"> {{session()->get('locale')}}
                </button>
                <ul class="dropdown-menu" style="min-width: 50px !important;">
                    <li><a class="dropdown-item" href="{{route('lang',session()->get('secondeLang'))}}"><img src="{{asset('assets/icon/'.session()->get('secondeLang').'.png')}}" class="w-50 me-1">USA</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>


