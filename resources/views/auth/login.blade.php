@extends('Layout.app')

@section('content')
    <div class="container-fluid w-full ">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="bg-gray-100 rounded-xl w-11/12 mx-auto flex justify-center mb-20">
                <div class="flex items-center">
                    <div>
                        <img src="{{ asset('dist/img/login.svg') }}" alt="" class="w-4/5 pt-32" >
                    </div>
                    <div class="flex flex-col  mr-28">
                    <div class="flex flex-col items-center my-20">
                        <h1 class="text-blue-900 text-5xl mb-5">Sing in</h1>
                        <div class="border-b-4 border-blue-900 w-2/4 "></div>
                    </div>

                        {{-- Email --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="bg-blue-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        {{-- Password --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control bg-blue-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50" @error('password') is-invalid @enderror name="password"  value="{{ old('password') }}" required autocomplete="current-password"  autofocus placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        {{-- Remember me --}}
                        <div class="form-group row ml-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mb-5">
                            <button type="submit" class="btn btn-primary bg-blue-900 text-center w-3/4 text-gray-100 rounded-md py-1 px-7 mx-auto mt-5">
                                {{ __('Login') }}
                            </button>
                        </div>
                        
                        <div class="form-group row mb-0 flex justify-center">
                            <div class="col-md-8 offset-md-4 ">
                               

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link w-3/4" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
