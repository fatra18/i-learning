@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="bg-gray-100 rounded-xl w-11/12 mx-auto flex justify-center flex-wrap-reverse mt-7 mb-5" >
                <div class="flex flex-row-reverse ">
                    <div class="ml-14">
                        <img src="{{ asset('dist/img/register.svg') }}" alt="" class="py-28 mt-16 w-11/12" >
                    </div>
                    <div class="flex flex-col  ml-24">
                    <div class="flex flex-col items-center my-20">
                        <h1 class="text-blue-900 text-5xl mb-5">Sing Up</h1>
                        <div class="border-b-4 border-blue-900 w-2/4 "></div>
                    </div>
                    {{-- Name --}}
                    <div  class="flex flex-col mb-2">
                            <input id="name" type="text" class="form-control bg-blue-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror               
                    </div>
                    
                    {{-- Email --}}
                    <div  class="flex flex-col mb-2">
                        <input id="email" type="email" class="form-control bg-blue-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
    
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror               
                    </div>
    
                    {{-- Password --}}
                    <div class="flex flex-col mb-2 ">
                        <input id="password" type="password" class="form-control form-control bg-blue-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus placeholder="Password">
    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror              
                    </div>
                    
                    <div class="flex flex-col">
                        <input id="password-confirm" type="password" class="form-control bg-blue-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm_Password">
                    </div>
    
                    <div class="bg-blue-900 text-center w-1/3 text-gray-100 rounded-md py-1 px-1 mx-auto mt-5">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>               
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
