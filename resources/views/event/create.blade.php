@extends('layouts.main')
@section('content')
<div class="mt-4 w-full">
    <h1 class="text-2xl font-medium text-center text-black">Create New Event</h1>
    <div class="border-b border-gray-400 mt-4"></div>
    <div class="mx-6 my-4 flex flex-col">
        <div class="w-full shadow-xl bg-white rounded-xl my-1">
            <form method="POST" action="{{ route('event.storeEvent') }}" enctype="multipart/form-data" class="mx-10 py-4">
                @csrf
                @method('POST')
                <!-- Upload Files Form -->
                <div class="w-auto h-56 bg-white flex flex-col justify-center">
                    <label class="ml-4 inline-block mb-2 text-gray-500">Upload Image</label>
                    <div type="file" class="mx-4 border border-4 border-dashed h-32 bg-white rounded-lg flex justify-center items-center flex-col hover:bg-gray-100 hover:border-gray-300">
                        <input type="file" id="image" name="image" class="rounded-lg border-2">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-circle-fill text-mypink-light m-2" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg> --}}
                        {{-- <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                            Attach an image file
                        </p> --}}
                        {{-- <input type="file" class="opacity-0"> --}}
                    </div>
                    <div class="text-center">
                        @error('image')
                            <p class="text-red-500 text-sm">{{ $errors->first('image') }}</p>
                        @enderror
                    </div>
                    {{-- <button class="w-full mt-3 px-4 py-2 text-white bg-mypink-light hover:bg-mypink-dark rounded shadow-xl">Upload File</button> --}}
                </div>
                <!-- END -->

                <div class="my-1">
                    <p>Event Name</p>
                    <input type="text" name="name" placeholder="Event Name" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-1/2 h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
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
                                <input name="date" datepicker datepicker-title="Choose Your Date" type="text" class="bg-gray-50 border border-gray-400 text-gray-900 rounded-xl focus:ring-mypink-light focus:border-none focus:border-mypink-light focus:ring-2 block w-full h-12 pl-10 p-2.5" placeholder="Select date">
                                @error('date')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mx-2 flex">
                        <div class="flex flex-row ">
                            {{-- <div class="mx-2">
                            <p>Hour</p>
                            <input type="text" name="hour" placeholder="00" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                @error('hour')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div> --}}
                            <div class="mx-2">
                                <p>Hour</p>
                                <select name="hour" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                    @for ($i = 0; $i <= 12; $i++)
                                        @php
                                            $formattedHour = sprintf('%02d', $i);
                                        @endphp
                                        <option value="{{ $formattedHour }}">{{ $formattedHour }}</option>
                                    @endfor
                                </select>
                                @error('hour')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- <div class="mx-2">
                                <p>Minutes</p>
                                <input type="text" name="minute" placeholder="00" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                @error('minute')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div> --}}
                            <div class="mx-2">
                                <p>Minutes</p>
                                <select name="minute" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                    @for ($i = 0; $i <= 59; $i++)
                                        @php
                                            $formattedHour = sprintf('%02d', $i);
                                        @endphp
                                        <option value="{{ $formattedHour }}">{{ $formattedHour }}</option>
                                    @endfor
                                </select>
                                @error('minute')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Dropdown -->
                            <div class="mx-2 flex flex-col justify-center">
                                <label for="timeType">Select AM or PM</label>
                                <div class="flex flex-col justify-center">
                                    <select name="timeType" id="timeType" class="bg-gray-50 border border-gray-400 py-1 px-2 my-2 text-gray-900 rounded-xl h-12 w-44 focus:border-none focus:ring-mypink-light focus:ring-2">
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Dropdown -->
                        </div>
                    </div>
                </div>


                <div class="my-1">
                    <p>Detail</p>
                    <textarea id="detail" name="detail" rows="4" class="bg-gray-50 block border border-gray-400 p-2.5 rounded-xl w-full h-40 my-2 focus:border-none focus:ring-mypink-light focus:ring-2" placeholder="Leave a detail..."></textarea>
                    @error('detail')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="my-1">
                    <p>Property</p>
                    <textarea id="detail" name="property" rows="4" class="bg-gray-50 block border border-gray-400 p-2.5 rounded-xl w-full h-40 my-2 focus:border-none focus:ring-mypink-light focus:ring-2" placeholder="Leave a detail..."></textarea>
                    @error('property')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>



                <div class="flex content-center justify-between w-full my-5 mx-6">
                    <a href="{{route('dashboard.index')}}" class="w-full">< Back</a>
                    <button type="submit" class="w-full bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Create</button>
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
