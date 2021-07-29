<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Layout.header')
    <title>Document</title>

</head>
<body class="bg-gray-900">
   <div class="container mx-auto">  
    
     {{-- Navbar --}}
     @include('Layout.navbar')

     <div class="">
         <div class="flex flex-col justify-around  mx-auto " data-aos="fade-right">
            <h1 class="text-gray-100 text-center text-lg font-bold mt-20">My Account</h1>
            <div class="flex items-center ml-56 mt-20">
                <img src="{{ asset('dist/img/teachers-2.jpg') }}" alt="" class="w-40 h-40 rounded-full bg-cover bg-center">
                <div class="py-2 px-20 bg-gray-700 text-gray-100 rounded-md ml-20">
                    <button>Change foto profile</button>
                </div>
            </div>
            <div class="ml-64 mt-14">
                <input type="text" name="" class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2" placeholder="name">
            </div>
            <div class="ml-64 mt-7">
                <input type="text" name="" class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2" placeholder="email">
            </div>
            <div class="ml-64 mt-7">
                <input type="text" name="" class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2" placeholder="address">
            </div>
            <div class="ml-64 mt-7">
                <input type="text" name="" class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2" placeholder="phone_number">
            </div>
            <div class="ml-64 mt-7">
                <input type="text" name="" class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2" placeholder="password">
            </div>
            <div class="ml-64 mt-7">
                <input type="text" name="" class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2" placeholder="confirm_password">
            </div>
         </div>
     </div>
   </div>
   
    {{-- Footer --}}
    @include('Layout.footer')

</body>
</html>