@extends('layouts.main')
@section('content')
    <div class="mt-4 w-full">
        <h1 class="text-2xl font-medium text-center text-black">Edit Event</h1>
        <div class="border-b border-gray-400 mt-4"></div>
        <div class="mx-6 my-4 flex flex-col">
            <div class="w-full shadow-xl bg-white rounded-xl my-1">

                <form method="POST" action="{{route('event.updateEvent', ['event' => $event])}}" enctype="multipart/form-data" class="m-10 py-4">
                    @csrf
                    @method('PUT')
                    <!-- Upload Files Form -->
                    <div class="w-auto h-56 bg-white flex flex-col justify-center">
                        <label class="ml-4 inline-block mb-2 text-gray-500">Upload Image</label>
                        <div type="file" class="mx-4 border border-4 border-dashed h-32 bg-white rounded-lg flex justify-center items-center flex-col hover:bg-gray-100 hover:border-gray-300">
                            <input type="file" id="image" name="image" class="rounded-lg border-2">
                            @error('image')
                                <p class="text-red-500 text-sm">{{ $errors->first('image') }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- END -->
                
                    <div class="my-1">
                        <p>Event Name</p>
                        <input value="{{$event->name}}" name="name" type="text" placeholder="Event Name" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-1/2 h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                    </div>

                    <div class="my-1 flex flex-row">
                        <div class="">
                            <p>Date</p>
                            <div class="flex flex-row my-2">
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input value="{{$event->date}}" name="date" datepicker datepicker-title="Choose Your Date" type="text" class="bg-gray-50 border border-gray-400 text-gray-900 rounded-xl focus:ring-mypink-light focus:border-none focus:border-mypink-light focus:ring-2 block w-full h-12 pl-10 p-2.5" placeholder="Select date">
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 flex">
                            <div class="flex flex-row ">
                                {{-- <div class="mx-2">
                                    <p>Hour</p>
                                    <input value="{{$event->hour}}" type="text" name="hour" placeholder="00" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                </div> --}}
                                <div class="mx-2">
                                    <p>Hour</p>
                                    <select name="hour" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                        @for ($i = 0; $i <= 12; $i++)
                                            <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}" {{$event->hour == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : ''}}>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                        @endfor
                                    </select>
                                </div>
                                {{-- <div class="mx-2">
                                    <p>Minutes</p>
                                    <input value="{{$event->minute}}" type="text" name="minute" placeholder="00" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                </div> --}}
                                <div class="mx-2">
                                    <p>Minutes</p>
                                    <select name="minute" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                        @for ($i = 0; $i <= 59; $i++)
                                            <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}" {{$event->minute == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : ''}}>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Dropdown -->
                        <div class="mx-2 flex flex-col justify-center">
                            <label for="timeType" class="text-gray-400">Current : {{$event->timeType}}</label>
                            <div class="flex flex-col justify-center">
                                <select name="timeType" id="timeType" class="bg-gray-50 border border-gray-400 py-1 px-2 my-2 text-gray-900 rounded-xl h-12 w-44 focus:border-none focus:ring-mypink-light focus:ring-2">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>              
                            </div>
                        </div>
                        <!-- End Dropdown -->
                    </div>


                    <div class="my-1">
                        <p>Detail</p>
                        <textarea id="message" name="detail" rows="4" class="bg-gray-50 block border border-gray-400 p-2.5 rounded-xl w-full h-40 my-2 focus:border-none focus:ring-mypink-light focus:ring-2" placeholder="Leave a detail...">{{$event->detail}}</textarea>
                    </div>

                    <div class="my-1">
                        <p>Property</p>
                        <textarea id="detail" name="property" rows="4" class="bg-gray-50 block border border-gray-400 p-2.5 rounded-xl w-full h-40 my-2 focus:border-none focus:ring-mypink-light focus:ring-2" placeholder="Leave a detail...">{{$event->property}}</textarea>
                    </div>

                    <div class="flex content-center justify-between w-full mt-5 mb-5 mx-6">
                        <a href="{{ route('event.manage', ['event' => $event]) }}" class="w-full">< Back</a>
                        <button type="submit" class="w-full bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Save</button>
                        <div class="w-full"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdownButton = document.getElementById("dropdown-button");
            const dropdownContent = document.getElementById("dropdown-content");
    
            // Add click event listeners to dropdown items
            const dropdownItems = dropdownContent.querySelectorAll("[data-value]");
            dropdownItems.forEach((item) => {
                item.addEventListener("click", function (e) {
                    e.preventDefault(); // Prevent the default behavior
                    const selectedValue = item.getAttribute("data-value");
                    dropdownButton.querySelector(".text-gray-500").textContent = selectedValue;
                    // Close the dropdown
                    dropdownContent.classList.add("hidden");
                });
            });
    
            // Toggle dropdown visibility
            dropdownButton.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent the default behavior
                dropdownContent.classList.toggle("hidden");
            });
        });
    </script>
@endsection
