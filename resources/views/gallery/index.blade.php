@extends('layouts.main')
@section('content')
<div class="mt-4 w-full">
    <h1 class="text-2xl font-medium text-center text-black">Photo Gallery</h1>
    <div class="border-b border-gray-400 mt-4"></div>
    <div class="mx-6 my-4 flex flex-col">
        <!-- INSERT HERE!!! -->

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

        <div class="flex content-center justify-between w-full mb-5 mx-6 mt-5">
            <a href="{{route('dashboard.index')}}" class="w-full">< Back</a>
            {{-- <button class="w-full bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Join Event</button> --}}
            <div class="w-full"></div>
        </div>
    </div>
</div>
@endsection