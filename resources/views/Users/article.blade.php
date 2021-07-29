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
     
    <div class="flex items-center w-full justify-center mt-10 flex-col">
        <{img src="{{ asset('dist/img/article.jpg') }}" alt="" class="w-3/5 bg-cover bg-center rounded-xl border-2 border-gray-700 shadow-xl">
        <div class="flex justify-evenly  w-full">   
            <div class="text-gray-100 ml-5">
                <p class="mt-5 mb-1">Mantan gamer yang menjadi Programmer</p>
                <small class="font-bold">Admin</small>
               
            </div>
            <div class="text-gray-100">
                <p class="mt-5 mb-1">Programmer</p>
                <small class="font-bold">18-05-2002</small>
            </div>
        </div>
        <div class="border-2 border-gray-100 w-full mt-5"></div>
        <p class="text-center text-gray-100 mt-10 w-4/6 mb-5 leading-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eius itaque dolore sequi impedit nihil, reiciendis sunt amet pariatur adipisci dolorum nostrum praesentium aperiam, recusandae voluptate? Quibusdam quasi expedita odio.
        Dolore, eius. Expedita itaque sed iusto impedit unde quasi animi tempore voluptate, officiis, corporis laborum adipisci ratione veritatis facere esse, rerum quibusdam quam sint vel. Est excepturi consectetur odit obcaecati!
        Deleniti natus facere est corrupti dolores quam, vel quia quas nam repellat excepturi similique, quaerat illum ex consectetur esse voluptates quos veritatis blanditiis id cupiditate mollitia repellendus. Tempore, error odio?
        Et quis dolorum sit assumenda at facere eaque quo eius rem reiciendis fugit labore corrupti tempore sequi consequuntur odio, velit sed obcaecati, repellat autem, eligendi quasi doloribus beatae? Similique, eius.
        Quas ad expedita libero quod explicabo quisquam tempore labore maiores cumque, deleniti minus provident maxime fugiat asperiores consectetur ullam eos nobis illo nemo eius sit at magni minima. Repudiandae, dolores.
        Laudantium soluta aliquid veniam enim a! Minima, eaque itaque, veniam voluptate expedita repellat quasi ducimus optio quaerat pariatur quo eos, ut suscipit mollitia tempore! Corporis id sapiente excepturi in voluptatem.
        Similique ratione enim explicabo consectetur illo fugiat hic sunt libero sint modi suscipit cumque dignissimos commodi minima, magni quae dicta inventore aperiam accusantium nobis eveniet placeat! Exercitationem architecto omnis cum.
        Beatae neque vel maiores officiis rem cumque corrupti facere vero non, esse ab eligendi voluptatibus inventore eum molestiae eos, est quibusdam quas. Suscipit id iusto vero dolorum, cum ratione libero.
        Autem recusandae officiis eveniet temporibus dolorem vitae natus voluptatem, repellat illum facere quas esse porro eos libero! Veritatis, aliquam porro ad temporibus repellat fuga doloremque repellendus, autem, voluptas atque maxime?
        Qui, eveniet. Dolore autem voluptatum ullam libero? Provident, earum voluptatum? Fugit ducimus dolor necessitatibus tenetur neque at ullam accusantium, laudantium aliquam dolores provident eius explicabo impedit! Pariatur voluptates suscipit repudiandae?</p>
    </div>

    @include('Layout.footer')
  
  </div>
</body>
</html>