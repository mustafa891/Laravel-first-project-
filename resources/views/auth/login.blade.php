@extends('.layouts.layout')
@section('Login')

@section('content')

    <section class="container-lg ">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 ">
                <div class="card shadow-sm rounded-0">
                    <div class="card-header  bg-white">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Username Or Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control "name="username" value="{{ old('username') }}" required autocomplete="email" autofocus>
                                   @error('username') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row my-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
                                    @error('password') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row my-3">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <a class="btn btn-link" href="http://localhost/Services/public/password/reset">Forgot Your Password?</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
