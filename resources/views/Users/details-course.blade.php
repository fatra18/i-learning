<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Layout.header')
    <title>Detail-courses</title>

</head>
<body class="bg-gray-900">
   <div class="container mx-auto">  
     
     {{-- Navbar --}}
     @include('Layout.navbar')
     
     <div class="flex flex-row justify-center my-10 ">
        <h1 class="text-gray-100 text-4xl font-bold">Details Course</h1>
        <p class="text-gray-100 text-4xl font-bold ml-5"> 01</p>
     </div>
     
     <div class="flex justify-center">
         <div class="border-2 border-gray-100 text-gray-100 w-1/4 bg-gray-700 shadow-xl mt-24 mr-20">
             <div class="ml-5 mt-10 text-2xl">
                 <h1>Course Name</h1>
             </div>
             <div class="ml-5 flex mt-8 items-center">
                <p class="font-bold text-2xl">01</p>
                <p class="ml-4">Chapters_Name</p>
             </div>
             <div class="border-b-2 w-3/4 mr-10 mt-3 mx-auto"></div>
             <div class="ml-5 flex my-2 items-center">
                <p class="font-bold text-2xl">02</p>
                <p class="ml-4">Chapters_Name</p>
             </div>
             <div class="border-b-2 w-3/4 mr-10 mt-3 mx-auto"></div>
             <div class="ml-5 flex my-2 items-center">
                <p class="font-bold text-2xl">03</p>
                <p class="ml-4">Chapters_Name</p>
             </div>
             <div class="border-b-2 w-3/4 mr-10 mt-3 mx-auto"></div>
             <div class="ml-5 flex my-2 items-center">
                <p class="font-bold text-2xl">04</p>
                <p class="ml-4">Chapters_Name</p>
             </div>
             <div class="border-b-2 w-3/4 mr-10 mt-3 mx-auto"></div>
             <div class="ml-5 flex my-2 items-center mb-0">
                <p class="font-bold text-2xl">05</p>
                <p class="ml-4">Chapters_Name</p>
             </div>
             <div class="border-b-2 w-3/4 mr-10 mt-3 mx-auto mb-20"></div>

            
         </div>
         <div class="h-11/12">
            <iframe width="715" height="402" class="mt-24 mb-5" src="https://www.youtube.com/embed/tNJtY7k6pEA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
         
            </iframe>
            <button type="button" onclick="toggleModal('modal-id')" class="bg-red-900 text-gray-100 py-2 px-10 rounded-md shadow-xl focus:ring-2 focus:ring-gray-700">
                Ulasan
            </button>
            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center ml-40 mt-40" id="modal-id">
                <div class="relative  my-6 mx-auto max-w-3xl w-3/4 ml-96">
                    {{-- content --}}
                    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none ">
                     {{-- header --}}
                     <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                       <h1 class="text-3xl font-semibold">
                            Give your opinion
                       </h1>
                       <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                        <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                          ×
                        </span>
                       </button>
                     </div>
                     {{-- body --}}
                     <div class="relative p-6 flex-auto">
                       <textarea name="" id="" class="outline-none w-full">
                       </textarea>   
                     </div>
                     {{-- footer --}}
                     <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                        <button class="text-red-900 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                          Close
                        </button>
                        <button class="bg-gray-700 text-gray-100 active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                          Save Changes
                        </button>
                      </div>
                    </div>
                </div>
            </div>
            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

         </div>
         
     </div>
     
     <div class="w-2/3 ml-20 mt-14">
        <p class="text-gray-100 text-md leading-6 ">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ipsam quae iusto sapiente quam esse molestiae eius excepturi dignissimos.
            Dolore, incidunt omnis. Est, doloremque, iusto quam modi debitis quidem,
            vel voluptatibus rem commodi excepturi recusandae ut maxime voluptate
            nostrum consectetur eius quas vitae. Beatae, quod excepturi.
            Vero atque, illo aliquid corporis pariatur recusandae? Debitis hic asperiores
            explicabo architecto ullam totam illum qui omnis temporibus atque neque molestiae
            nemo commodi dolorem et aperiam, quis animi ipsum in mollitia delectus corporis
            earum? Enim ad aut rem fuga consequuntur, cupiditate, mollitia qui numquam
            dignissimos odio ipsa necessitatibus fugiat obcaecati commodi, aperiam adipisci
            dolorum cum?
        </p>
     </div>

    
     
     <div class="flex items-center ml-20 mt-28">
         <img src="/dist/img/teachers-2.jpg" alt="" class="w-20 h-20 rounded-full">
         <div class="flex flex-col">
            <p class="text-gray-100 text-sm font-bold ml-8">Kak Dia</p>
            <small class="text-gray-100  ml-8">teacher</small>
         </div>
     </div>

     
     <div class="flex mt-60">
        <div class="flex flex-col items-center">
            <img src="/dist/img/org.jpg" alt="" class="rounded-full w-14 h-14">
            <div class="flex flex-col items-center">
                <p class="text-md text-gray-100 mt-3 mb-1">Fatra</p>
                <small class="text-gray-100 mb-2">student</small>
                <p class="w-2/3 text-center text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus nemo 
                   error sunt aliquam corrupti ipsam necessitatibus debitis optio dolores?
                </p>
            </div>
         </div>
         <div class="flex flex-col items-center">
            <img src="/dist/img/org.jpg" alt="" class="rounded-full w-14 h-14">
            <div class="flex flex-col items-center">
                <p class="text-md text-gray-100 mt-3 mb-1">Fatra</p>
                <small class="text-gray-100 mb-2">student</small>
                <p class="w-2/3 text-center text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus nemo 
                   error sunt aliquam corrupti ipsam necessitatibus debitis optio dolores?
                </p>
            </div>
         </div>
         <div class="flex flex-col items-center">
            <img src="/dist/img/org.jpg" alt="" class="rounded-full w-14 h-14">
            <div class="flex flex-col items-center">
                <p class="text-md text-gray-100 mt-3 mb-1">Fatra</p>
                <small class="text-gray-100 mb-2">student</small>
                <p class="w-2/3 text-center text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus nemo 
                   error sunt aliquam corrupti ipsam necessitatibus debitis optio dolores?
                </p>
            </div>
         </div>
        
     </div>
    </div>
   
    {{-- Footer --}}
    @include('Layout.footer')


    <script type="text/javascript">
      function toggleModal(modalID){
      document.getElementById(modalID).classList.toggle("hidden");
      document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
      document.getElementById(modalID).classList.toggle("flex");
      document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
    </script>
</body>
</html>