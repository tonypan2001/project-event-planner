@extends('layouts.main')

@section('content')
<div class="mt-4 w-full">
    <h1 class="text-2xl font-medium text-center text-black">Event</h1>
    <div class="border-b border-gray-400 mt-4"></div>
    <div class="mx-6 my-4 flex flex-col">
        <!-- INSERT HERE!!! -->
        
        <div class="flex content-center justify-between w-full mb-5 mx-6">
            <a href="{{route('dashboard.index')}}" class="w-full">< Back</a>
            <button class="w-full bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Join Event</button>
            <div class="w-full"></div>
        </div>
    </div>
</div> 
@endsection