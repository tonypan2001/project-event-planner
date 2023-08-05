@extends('layouts.main')
@section('content')
<div class="mt-4 w-full">
    <h1 class="text-2xl font-medium text-center text-black">Create New Event</h1>
    <div class="border-b border-gray-400 mt-4"></div>
    <div class="mx-6 my-4 flex flex-col">
        <div class="w-full shadow-xl bg-white rounded-xl my-1">

            <!-- Upload Files Form -->
            <div class="flex justify-center mt-4">
                <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">
                    <div class="m-4">
                        <label class="inline-block mb-2 text-gray-500">Upload Image</label>
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col w-full h-32 border-4 border-mypink-lightest border-dashed hover:bg-gray-100 hover:border-gray-300">
                                <div class="flex flex-col items-center justify-center pt-7">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                        Attach a file</p>
                                </div>
                                <input type="file" class="opacity-0" />
                            </label>
                        </div>
                    </div>
                    <div class="flex justify-center p-2">
                        <button class="w-full px-4 py-2 text-white bg-mypink-light hover:bg-mypink-dark rounded shadow-xl">Upload</button>
                    </div>
                </div>
            </div>
            <!-- END -->

            <form action="" class="m-10 py-4">
                <div class="my-1">
                    <p>Event Name</p>
                    <input type="text" placeholder="Event Name" class="border border-gray-400 py-1 px-2 rounded-xl w-1/2 h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>
                <div class="my-1">
                    <p>Date</p>
                    <input type="text" placeholder="Date" class="border border-gray-400 py-1 px-2 rounded-xl w-1/2 h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>
                <div class="my-1">
                    <p>Time</p>
                    <input type="text" placeholder="Time" class="border border-gray-400 py-1 px-2 rounded-xl w-1/2 h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>
                <div class="my-1">
                    <p>Detail</p>
                    <textarea id="message" rows="4" class="block border border-gray-400 p-2.5 rounded-xl w-full h-40 my-2 focus:border-none focus:ring-mypink-light focus:ring-2" placeholder="Leave a detail..."></textarea>
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