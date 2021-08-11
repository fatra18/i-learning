<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Layout.header')
    @section('title','Article')
</head>
<body class="bg-gray-900">
  <div class="container-fluid">
    
    {{-- Navbar --}}
    @include('Layout.navbar')
     
    <div class="flex items-center w-full justify-center mt-10 flex-col" data-aos="fade-up">
        <img src="/profile/{{ $articles->image }}" alt="" class="w-3/5 bg-cover bg-center rounded-xl border-2 border-gray-700 shadow-xl">
        <div class="flex justify-evenly  w-full">   
            <div class="text-gray-100 ml-5" data-aos="fade-up">
                <p class="mt-5 mb-1">{{ $articles->user->name }}</p>
                <small class="font-bold">{{ $articles->category->name }}</small>
               
            </div>
            <div class="text-gray-100" data-aos="fade-up">
                <p class="mt-5 mb-1">{{ $articles->title }}</p>
                <small class="font-bold">{{ $articles->created_at }}</small>
            </div>
        </div>
        <div class="border-2 border-gray-100 w-full mt-5"></div>
        <p class="text-center text-gray-100 mt-10 w-4/6 mb-5 leading-7" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eius itaque dolore sequi impedit nihil, reiciendis sunt amet pariatur adipisci dolorum nostrum praesentium aperiam, recusandae voluptate? Quibusdam quasi expedita odio.
        {{ $articles->content }}
        </p>
    </div>

    @include('Layout.footer')
  
  </div>
</body>
</html>