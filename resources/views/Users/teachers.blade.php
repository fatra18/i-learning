<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Layout.header')
    <title>Document</title>
</head>
<body class="bg-gray-100">

  <div class="container mx-auto">
    {{-- Navbar --}}
    @include('Layout.navbar')

    <div class="flex items-center w-full justify-center mt-10 flex-col border-2 mb-10" data-aos="fade-down">
        <img src="/profile/{{ $teachers->image }}" alt="" class="w-1/4 bg-cover bg-center rounded-xl h-1/4 mt-5 border-2 border-gray-700 shadow-xl">
        <div class="flex justify-center   w-full ">   
            <div class="ml-5 flex items-center justify-between w-1/4 mt-3 text-blue-900">
                <p class="">{{ $teachers->name }}</p>
                <p class="">{{ $teachers->title }}</p>
               
            </div>
            
        </div>
        <div class="border-2 border-gray-100 w-full mt-5 text-blue-900"></div>
        <p class="text-center  mt-10 w-4/6 mb-5 leading-7 text-blue-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eius itaque dolore sequi impedit nihil, reiciendis sunt amet pariatur adipisci dolorum nostrum praesentium aperiam, recusandae voluptate? Quibusdam quasi expedita odio.
          {{ $teachers->description }}
        </p>
    </div>
    
   
    
  </div>
   {{-- Footer --}}
  <div data-aos="fade-up" class="container-fluid">

    @include('Layout.footer')
  </div>
</body>
</html>