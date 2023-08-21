@extends('layouts.main')

@section('content')
    <div class="mt-4 w-full">
        <h1 class="text-2xl font-medium text-center text-black">Whiteboard for {{$event->name}}</h1>
        <div class="border-b border-gray-400 mt-4"></div>
        <div class="mx-6 my-4 flex flex-col">
            <!-- INSERT HERE!!! -->

            <div class="w-full rounded-lg shadow-lg border">
                <div class="card m-2">
                    <div class="card-body text-center">
                        <form action="{{ route('event.storeWhiteboard') }}" class="w-full flex flex-col justify-center items-center" method="POST" autocomplete="off">
                            @csrf
                            <div class="w-full flex flex-col justify-center items-center">
                                <div class="w-full">
                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                                </div>
                                <div class="w-full">
                                    <h1 class="font-medium text-lg mt-2">Content</h1>
                                    <input type="text" name="content" class="w-1/3 mt-2 py-3 rounded-full focus:border-none focus:outline-none focus:ring-2 focus:ring-mypink-light" placeholder="Add your content">
                                    @error('content')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <h1 class="font-medium text-lg mt-2">Detail</h1>
                                    <textarea type="text" name="detail" class="w-1/3 mt-2 rounded-lg focus:border-none focus:outline-none focus:ring-2 focus:ring-mypink-light" placeholder="Add your detail"></textarea>
                                    @error('detail')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="bg-mypink-light py-2 px-4 w-1/4 mt-4 flex-row flex justify-center items-center rounded-full text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle m-2" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                Add
                            </button>
                        </form

                        <!-- if tasks count -->
                        @if ($whiteboards && count($whiteboards) > 0)
                        <div class="list-group list-group-flush m-4">
                            @foreach ($whiteboards as $whiteboard)
                                <div class="my-4">
                                    <form method="POST" action="{{ route('event.destroyWhiteboard', $whiteboard->id) }}" class="shadow-sm border-2 rounded-lg py-4 flex flex-col justify-center items-center">
                                        @csrf
                                        @method('delete')
                                        <div>
                                            <div class="my-4">
                                                <h1 class="font-medium text-2xl">
                                                    {{ $whiteboard->content }}
                                                </h1>
                                            </div>
                                            <div class="my-2 w-80 p-4 text-left border rounded-lg">
                                                <p>
                                                    {{ $whiteboard->detail }}
                                                </p>
                                            </div>
                                        </div>
                                        <button type="submit" class="bg-mypurple-light py-2.5 px-6 m-3 text-white flex justify-center items-center text-sm rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash mr-2" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                              </svg>    
                                            Remove
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                        @else
                        <p class="text-center mt-3">No Announcement!</p>
                        @endif
                    </div>
                    @if ($whiteboards && count($whiteboards) > 0)
                        <div class="card-footer text-center">
                            We have <span class="font-bold">{{ count($whiteboards) }}</span> announcement(s) on whiteboard
                        </div>
                    @else
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 content-center w-full mb-5 mx-6 mt-5">
                <a href="{{ route('event.manage', ['event' => $event]) }}" class="col-span-1 justify-self-start">< Back</a>
            </div>
        </div>
    </div>
@endsection
