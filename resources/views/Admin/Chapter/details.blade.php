<!DOCTYPE html>
<html lang="en" class="">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Admin One Tailwind CSS Admin Dashboard</title>
  <style>
    /* Tab content - closed */
    .tab-content {
    max-height: 0;
    -webkit-transition: max-height .35s;
    -o-transition: max-height .35s;
    transition: max-height .35s;
    }
    /* :checked - resize to full height */
    .tab input:checked ~ .tab-content {
    max-height: 100vh;
    }
    /* Label formatting when open */
    .tab input:checked + label{
    /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
    font-size: 1.25rem; /*.text-xl*/
    padding: 1.25rem; /*.p-5*/
    border-left-width: 2px; /*.border-l-2*/
    border-color: #6574cd; /*.border-indigo*/
    background-color: #f8fafc; /*.bg-gray-100 */
    color: #6574cd; /*.text-indigo*/
    }
    /* Icon */
    .tab label::after {
    float:right;
    right: 0;
    top: 0;
    display: block;
    width: 1.5em;
    height: 1.5em;
    line-height: 1.5;
    font-size: 1.25rem;
    text-align: center;
    -webkit-transition: all .35s;
    -o-transition: all .35s;
    transition: all .35s;
    }
    /* Icon formatting - closed */
    .tab input[type=checkbox] + label::after {
    content: "+";
    font-weight:bold; /*.font-bold*/
    border-width: 1px; /*.border*/
    border-radius: 9999px; /*.rounded-full */
    border-color: #b8c2cc; /*.border-grey*/
    }
    .tab input[type=radio] + label::after {
    content: "\25BE";
    font-weight:bold; /*.font-bold*/
    border-width: 1px; /*.border*/
    border-radius: 9999px; /*.rounded-full */
    border-color: #b8c2cc; /*.border-grey*/
    }
    /* Icon formatting - open */
    .tab input[type=checkbox]:checked + label::after {
    transform: rotate(315deg);
    background-color: #6574cd; /*.bg-indigo*/
    color: #f8fafc; /*.text-grey-lightest*/
    }
    .tab input[type=radio]:checked + label::after {
    transform: rotateX(180deg);
    background-color: #6574cd; /*.bg-indigo*/
    color: #f8fafc; /*.text-grey-lightest*/
    }
  </style>

  <!-- Tailwind is included -->
  @include('Admin.layouts.style')

  <meta name="theme-color" content="#ffffff"/>
</head>
<body font-sans container>

<div id="app">

  {{-- Sidebar --}}
  @include('Admin.layouts.sidebar')

  {{-- Header --}}
  <section class="is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Details Chapters</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  {{-- Main Content --}}
  <section class="section main-section flex w-full mx-auto p-8" >
    <div class="tab w-full h-full  border-t">
      <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
      <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-one">Label One</label>
      <div class="tab-content overflow-auto border-l-2 bg-gray-100 border-indigo-500 leading-normal">
        @foreach ($data->video as $item )
        <div class="" data-aos="fade-down">
          <iframe 
              width="560" 
              height="315" 
              src="https://www.youtube.com/embed/{{ $item->video }}" 
              title="YouTube video player" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
          <p class="my-5 ml-5 font-bold text-lg">{{ $item->title }}</p>
        </div>
        <div class="flex mb-10 space-x-10">
          <a  href="{{ route('video.edit',[$item->id,$data->id]) }}" class="button small green --jb-modal ml-5" type="button">
            <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
              </svg>
            </span>
          </a>
          <form action="{{ route('video.delete',$item->id) }}"method="POST">
            @csrf
            <button class="button small red"  type="submit">
              <span class="icon"><i class="mdi mdi-trash-can"></i></span>
            </button>
            @method('DELETE')
          </form>
        </div>
        @endforeach 
      </div>
    </div>
  </section>
 

  {{-- Footer --}}
  @include('Admin.layouts.footer')

</div>

<script>
  /* Optional Javascript to close the radio button version by clicking it again */
  var myRadios = document.getElementsByName('tabs2');
  var setCheck;
  var x = 0;
  for(x = 0; x < myRadios.length; x++){
      myRadios[x].onclick = function(){
          if(setCheck != this){
               setCheck = this;
          }else{
              this.checked = false;
              setCheck = null;
      }
      };
  }
</script>
</body>
</html>
