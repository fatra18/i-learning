<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Layout.header')
    @section('title','category')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        
        {{-- Navbar --}}
        @include('Layout.navbar')
        
        <div>
            <div class="text-center text-3xl text-gray-100 font-bold mt-8" data-aos="fade-up">
                Page-Category
            </div>
            <div class="flex" >
                <div class="border-2 border-gray-100 w-1/4 flex flex-col bg-blue-900 my-10 ml-0 h-full rounded-md" data-aos="fade-down">
                   @foreach ($category as $item )
                   <div class="text-gray-100 my-5 ">
                    <a 
                    {{-- href="
                        {{ route('details-category'),[
                       
					
                    ] }}"  --}}
                   
                    
                    class="ml-7 text-xl font-bold ">
                    
                    {{ $item }}
                    
                    
                    </a>
                    <div class="border-b-2 w-full mt-5"></div>
                </div>
                   @endforeach
                  
                </div>
                <div class="border-2 border-blue-900 w-11/12 flex flex-wrap ml-5 items-center justify-center  mt-10 h-full mb-10 rounded-md" data-aos="fade-down">
                    <div class="bg-blue-900 shadow-sm w-5/12 h-2/5  mt-8 flex rounded-r-xl rounded-l-lg">
                        <div class="ml-5">
                         <h1 class="pt-7 pb-5 font-bold text-gray-100">Nama</h1>
                         <p class=" w-full leading-6 pb-5 text-gray-100 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Provident,Lorem ipsum dolor sit amet consectetur,  
                         </p>
                         <div class="flex pb-7">
                            <small class="font-bold mr-20 text-gray-100">category</small>
                            <small class="font-bold text-gray-100">user_id</small>    
                         </div>                 
                        </div>
                        <img src="{{ asset('dist/img/category-design.svg') }}" alt="" class="w-40 h-68 bg-cover bg-center rounded-r-xl mx-3">
                    </div>
                  
                    <div class="bg-blue-900 shadow-sm w-5/12 h-2/5 ml-8 mt-8 flex rounded-r-xl rounded-l-lg">
                        <div class="ml-5">
                         <h1 class="pt-7 pb-5 font-bold text-gray-100">Nama</h1>
                         <p class=" w-full leading-6 pb-5 text-gray-100 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Provident,Lorem ipsum dolor sit amet consectetur,  
                         </p>
                         <div class="flex pb-7">
                            <small class="font-bold mr-20 text-gray-100">category</small>
                            <small class="font-bold text-gray-100">user_id</small>    
                         </div>                 
                        </div>
                        <img src="{{ asset('dist/img/category-design.svg') }}" alt="" class="w-40 h-68 bg-cover bg-center rounded-r-xl mx-3">
                    </div>
                  
                    <div class="bg-blue-900 shadow-sm w-5/12 h-2/5  mt-8 flex rounded-r-xl rounded-l-lg">
                        <div class="ml-5">
                         <h1 class="pt-7 pb-5 font-bold text-gray-100">Nama</h1>
                         <p class=" w-full leading-6 pb-5 text-gray-100 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Provident,Lorem ipsum dolor sit amet consectetur,  
                         </p>
                         <div class="flex pb-7">
                            <small class="font-bold mr-20 text-gray-100">category</small>
                            <small class="font-bold text-gray-100">user_id</small>    
                         </div>                 
                        </div>
                        <img src="{{ asset('dist/img/category-design.svg') }}" alt="" class="w-40 h-68 bg-cover bg-center rounded-r-xl mx-3">
                    </div>
                  
                    <div class="bg-blue-900 shadow-sm w-5/12 h-2/5 ml-8 mt-8 flex rounded-r-xl rounded-l-lg">
                        <div class="ml-5">
                         <h1 class="pt-7 pb-5 font-bold text-gray-100">Nama</h1>
                         <p class=" w-full leading-6 pb-5 text-gray-100 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Provident,Lorem ipsum dolor sit amet consectetur,  
                         </p>
                         <div class="flex pb-7">
                            <small class="font-bold mr-20 text-gray-100">category</small>
                            <small class="font-bold text-gray-100">user_id</small>    
                         </div>                 
                        </div>
                        <img src="{{ asset('dist/img/category-design.svg') }}" alt="" class="w-40 h-68 bg-cover bg-center rounded-r-xl mx-3">
                    </div>
                  
                    <div class="bg-blue-900 shadow-sm w-5/12 h-2/5 mt-8 mb-8 flex rounded-r-xl rounded-l-lg">
                        <div class="ml-5">
                         <h1 class="pt-7 pb-5 font-bold text-gray-100">Nama</h1>
                         <p class=" w-full leading-6 pb-5 text-gray-100 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Provident,Lorem ipsum dolor sit amet consectetur,  
                         </p>
                         <div class="flex pb-7">
                            <small class="font-bold mr-20 text-gray-100">category</small>
                            <small class="font-bold text-gray-100">user_id</small>    
                         </div>                 
                        </div>
                        <img src="{{ asset('dist/img/category-design.svg') }}" alt="" class="w-40 h-68 bg-cover bg-center rounded-r-xl mx-3">
                    </div>
                  
                    <div class="bg-blue-900 shadow-sm w-5/12 h-2/5 ml-8 mt-8 mb-8 flex rounded-r-xl rounded-l-lg">
                        <div class="ml-5">
                         <h1 class="pt-7 pb-5 font-bold text-gray-100">Nama</h1>
                         <p class=" w-full leading-6 pb-5 text-gray-100 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Provident,Lorem ipsum dolor sit amet consectetur,  
                         </p>
                         <div class="flex pb-7">
                            <small class="font-bold mr-20 text-gray-100">category</small>
                            <small class="font-bold text-gray-100">user_id</small>    
                         </div>                 
                        </div>
                        <img src="{{ asset('dist/img/category-design.svg') }}" alt="" class="w-40 h-68 bg-cover bg-center rounded-r-xl mx-3">
                    </div>
                  
                   
                  
              
                    
              
                </div>
            </div>
        </div>
        
      
    </div>
    <div class="container-fluid">
           {{-- Footer --}}
      @include('Layout.footer')
    </div>
   
    
</body>
</html>