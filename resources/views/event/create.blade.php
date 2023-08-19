@extends('layouts.main')
@section('content')
<div class="mt-4 w-full">
    <h1 class="text-2xl font-medium text-center text-black">Create New Event</h1>
    <div class="border-b border-gray-400 mt-4"></div>
    <div class="mx-6 my-4 flex flex-col">
        <div class="w-full shadow-xl bg-white rounded-xl my-1">

            <!-- Upload Files Form -->
            <div class="w-auto h-56 bg-white flex flex-col justify-center">
                <label class="inline-block mb-2 text-gray-500">Upload Image</label>
                <div class="border border-4 border-dashed w-full h-48 bg-white rounded-lg flex justify-center items-center flex-col hover:bg-gray-100 hover:border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-circle-fill text-mypink-light m-2" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg>
                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                        Attach a file
                    </p>
                    {{-- <input type="file" class="opacity-0"> --}}
                </div>
                <button class="w-full mt-3 px-4 py-2 text-white bg-mypink-light hover:bg-mypink-dark rounded shadow-xl">Upload File</button>
            </div>
            <!-- END -->

            <form action="" class="m-10 py-4">
                <div class="my-1">
                    <p>Event Name</p>
                    <input type="text" placeholder="Event Name" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-1/2 h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>

                <div class="my-1 flex flex-row border">
                    <div class="">
                        <p>Date</p>
                        <div class="flex flex-row my-2">
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input datepicker datepicker-title="Choose Your Date" type="text" class="bg-gray-50 border border-gray-400 text-gray-900 rounded-xl focus:ring-mypink-light focus:border-none focus:border-mypink-light focus:ring-2 block w-full h-12 pl-10 p-2.5" placeholder="Select date">
                            </div>
                        </div>
                    </div>
                    <div class="mx-2 flex">
                        <div class="flex flex-row ">
                            <div class="mx-2">
                                <p>Hour</p>
                                <input type="text" placeholder="Hour" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                            </div>
                            <div class="mx-2">
                                <p>Minutes</p>
                                <input type="text" placeholder="Hour" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                            </div>
                        </div>
                    </div>
                </div>
                
  
                <div class="my-1">
                    <p>Detail</p>
                    <textarea id="message" rows="4" class="bg-gray-50 block border border-gray-400 p-2.5 rounded-xl w-full h-40 my-2 focus:border-none focus:ring-mypink-light focus:ring-2" placeholder="Leave a detail..."></textarea>
                </div>
            </form>
            <div class="flex content-center justify-between w-full mb-5 mx-6">
                <a href="{{route('dashboard.index')}}" class="w-full">< Back</a>
                <button class="w-full bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Create</button>
                <div class="w-full"></div>
            </div>
        </div>
    </div>
</div> 
@endsection