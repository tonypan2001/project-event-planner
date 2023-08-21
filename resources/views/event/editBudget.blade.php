@extends('layouts.main')

@section('content')
    <div class="mt-4 w-full">
        <h1 class="text-2xl font-medium text-center text-black">Edit Budget for {{$event->name}}</h1>
        <div class="border-b border-gray-400 mt-4"></div>
        <div class="mx-6 my-4 flex flex-col">

            <div id="main" class="flex flex-col justify-center items-center mt-10">
                <div id="info" class="w-full p-4 rounded shadow- my-2 border bg-gray-100">
                    <p class="mb-2 text-xl font-medium text-left font-extrabold">Total Budget</p>
                    @if ($editBudget)
                        <p class="text-xl">฿{{ number_format($totalBudget, 2) }} THB</p>
                        {{-- <p class="text-xl">฿{{ optional($event->editBudget)->total_price ? number_format($event->editBudget->total_price, 2) : '0.00' }} THB</p> --}}
                    @else
                        <p class="text-xl">Please add your item</p>
                    @endif

                </div>
            </div>

            <!-- Item and Amount Input Text -->
            <form method="POST" autocomplete="off" action="{{route('event.editBudget.store', ['event' => $event])}}" enctype="multipart/form-data")}}">
                @csrf
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <div class="w-full rounded shadow-md my-2 border bg-gray-100">
                    <div class="grid grid-cols-2 gap-4 p-4">
                        <div>
                            <p class="mb-2 text-md font-medium">Item</p>
                            <input type="text" name="item" class="w-full p-2 border rounded-md focus:border-none focus:outline-none focus:ring-2 focus:ring-mypink-light" placeholder="Enter an item name">
                            @error('item')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <p class="mb-2 text-md font-medium">Price</p>
                            <input type="text" name="price" class="w-full p-2 border rounded-md focus:border-none focus:outline-none focus:ring-2 focus:ring-mypink-light" placeholder="Enter the price">
                            @error('price')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button class="ml-4 mb-4 py-2 px-6 bg-mypink-light hover:bg-mypink-dark text-white font-bold rounded-lg" type="submit">Add</button>
                </div>
            </form>

            @if ($editBudgets->count() > 0)
            @foreach ($editBudgets as $editBudget)
            <div class="w-full flex justify-center items-center border-b rounded-md mt-2">
                <div class="w-full flex flex-row justify-center items-center py-2">
                    <p class="mr-2 text-lg">Item : {{$editBudget->item}} |</p>
                    <p class="mr-2 text-lg">Price : ฿{{number_format($editBudget->price)}} THB |</p>
                    <form action="{{route('event.editBudget.destroy', ['editBudget' => $editBudget->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="flex flex-row justify-center items-center text-mypink-light hover:text-mypink-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash mr-1" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                            </svg>
                            Remove
                        </button>
                    </form>
                </div>
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
