<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 @include('Layout.header')
	 <title>Detail-courses</title>

</head>
<body class="bg-gray-100">
	<div class="container mx-auto">  
	  
	  {{-- Navbar --}}
	  @include('Layout.navbar')
	  
	  <div class="flex flex-row justify-center my-10 " data-aos="fade-down">
		  <h1 class="text-gray-100 text-4xl font-bold">Details Course</h1>
		  <p class="text-gray-100 text-4xl font-bold ml-5"> 01</p>
	  </div>
	  
	  <div class="flex justify-center" data-aos="fade-down">
			<div class="border-2 border-gray-100 text-gray-100 w-1/4 bg-blue-900 shadow-xl mt-24 mr-20">
				 <div class="ml-5 mt-10 text-2xl">
					  <h1>Course Name</h1>
				 </div>

				@foreach ($course->chapters as $key => $item)
					<div class="ml-5 flex mt-8 items-center {{
						$item->id == $chapter->id
							? 'bg-gray-100 p-4 text-blue-900' 
							: ''
					}}">
						<p class="text-2xl">
							{{ $key + 1 }}.
							<a href="{{ 
								route('details-course', [
									'course_id' => $course->id, 
									'chapter_id' => $item->id
								]) 
							}}">{{ $item->name }}</a>
						</p>
					</div>
				@endforeach
			
			</div>
			<div class="h-11/12" data-aos="fade-down">
				<iframe src="https://www.youtube.com/embed/{{ !empty($video) ? $video->video : '' }}" width="715" height="402" class="mt-24 mb-5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			
				<div class="flex flex-wrap">
				@auth
					
					@foreach ($chapter->videos as $key => $item)
						<a 
						class="block p-4 rounded-lg shadow {{ 
							$video->id == $item->id
							? 'text-blue-900 bg-white'
							: 'text-white bg-blue-900'
						}}"
						href="{{ 
							route('details-course', [
								'course_id' => $course->id, 
								'chapter_id' => $chapter->id,
								'video_id' => $item->id
							]) 
						}}"
					>
					{{ $key + 1 }}
					</a>
					@endforeach
				@endauth
				@guest
					<a 
					class="block p-4  rounded-lg shadow{{ 
						$video->id == $item->id
						? 'text-blue-900 bg-white'
						: 'text-gray-100 bg-blue-900'
					}}"
					href="">
					{{ $key }}
					</a>

				@endguest
				</div>
{{-- 				
				<button type="button" onclick="toggleModal('modal-id')" class="bg-blue-500 text-gray-100 py-2 px-10 rounded-md shadow-xl focus:ring-2 focus:ring-gray-700 mt-10">
					 Ulasan
				</button>
					 --}}
				<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

			</div>
			
	  </div>
	  
	  <div class="w-2/3 ml-20 mt-14" data-aos="fade-right">
		  <p class="text-blue-900 text-md leading-6 ">
			  {{ $course->description }}
		  </p>
	  </div>

	 
	  
	  <div class="flex items-center ml-20 mt-28" data-aos="fade-down">
			<img src="/profile/{{ $course->user->image }}" alt="" class="w-20 h-20 rounded-full">
			<div class="flex flex-col">
				<p class="text-blue-900 text-sm font-bold ml-8">{{ $course->user->name }}</p>
				<small class="text-blue-900  ml-8">{{ $course->user->title }}</small>
			</div>
	  </div>
	  <hr class="my-border border-black mt-10">
	@auth
	<div class="flex flex-col gap-3">
		<form action="{{ route('review',$course->id) }}" method="POST">
			@csrf
			@method("POST")
			<div class="w-full gap-5 p-6 border bg-blue-900 rounded-lg lg:w-1/2 mt-10">
				<label for="" class="text-gray-100">Comment Here:

					<textarea type="text" name="content" class="w-full p-1 px-2 border rounded-lg text-black mt-5">
					</textarea>  
				</label>
				<input type="hidden" name="course_id " style="display" value="{{ $course->id }}">
				{{-- <input type="hidden" name="user_id " style="display" value="{{ Auth::user()->id }}"> --}}
				{{-- @dd(Auth::user()->id); --}}
				<button class="w-1/5 bg-gray-100 rounded-lg mt-10">
					Confirm

				</button>
			</div> 
		
		</form>
	  </div>
	@endauth
	<div class="flex space-x-4">
		@foreach ($reviews as $view )
		<div class="flex gap-3 p-5 border rounded-lg w-2/6 bg-white flex-col mt-5">
		  <img src="/profile/{{ $view->user->image }}" alt="" class="w-1/12 rounded-lg">
		  <p>{{ $view->user->name }}</p>
		  <p>{{ $view->content }}</p>
	  </div>
	@endforeach
	</div>
	  {{-- <div class="flex mt-60" data-aos="fade-down">
		  <div class="flex flex-col items-center">
				<img src="{{ asset('dist/img/org.jpg') }}" alt="" class="rounded-full w-14 h-14">
				<div class="flex flex-col items-center">
					 <p class="text-md text-blue-900 mt-3 mb-1">Fatra</p>
					 <small class="text-blue-900 mb-2">student</small>
					 <p class="w-2/3 text-center text-blue-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus nemo 
						 error sunt aliquam corrupti ipsam necessitatibus debitis optio dolores?
					 </p>
				</div>
			</div>
			<div class="flex flex-col items-center">
				<img src="{{ asset('dist/img/org.jpg') }}" alt="" class="rounded-full w-14 h-14">
				<div class="flex flex-col items-center">
					 <p class="text-md text-blue-900 mt-3 mb-1">Fatra</p>
					 <small class="text-blue-900 mb-2">student</small>
					 <p class="w-2/3 text-center text-blue-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus nemo 
						 error sunt aliquam corrupti ipsam necessitatibus debitis optio dolores?
					 </p>
				</div>
			</div>
			<div class="flex flex-col items-center">
				<img src="{{ asset('dist/img/org.jpg') }}" alt="" class="rounded-full w-14 h-14">
				<div class="flex flex-col items-center">
					 <p class="text-md text-blue-900 mt-3 mb-1">Fatra</p>
					 <small class="text-blue-900 mb-2">student</small>
					 <p class="w-2/3 text-center text-blue-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatibus nemo 
						 error sunt aliquam corrupti ipsam necessitatibus debitis optio dolores?
					 </p>
				</div>
			</div>
		  
	  </div> --}}
	 </div>

	 
	
	 {{-- Footer --}}
	 <div data-aos="fade-up">
		 @include('Layout.footer')

	 </div>


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