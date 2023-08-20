@extends('layouts.main')
@section('content')
<div class="mt-4 w-full">
    <h1 class="text-2xl font-medium text-center text-black">Gallery</h1>
    <div class="border-b border-gray-400 mt-4"></div>
    <div class="mx-6 my-4 flex flex-col">
        <!-- INSERT HERE!!! -->

        <form method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <!-- Upload Files Form -->
            <div class="w-auto h-56 bg-white flex flex-col justify-center">
                <label class="ml-4 inline-block mb-2 text-gray-500">Upload Image</label>
                <div type="file" class="mx-4 border border-4 border-dashed h-32 bg-white rounded-lg flex justify-center items-center flex-col hover:bg-gray-100 hover:border-gray-300">
                    <input type="file" id="gallery_image" name="gallery_image" class="rounded-lg border-2">
                </div>
                <div class="text-center">
                    @error('gallery_image')
                    <p class="text-red-500 text-sm">{{ $errors->first('gallery_image') }}</p>
                    @enderror
                </div>
                <div class="my-1 text-center w-full">
                    <div class="">
                        <input type="text" autocomplete="off" name="note" placeholder="Add note..." class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-1/2 h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                        <button type="submit" class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-6 h-12 rounded-xl">
                            Upload
                        </button>
                    </div>
                </div>
            </div>
            <!-- END -->
        </form>
            
            <!-- Display Paginated Images -->
            {{-- <div class="w-auto mx-auto px-6 py-6 border-2 rounded-lg">
                <div class="flex flex-wrap">
                    @foreach ($galleries as $gallery)
                    <div class="h-48 w-auto rounded-lg shadow-xl m-5">
                            <img src="{{ asset('storage/' . $gallery->gallery_image_path) }}" alt="Image" class="w-full h-full object-cover rounded-lg">
                            <p>Note: {{$gallery->note}}</p>
                        <div class="absolute top-0">
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> --}}
            <div class="w-auto mx-auto px-6 py-6 rounded-lg">
                <div class="flex flex-wrap">
                    @foreach ($galleries as $gallery)
                    <div class="relative h-48 w-auto rounded-lg shadow-xl m-5">
                        {{-- <img src="{{ asset('storage/' . $gallery->gallery_image_path) }}" alt="Image" class="w-full h-full object-cover rounded-lg"> --}}
                        <img src="{{ asset('storage/' . $gallery->gallery_image_path) }}?{{ time() }}" alt="Image" class="w-full h-full object-cover rounded-lg">
                        <p class="absolute top-2 left-2 bg-white text-black text-sm flex flex-row items-center rounded-lg px-2 py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil mr-1" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                              </svg>
                            {{ $gallery->note }}
                        </p>
                        <div class="absolute top-2 right-2">
                            <form method="POST" action="{{ route('gallery.destroy', $gallery->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-white hover:text-mypink-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>            

        <div class="mt-4">
            {{$galleries->links()}}
        </div>

        <div class="flex content-center justify-between w-full mb-5 mx-6 mt-5">
            <a href="{{route('dashboard.index')}}" class="w-full">< Back</a>
            {{-- <button class="w-full bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Join Event</button> --}}
            <div class="w-full"></div>
        </div>
    </div>
</div>
@endsection