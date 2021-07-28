<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Layout.header')
    @section('title','home')
</head>
<body class="bg-gray-900 overflow-auto">
   <div class="container mx-auto">
     <div class="mt-6" >
         <img class="absolute inset-x-0 bottom-0 h-full w-full bg-cover bg-center"src="/dist/img/benner.jpg" alt="">
         <div class="absolute inset-0 h-full w-full bo bg-gray-900 bg-opacity-50"></div>
     </div>  
     
     @include('Layout.navbar')
     
     {{-- Benner Content --}}
     <div class="relative mt-16 ml-8">
        <div>
            <h1 class="text-gray-100 text-6xl mb-5">Fatess Stores</h1>
            <p class="text-gray-100 text-2xl w-4/12">learning made easy with teachers who are experts in their fields</p>
        </div>
        <div class="border-b-2 w-4/12 my-5">
        </div>
        <div>
            <p class="text-white">do your best in youth keep learning and seeking experience</p>
        </div>
     </div>

     {{-- Text one --}}
     <div class="relative mt-80">
         <p class="mx-auto w-5/12 text-center text-2xl text-gray-100 ">
            The most complete online learning solution for
            Elementary, Middle School, High School, and Vocational High School
         </p>
     </div>

     {{-- Category --}}
     <div class="relative mt-20">
         <div class="flex bg-gray-100 py-10 justify-evenly border-2 border-gray-400 rounded-2xl">
             <div class="flex items-center">
                 <img src="/dist/img/category-design.svg" alt="" class="w-44">
                 <div class=" ml-5">
                     <h1 class="text-2xl text-gray-900">Design</h1>
                     <p class="text-black">111111111</p>
                 </div>
             </div>
             <div class="flex items-center">
                 <img src="/dist/img/category-programming.svg" alt="" class="w-44">
                 <div class=" ml-5">
                     <h1 class="text-2xl text-gray-700">Programming</h1>
                     <p class="text-black">111111111</p>
                 </div>
             </div>
             <div class="flex items-center">
                 <img src="/dist/img/category-videografer.svg" alt="" class="w-44">
                 <div class=" ml-5">
                     <h1 class="text-2xl text-gray-700">VideoGrapich</h1>
                     <p class="text-black">111111111</p>
                 </div>
             </div>
         </div>
     </div>

     {{-- Courses --}}
     <div class="relative mt-40 mx-auto">
         <div class="flex gap-14 flex-wrap justify-center">
             <div class="bg-gray-100 shadow-sm w-2/5 flex rounded-r-xl rounded-l-lg">
               <a href="{{ route('course-details') }}">
                <div class="ml-5">
                    <h1 class="pt-7 pb-5 font-bold">Nama</h1>
                    <p class=" w-11/12 leading-6 pb-5 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       Provident, 
                    </p>
                    <div class="flex pb-7">
                       <small class="font-bold mr-20">category</small>
                       <small class="font-bold ">user_id</small>    
                    </div>                 
                   </div>
               </a>
                <img src="/dist/img/courses.jpg" alt="" class="w-64 h-68 bg-cover bg-center rounded-r-xl">
             </div>
             <div class="bg-gray-100 shadow-sm w-2/5 flex rounded-r-xl rounded-l-lg">
               <a href="{{ route('course-details') }}">
                <div class="ml-5">
                    <h1 class="pt-7 pb-5 font-bold">Nama</h1>
                    <p class=" w-11/12 leading-6 pb-5 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       Provident, 
                    </p>
                    <div class="flex pb-7">
                       <small class="font-bold mr-20">category</small>
                       <small class="font-bold ">user_id</small>    
                    </div>                 
                   </div>
               </a>
                <img src="/dist/img/courses.jpg" alt="" class="w-64 h-68 bg-cover bg-center rounded-r-xl">
             </div>
             <div class="bg-gray-100 shadow-sm w-2/5 flex rounded-r-xl rounded-l-lg">
               <a href="{{ route('course-details') }}">
                <div class="ml-5">
                    <h1 class="pt-7 pb-5 font-bold">Nama</h1>
                    <p class=" w-11/12 leading-6 pb-5 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       Provident, 
                    </p>
                    <div class="flex pb-7">
                       <small class="font-bold mr-20">category</small>
                       <small class="font-bold ">user_id</small>    
                    </div>                 
                   </div>
               </a>
                <img src="/dist/img/courses.jpg" alt="" class="w-64 h-68 bg-cover bg-center rounded-r-xl">
             </div>
             <div class="bg-gray-100 shadow-sm w-2/5 flex rounded-r-xl rounded-l-lg">
               <a href="{{ route('course-details') }}">
                <div class="ml-5">
                    <h1 class="pt-7 pb-5 font-bold">Nama</h1>
                    <p class=" w-11/12 leading-6 pb-5 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       Provident, 
                    </p>
                    <div class="flex pb-7">
                       <small class="font-bold mr-20">category</small>
                       <small class="font-bold ">user_id</small>    
                    </div>                 
                   </div>
               </a>
                <img src="/dist/img/courses.jpg" alt="" class="w-64 h-68 bg-cover bg-center rounded-r-xl">
             </div>
            
           
             
            
         </div>
     </div>

     {{-- adversiting --}}
     <div class="bg-gray-100 shadow-xl mt-36 w-11/12 mx-auto rounded-xl">
        <div class="flex justify-between w-full py-10">
            <div class="">
                <h1 class="text-5xl w-4/6 ml-14 text-gray-900">Let's advertise on our website</h1>
                <p class="ml-14 mt-5 w-3/5 leading-7 text-gray-700">
                    Fatess Store helps you to have
                    the skills you need, with mentors
                    who are experts in their fields,
                    in each course there is an easy-to-understand
                    material with mentors who are experts
                    in their field is expected to members
                    who follow this program can implement in the work
                </p>
            </div>
            <div class="w-full mr-14">
                <img src="/dist/img/block.jpg" alt="" class="rounded-xl">
            </div>
        </div>
        
     </div>

     {{-- Opinion Users --}}
     <div class="flex justify-center mt-20"> 
        <p class="text-2xl text-gray-100">this is the opinion of them please give your opinion</p>
     </div>
     
     {{-- Student --}}
     <div class="flex mt-20 gap-20 ml-10">
         <div class="">
             <img src="/dist/img/org.jpg" alt="" class="w-11/12 relative rounded-t-xl">
             <div class="bg-gray-100 shadow-xl w-11/12 rounded-b-2xl">
                <h1 class="pt-7 pl-5 font-bold text-gray-900">Name</h1>
                <small class="pt-7 pl-5 text-gray-900 ">Student</small>
                <p class=" px-5 py-5 w-full ">Lorem ipsum dolor sit amet
                   Excepturi accusantium dolores, voluptate illum officiis
                   voluptate illum officiisvoluptate 
                   </p>
             </div>
         </div>
         <div class="">
            <img src="/dist/img/org.jpg" alt="" class="w-11/12 relative rounded-t-xl">
            <div class="bg-gray-100 shadow-xl w-11/12 rounded-b-2xl">
               <h1 class="pt-7 pl-5 font-bold text-gray-900">Name</h1>
               <small class="pt-7 pl-5 text-gray-900 ">Student</small>
               <p class=" px-5 py-5 w-full ">Lorem ipsum dolor sit amet
                  Excepturi accusantium dolores, voluptate illum officiis
                  voluptate illum officiisvoluptate 
                  </p>
            </div>
         </div>
         <div class="">
            <img src="/dist/img/org.jpg" alt="" class="w-11/12 relative rounded-t-xl">
            <div class="bg-gray-100 shadow-xl w-11/12 rounded-b-2xl">
               <h1 class="pt-7 pl-5 font-bold text-gray-900">Name</h1>
               <small class="pt-7 pl-5 text-gray-900 ">Student</small>
               <p class=" px-5 py-5 w-full ">Lorem ipsum dolor sit amet
                  Excepturi accusantium dolores, voluptate illum officiis
                  voluptate illum officiisvoluptate 
                  </p>
            </div>
         </div>
     </div>

     {{-- Teachers Title --}}
     <div class="mt-20 text-center text-4xl text-gray-100">
         <p>profile of our mentors</p>
     </div>

     {{-- Teachers Profile --}}
     <div class="">
         <div class="relative flex  ml-20 mt-20">  
            <a href="{{ route('teacher-details') }}">
                <img src="/dist/img/alex.jpg" alt="" class="w-4/5  relative rounded-t-2xl">
                <div class="bg-gray-100 shadow-xl relative bottom-40 w-4/5 rounded-t-xl flex  flex-col  mr-8 ">
                    <p class="pt-7 pb-4 text-xl text-gray-900 font-bold ml-7">Kak Dia</p>
                    <p class="pb-5  w-full  text-gray-700 ml-7">Fullstack Developer</p>
                    <div class="border-b-2 border-gray-900 border-dotted"></div>
                    <p class="ml-7 mt-5 text-gray-900">1st Place hacking goggle</p>
                    <p class=" leading-7 pt-5 ml-7 pb-5 text-gray-900 w-5/6">Lorem ipsum,  adipisicing elit. Quibusdam temporibus maxime, quis nam laborum nulla non cumque officia laudantium </p>
                </div>
            </a>
            <a href="{{ route('teacher-details') }}">
                <img src="/dist/img/alex.jpg" alt="" class="w-4/5  relative rounded-t-2xl">
                <div class="bg-gray-100 shadow-xl relative bottom-40 w-4/5 rounded-t-xl flex  flex-col  mr-8 ">
                    <p class="pt-7 pb-4 text-xl text-gray-900 font-bold ml-7">Kak Dia</p>
                    <p class="pb-5  w-full  text-gray-700 ml-7">Fullstack Developer</p>
                    <div class="border-b-2 border-gray-900 border-dotted"></div>
                    <p class="ml-7 mt-5 text-gray-900">1st Place hacking goggle</p>
                    <p class=" leading-7 pt-5 ml-7 pb-5 text-gray-900 w-5/6">Lorem ipsum,  adipisicing elit. Quibusdam temporibus maxime, quis nam laborum nulla non cumque officia laudantium </p>
                </div>
            </a>
            <a href="{{ route('teacher-details') }}">
                <img src="/dist/img/alex.jpg" alt="" class="w-4/5  relative rounded-t-2xl">
                <div class="bg-gray-100 shadow-xl relative bottom-40 w-4/5 rounded-t-xl flex  flex-col  mr-8 ">
                    <p class="pt-7 pb-4 text-xl text-gray-900 font-bold ml-7">Kak Dia</p>
                    <p class="pb-5  w-full  text-gray-700 ml-7">Fullstack Developer</p>
                    <div class="border-b-2 border-gray-900 border-dotted"></div>
                    <p class="ml-7 mt-5 text-gray-900">1st Place hacking goggle</p>
                    <p class=" leading-7 pt-5 ml-7 pb-5 text-gray-900 w-5/6">Lorem ipsum,  adipisicing elit. Quibusdam temporibus maxime, quis nam laborum nulla non cumque officia laudantium </p>
                </div>
            </a>
         </div>
     </div>

     {{-- title Article --}}
     <div class="text-center text-4xl text-gray-100">
         <h1>Most recent in Fatess Store</h1>
     </div>

     {{-- Article --}}
     <div class="grid grid-cols-12 gap-2 items-center mt-20">

            <div class="col-span-6 ml-5 mt-5">z
                <a href="{{ route('article-details') }}">
                    <img src="/dist/img/article.jpg" alt="" class="rounded-xl">
                </a>
            </div>
            <div class="col-span-3 mt-5">
               <a href="{{ route('article-details') }}">
                 <img src="/dist/img/article.jpg" alt="" class="w-11/12 my-5 rounded-xl ml-5">
               </a>
               <a href="{{ route('article-details') }}">
                <img src="/dist/img/article.jpg" alt="" class="w-11/12 rounded-xl ml-5">

               </a>
            </div>
            <div class="col-span-3 mt-5">
                <a href="{{ route('article-details') }}">
                    <img src="/dist/img/article.jpg" alt="" class="w-11/12 my-5 rounded-xl">
                </a>
                <a href="{{ route('article-details') }}">
                    <img src="/dist/img/article.jpg" alt="" class="w-11/12 rounded-xl" >
                </a>
            </div>
     </div>

    </div>
    
    {{-- Footer --}}
    @include('Layout.footer')
</body>
</html>