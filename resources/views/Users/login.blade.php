<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Layout.header')
    <title>Document</title>
</head>
<body>
    <div class="bg-gray-100 rounded-xl w-11/12 mx-auto flex justify-center  my-14 mb-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="flex">
            <div>
                <img src="{{ asset('dist/img/login.svg') }}" alt="" class="w-4/5 py-20" >
            </div>
            <div class="flex flex-col  mr-28">
               <div class="flex flex-col items-center my-20">
                <h1 class="text-blue-900 text-5xl mb-5">Sing in</h1>
                <div class="border-b-4 border-blue-900 w-2/4 "></div>
               </div>
               
               {{-- email --}}
               <div  class="flex flex-col mb-5">
                <input id="email" type="email" class="form-control bg-blue-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               </div>
               
               {{-- Password --}}
               <div class="flex flex-col">
                <input id="password" type="password" class="form-control form-control bg-blue-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               </div>

               <div class="flex ml-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
               </div>

               <div class="flex justify-center ml-8">
                <button type="submit" class="bg-blue-900 text-center w-3/4 text-gray-100 rounded-md py-1 px-1 mx-auto mt-5 ">
                    {{ __('Login') }}
                </button>
               </div>

               <div class="flex justify-center my-5 ml-10">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
               </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>