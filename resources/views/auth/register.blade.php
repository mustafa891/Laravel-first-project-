@extends('.layouts.layout')
@section('Login')

@section('content')

    <section class="container-lg ">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 ">
                <div class="card shadow-sm rounded-0">
                    <div class="card-header  bg-white">{{ __('Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register')}}">
                            @csrf
                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control "name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                    @error('username') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control "name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control "name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>


                            <div class="form-group row my-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
                                    @error('password') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row my-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control " name="password_confirmation" required autocomplete="current-password">
                                    @error('password_confirmation') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row my-3">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                    <a class="btn btn-link" href="{{url('/login')}}">I have an acount</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
