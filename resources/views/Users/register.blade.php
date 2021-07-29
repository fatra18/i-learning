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
    <div class="bg-gray-100 rounded-xl w-11/12 mx-auto flex justify-center flex-wrap-reverse mt-7 mb-5" >
        <div class="flex flex-row-reverse ">
            <div class="ml-14">
                <img src="{{ asset('dist/img/register.svg') }}" alt="" class="py-28 mt-10" >
            </div>
            <div class="flex flex-col  ml-24">
               <div class="flex flex-col items-center my-20">
                <h1 class="text-gray-900 text-5xl mb-5">Sing Up</h1>
                <div class="border-b-4 border-gray-900 w-2/4 "></div>
               </div>
               <div  class="flex flex-col mb-2">
                   <input type="text" name="" id="" class="bg-gray-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50" placeholder="Name">
               </div>
               <div  class="flex flex-col mb-2">
                   <input type="text" name="" id="" class="bg-gray-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50" placeholder="Email">
               </div>
               <div class="flex flex-col mb-2">
                   <input type="text" name="" id="" class="bg-gray-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50" placeholder="Password">
               </div>
               <div class="flex flex-col">
                   <input type="text" name="" id="" class="bg-gray-900  outline-none rounded-md  py-3 w-96 ml-5 pl-5 mb-5 text-gray-100 focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50" placeholder="Confirm password">
               </div>
               <div class="bg-red-900 text-center w-1/3 text-gray-100 rounded-md py-1 px-1 mx-auto mt-5">
                   <button type="submit">Login</button>
               </div>
            </div>
        </div>
    </div>
</body>
</html>