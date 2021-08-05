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

     <div class="">
         <div class="flex flex-col justify-around  mx-auto " data-aos="fade-right">
            <h1 class="text-blue-900 text-center text-lg font-bold mt-14">My Account</h1>
        <form class="form form-horizontal" method="POST" action="{{ route('setting.store','setting.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT','POST')
            {{-- Image --}}
            <div class="flex items-center ml-56 mt-20">
                <img src="{{ asset('dist/img/teachers-2.jpg') }}" alt="" class="w-40 h-40 rounded-full bg-cover bg-center">
                <div class="py-2 px-5 bg-blue-00 bg-blue-900 text-gray-100 rounded-md ml-20">
                    Change Foto Profile
                    <input type="file" name="image_file"  value="{{ old('image_file') }}"placeholder="image" class="ml-5">
                </div>
            </div>
            
            {{-- Name --}}
            <div class="ml-64 mt-14">
                <input 
                    type="text" 
                    name="name" 
                    value="{{ old('name')}}" 
                    class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2 bg-blue-900" 
                    placeholder="name"
                    >
            </div>
            
            {{-- Email --}}
            <div class="ml-64 mt-7">
                <input 
                    type="text" 
                    name="email" 
                    value="{{ old('email')}}" 
                    class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2 bg-blue-900" 
                    placeholder="email"
                    >
            </div>
            
            {{-- Address --}}
            <div class="ml-64 mt-7">
                <input 
                    type="text" 
                    name="address"
                    value="{{ old('address')}}"  
                    class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2 bg-blue-900" 
                    placeholder="address"
                >
            </div>

            {{-- Phone_number --}}
            <div class="ml-64 mt-7">
                <input 
                    type="text" 
                    name="phone_number" 
                    value="{{ old('phone_number')}}"  
                    class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2 bg-blue-900" 
                    placeholder="phone_number"
                    >
            </div>

            {{-- Password --}}
            <div class="ml-64 mt-7">
                <input 
                    type="text" 
                    name="password"
                    value="{{ old('password')}}"   
                    class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2 bg-blue-900" 
                    placeholder="password"
                >
            </div>

            {{-- Confirm_password --}}
            <div class="ml-64 mt-7">
                <input 
                    type="text" 
                    name="confirm password"
                    value="{{ old('confirm_password')}}"    
                    class="w-2/4 py-2 rounded-sm px-3 focus:ring-gray-100 outline-none focus:ring-2 bg-blue-900" 
                    placeholder="confirm_password"
                    >
            </div>

        </form>
         </div>
     </div>
   </div>
   
    {{-- Footer --}}
    @include('Layout.footer')

</body>
</html>