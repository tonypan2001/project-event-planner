@extends('layouts.main')

@section('content')
    <div class="mt-4 w-full">
        <h1 class="text-2xl font-medium text-center text-black">Edit Budget</h1>
        <div class="border-b border-gray-400 mt-4"></div>
        <div class="mx-6 my-4 flex flex-col">
            <!-- INSERT HERE!!! -->


            <div class="grid grid-cols-3 gap-4 content-center w-full mb-5 mx-6 mt-5">
                <a href="{{ route('event.manage') }}" class="col-span-1 justify-self-start">< Back</a>
            </div>
        </div>
    </div>
@endsection
