{{-- Navbar --}}
<nav class=" py-5 sticky top-0 z-50 bg-gray-100 container-fluid">
    <div class="flex justify-center items-center ">
        <div class="ml-8 ">
           <img src="/dist/img/Logo.png" alt="" class="w-10">
        </div>
        <div class="flex justify-between w-full">
             <div class="ml-40 text-gray-100">
                 <a href="{{ route('home') }}" class="pl-7 text-gray-700">Home</a>
                 <a href="" class="pl-7 text-gray-700">About</a>
                 <a href="{{ route('category-pages') }}" class="pl-7 text-gray-700">Category</a>
             </div>
             <div class="mr-20 ">
                <a href="" class="bg-green-400 shadow-sm text-gray-100 px-5 py-2 rounded-md mr-5">Singin</a>
                <a href="" class="bg-red-600 shadow-sm text-gray-100 px-5 py-2 rounded-md">Singup</a>
             </div>
        </div>
    </div>
</nav>