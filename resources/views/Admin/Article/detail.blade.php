<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Admin One Tailwind CSS Admin Dashboard</title>

  <!-- Tailwind is included -->
  @include('Admin.layouts.style')

  <meta name="theme-color" content="#ffffff"/>
</head>
<body>

<div id="app">

  {{-- Sidebar --}}
  @include('Admin.layouts.sidebar')
  
  {{-- Header --}}
  <section class="is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Details Article</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>

  {{-- Main Content --}}
  <section class="section main-section">
    <div>
      <div class="relative ">
        <div class="flex space-x-4 ">
          <h1>Id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">000</p>
        </div>
      </div>
      <div class="relative top-14">
        <div class="flex space-x-4 ">
          <h1>Title</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">Pemograman</p>
        </div>
      </div>
      <div class="relative top-24">
        <div class="flex space-x-4 ">
          <h1>Users_id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">Fatra</p>
        </div>
      </div>
      
      <div class="relative top-36">
        <div class="flex space-x-4 ">
          <h1>Category_id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">Fatra</p>
        </div>
      </div>
      
      <div class="relative top-48">
        <div class="flex space-x-4 ">
          <h1>Content</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Blanditiis odio iusto pariatur animi praesentium explicabo
            reprehenderit ducimus eveniet laudantium eum veniam recusandae incidunt,
            error cum minima! Natus aspernatur at consectetur.
          </p>
        </div>
      </div>
      
      <div class="relative top-72">
        <div class="flex space-x-4 ">
          <h1>Photos</h1>
          <span class="absolute left-40">:</span>
          <img src="/dist/img/org.jpg" alt="" class="w-40 rounded-md absolute left-96"> 
        </div>
      </div>
      
     
    </div>
  </section>

  {{-- Footer --}}
  <div class="relative top-96 ">
    @include('Admin.layouts.footer')
  </div>
</div>



<script>
</script>
</body>
</html>
