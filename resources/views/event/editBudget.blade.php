@extends('layouts.main')

@section('content')
    <div class="mt-4 w-full">
        <h1 class="text-2xl font-medium text-center text-black">Edit Budget for {{$event->name}}</h1>
        <div class="border-b border-gray-400 mt-4"></div>
        <div class="mx-6 my-4 flex flex-col">

            <div id="main" class="flex flex-col justify-center items-center mt-10">
                <div id="info" class="w-full p-4 rounded shadow-lg my-2 border bg-gray-100">
                    @if ($editBudget)
                    <p class="mb-2 text-xl font-medium text-left font-extrabold">Total Budget</p>
                    <p> THB</p>
                    @else
                    <p class="mb-2 text-xl font-medium text-left font-extrabold">Total Budget</p>
                    <p>Please add your item</p>
                    @endif
                </div>
            </div>
                
                <!-- Item and Amount Input Text -->
                <form method="POST" autocomplete="off" action="{{route('event.editBudget.store')}}">
                    @csrf
                    <div class="w-full rounded shadow-lg my-2 border bg-gray-100">
                        <div class="grid grid-cols-2 gap-4 p-4">
                            <div>
                                <p class="mb-2 text-m font-medium">Item</p>
                                <input type="text" name="item" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-mypink-light" value="" placeholder="Enter name">
                            </div>
                            <div>
                                <p class="mb-2 text-m font-medium">Price</p>
                                <input type="text" name="price" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-mypink-light" value="" placeholder="Enter amount">
                            </div>
                        </div>
                        <button class="ml-4 py-2 px-6 bg-mypink-light hover:bg-mypink-dark text-white font-bold rounded-lg" type="submit">Add</button>
                    </div>
                </form>
                @if ($editBudgets->count() > 0)
                @foreach ($editBudgets as $editBudget)
                    <div class="w-full border flex flex-row justify-center items-center">
                        <p class="mx-2">Name: {{$editBudget->item}}</p>
                        <p class="mx-2">Price: {{$editBudget->price}}</p>
                        <form action="{{route('event.editBudget.destroy', ['editBudget' => $editBudget->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Remove</button>
                        </form>
                        </div>
                @endforeach
                @endif
                    
                <div class="grid grid-cols-3 gap-4 content-center w-full mb-5 mx-6 mt-5">
                    <a href="{{ route('event.manage', ['event' => $event]) }}" class="col-span-1 justify-self-start">< Back</a>
                    {{-- <button id="addInputBlock" class="ml-4 py-2 px-6 bg-mypink-light hover:bg-mypink-dark text-white font-bold rounded-md">+</button> --}}
                </div>
        </div>
    </div>
@endsection
