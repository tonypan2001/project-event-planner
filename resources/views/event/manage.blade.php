@extends('layouts.main')

@section('content')
    <div class="mt-4 w-full">
        <h1 class="text-2xl font-medium text-center text-black">Event Manager</h1>
        <div class="border-b border-gray-400 mt-4"></div>
        <div class="mx-6 my-4 flex flex-col">
            <!-- INSERT HERE!!! -->
            <div class="w-full rounded shadow-lg my-2 border">
                <div class="flex-col justify-center items-center m-4">
                    <a href="{{route('event.edit')}}" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                            <g id="_01_align_center" data-name="01 align center"><path d="M5,19H9.414L23.057,5.357a3.125,3.125,0,0,0,0-4.414,3.194,3.194,0,0,0-4.414,0L5,14.586Zm2-3.586L20.057,2.357a1.148,1.148,0,0,1,1.586,0,1.123,1.123,0,0,1,0,1.586L8.586,17H7Z"/>
                                <path d="M23.621,7.622,22,9.243V16H16v6H2V3A1,1,0,0,1,3,2H14.758L16.379.379A5.013,5.013,0,0,1,16.84,0H3A3,3,0,0,0,0,3V24H18.414L24,18.414V7.161A5.15,5.15,0,0,1,23.621,7.622ZM18,21.586V18h3.586Z"/>
                            </g>
                        </svg>
                        <p class="mx-2">Edit Event</p>
                    </a>

                    <a href="{{route('event.whiteboard')}}" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="16" height="16">
                            <path d="M20,0H4A4,4,0,0,0,0,4V16a4,4,0,0,0,4,4H6.9l4.451,3.763a1,1,0,0,0,1.292,0L17.1,20H20a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,16a2,2,0,0,1-2,2H17.1a2,2,0,0,0-1.291.473L12,21.69,8.193,18.473h0A2,2,0,0,0,6.9,18H4a2,2,0,0,1-2-2V4A2,2,0,0,1,4,2H20a2,2,0,0,1,2,2Z"/><path d="M7,7h5a1,1,0,0,0,0-2H7A1,1,0,0,0,7,7Z"/><path d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Z"/><path d="M17,13H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Z"/>
                        </svg>
                        <p class="mx-2">Whiteboard</p>
                    </a>

                    <a href="{{route('event.editBudget')}}" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="16" height="16">
                            <path d="M24,7v1c0,.552-.447,1-1,1s-1-.448-1-1v-1c0-1.654-1.346-3-3-3H5c-1.654,0-3,1.346-3,3v10c0,1.654,1.346,3,3,3h3c.553,0,1,.448,1,1s-.447,1-1,1h-3c-2.757,0-5-2.243-5-5V7C0,4.243,2.243,2,5,2h14c2.757,0,5,2.243,5,5Zm-9,2h4c.553,0,1-.448,1-1s-.447-1-1-1h-4c-.553,0-1,.448-1,1s.447,1,1,1Zm8.121,2.879c.566,.566,.879,1.32,.879,2.121s-.313,1.555-.879,2.122l-6.707,6.707c-.755,.755-1.76,1.172-2.828,1.172h-1.586c-.553,0-1-.448-1-1v-1.586c0-1.068,.416-2.073,1.172-2.828l6.707-6.707c1.17-1.17,3.072-1.17,4.242,0Zm-1.121,2.121c0-.267-.104-.518-.293-.707-.391-.391-1.023-.39-1.414,0l-6.707,6.707c-.372,.373-.586,.888-.586,1.414v.586h.586c.534,0,1.036-.208,1.414-.586l6.707-6.707c.189-.189,.293-.44,.293-.707Zm-13,1h-2.268c-.356,0-.688-.192-.867-.5-.275-.479-.886-.644-1.366-.365-.478,.277-.642,.888-.364,1.366,.534,.925,1.53,1.499,2.598,1.499h.268c0,.552,.447,1,1,1s1-.448,1-1c1.654,0,3-1.346,3-3,0-1.36-.974-2.51-2.315-2.733l-3.041-.507c-.373-.062-.644-.382-.644-.76,0-.551,.448-1,1-1h2.268c.356,0,.688,.192,.867,.5,.275,.478,.885,.642,1.366,.365,.478-.277,.642-.888,.364-1.366-.534-.925-1.53-1.5-2.598-1.5h-.268c0-.552-.447-1-1-1s-1,.448-1,1c-1.654,0-3,1.346-3,3,0,1.36,.974,2.51,2.315,2.733l3.041,.507c.373,.062,.644,.382,.644,.76,0,.551-.448,1-1,1Zm5-3c0,.552,.448,1,1,1s1-.448,1-1-.448-1-1-1-1,.448-1,1Z"/>
                        </svg>
                        <p class="mx-2">Edit Budget</p>
                    </a>

                    <a href="{{route('event.editWorker')}}" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="16" height="16">
                            <path d="M9,12c3.309,0,6-2.691,6-6S12.309,0,9,0,3,2.691,3,6s2.691,6,6,6Zm0-10c2.206,0,4,1.794,4,4s-1.794,4-4,4-4-1.794-4-4,1.794-4,4-4Zm1.75,14.22c-.568-.146-1.157-.22-1.75-.22-3.86,0-7,3.14-7,7,0,.552-.448,1-1,1s-1-.448-1-1c0-4.962,4.038-9,9-9,.762,0,1.519,.095,2.25,.284,.535,.138,.856,.683,.719,1.218-.137,.535-.68,.856-1.218,.719Zm12.371-4.341c-1.134-1.134-3.11-1.134-4.243,0l-6.707,6.707c-.755,.755-1.172,1.76-1.172,2.829v1.586c0,.552,.448,1,1,1h1.586c1.069,0,2.073-.417,2.828-1.172l6.707-6.707c.567-.567,.879-1.32,.879-2.122s-.312-1.555-.878-2.121Zm-1.415,2.828l-6.708,6.707c-.377,.378-.879,.586-1.414,.586h-.586v-.586c0-.534,.208-1.036,.586-1.414l6.708-6.707c.377-.378,1.036-.378,1.414,0,.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707Z"/>
                        </svg>
                        <p class="mx-2">Edit Staff/Worker</p>
                    </a>
                </div>
            </div>

            <div class="flex content-center justify-between w-full mb-5 mx-6 mt-5">
                <a href="{{ route('event.index') }}" class="w-full">< Back</a>
                {{-- <button class="w-full bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Join Event</button> --}}
                <div class="w-full"></div>
            </div>
        </div>
    </div>
@endsection
