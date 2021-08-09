<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Teacher.layouts.style')
</head>
<body>
    @include('Teacher.layouts.sidebar')
    <h1 class="text-2xl font-bold ml-10">Teacher Setting</h1>

    <div class="ml-10 mt-10">
        <div class="mt-96 sm:mt-0 ">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-2">
                <form  method="POST" action="{{ route('Teacher-setting-update',$teachers->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">name</label>
                            <input 
                                type="text" 
                                name="name"
                                value="{{ old('name',$teachers->name)}}" 
                                autocomplete="given-name"
                                class="mt-1 bg-gray-100 focus:border-gray-100 block shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-100 py-1 w-11/12 px-3"
                                >
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Email</label>
                            <input 
                                type="text" 
                                name="email" 
                                value="{{ old('name',$teachers->email)}}"  
                                autocomplete="given-name" 
                                class="mt-1 bg-gray-100 focus:border-gray-100 block shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-100 py-1 w-11/12 px-3"
                            >
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input 
                                type="text" 
                                name="phone_number"
                                value="{{ old('name',$teachers->phone_number)}}"   
                                id="first-name" 
                                autocomplete="given-name" 
                                class="mt-1 bg-gray-100 focus:border-gray-100 block shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-100 py-1 w-11/12 px-3"
                                >
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Title</label>
                            <input 
                                type="text" 
                                name="title" 
                                value="{{ old('name',$teachers->title)}}"    
                                autocomplete="given-name" 
                                class="mt-1 bg-gray-100 focus:border-gray-100 block shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-100 py-1 w-11/12 px-3"
                                >
                        </div>
                        
                        <div class="col-span-6 sm:col-span-4">
                            <label for="email-address" class="block text-sm font-medium text-gray-700">Achievement</label>
                            <input 
                                type="text" 
                                name="achievement"
                                value="{{ old('name',$teachers->achievement)}}"     
                                autocomplete="email" 
                                class="mt-1 bg-gray-100  focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-100 py-1 px-3"
                                >
                        </div>
                        
                        <div class="col-span-6 sm:col-span-4">
                            <label for="email-address" class="block text-sm font-medium text-gray-700">Password</label>
                            <input 
                                type="text" 
                                name="email-address" 
                                id="email-address"
                                value="{{ old('name',$teachers->password)}}"      
                                autocomplete="email" 
                                class="mt-1 bg-gray-100  focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-100 py-1 px-3"
                                >
                        </div>
                        
                    
    
                        <div class="col-span-6 sm:col-span-4">
                            <label for="email-address" class="block text-sm font-medium text-gray-700">Address</label>
                            <textarea 
                                name="address"
                                value=""
                                class="bg-gray-100 w-full focus:outline-none focus:ring-2 focus:ring-gray-200"
                                >
                                {{ $teachers->address }}
                            </textarea>
                        </div>
    
                        <div class="col-span-6">
                            <label for="street-address" class="block text-sm font-medium text-gray-700">Image</label>
                            <input 
                                type="file" 
                                name="image_file" 
                                autocomplete="street-address" 
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                >
                        </div>
    
                        
                        
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                        </button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>





    @include('Teacher.layouts.footer')
</body>
</html>