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
    <div class="bg-gray-100 rounded-xl w-11/12 mx-auto flex justify-center  mt-7 mb-5">
        <div class="flex">
            <div>
                <img src="{{ asset('dist/img/login.svg') }}" alt="" class="w-4/5 py-20" >
            </div>
            <div class="flex flex-col  mr-28">
               <div class="flex flex-col items-center my-20">
                <h1 class="text-gray-900 text-5xl mb-5">Sing in</h1>
                <div class="border-b-4 border-gray-900 w-2/4 "></div>
               </div>
               <div  class="flex flex-col mb-5">
                   <input type="text" name="" id="" class="bg-gray-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50" placeholder="Email">
               </div>
               <div class="flex flex-col">
                   <input type="text" name="" id="" class="bg-gray-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50" placeholder="Password">
               </div>
               <div class="bg-gray-900 text-center w-1/3 text-gray-100 rounded-md py-1 px-1 mx-auto mt-5">
                   <button type="submit">Login</button>
               </div>
            </div>
        </div>
    </div>
</body>
</html>