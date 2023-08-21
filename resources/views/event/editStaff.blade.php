@extends('layouts.main')

@section('content')
    <div class="mt-4 w-full">
        <h1 class="text-2xl font-medium text-center text-black">Edit Staff / Worker</h1>
{{--        {{ json_encode($UserStaffEventMixs , JSON_PRETTY_PRINT) }}--}}
        <div class="border-b border-gray-400 mt-4"></div>
        <div class="mx-6 my-4 flex flex-col">

            <div id="main" class="flex flex-col justify-center items-center mt-10">
                <div id="info" class="w-full grid grid-cols-2 gap-2 p-4 rounded shadow-lg my-2 border bg-gray-100">
                    <div class="w-full rounded shadow-lg my-2 border bg-zinc-300 p-4">
                        <p class="w-full mb-2 text-xl font-medium text-left font-extrabold">Assigned</p>
                        <p class="mb-2 text-xl font-medium text-left font-bold">{{ $staffList->count() }}</p>
                    </div>
                    <div class="w-full rounded shadow-lg my-2 border bg-zinc-300 p-4">
                        <p class="mb-2 text-xl font-medium text-left font-extrabold"> Attendees+Staff Total</p>
                        <p class="mb-2 text-xl font-medium text-left font-bold">{{ $staffList->count()+$attendeeList->count() }}</p>
                    </div>
                </div>

                <div class="w-full rounded shadow-lg my-2 border bg-zinc-300 p-4 text-center">
                        <h1 class="text-2xl font-medium text-center text-black">All Staffs</h1>
                        <div class="border-b border-gray-400 mt-4"></div>
                        <div class="mx-6 my-4 flex flex-col">
                            <table class="table-auto w-full mt-2">
                                <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Assignment</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($UserStaffEventMixs as $UserStaffEventMix)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $UserStaffEventMix->fullname }}</td>
                                        <td class="border px-4 py-2">{{ $UserStaffEventMix->assignment }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                <!-- Create Item and Amount Input Text -->
                <div id="inputBlockContainer" class="w-full rounded shadow-lg my-2 border bg-zinc-300">
                    <form action="{{ route('event.storeStaffEvent', ['event' => $event]) }}" method="POST">
                        @csrf
                    <div class="grid grid-cols-2 gap-4 p-4">
{{--                        Dropdown $attendeeList--}}
                        <div>
                            <label for="attendee-dropdown" class="mb-2 text-m font-medium">Select Attendee to be Staff</label>
                            <select id="attendee-dropdown" name="user" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-mypink-light">
                                @foreach ($attendeeList as $attendee)
                                    <option value="{{ $attendee->fullname }}">{{ $attendee->fullname }}</option>
                                @endforeach
                            </select>
                            @error('user')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <p class="mb-2 text-m font-medium">Role (Assignment)</p>
                            <input type="text" name="assignment" placeholder="Event Role" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-mypink-light">
                            @error('assignment')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                        <div class="items-center">
                            <button type="submit" class="ml-4 py-2 px-6 bg-mypink-light hover:bg-mypink-dark text-white font-bold rounded-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

                <div class="grid grid-cols-3 gap-4 content-center w-full mb-5 mx-6 mt-5">
                    <a href="{{ route('event.manage', ['event' => $event]) }}" class="col-span-1 justify-self-start">< Back</a>
{{--                    <button id="addInputBlock" class="ml-4 py-2 px-6 bg-mypink-light hover:bg-mypink-dark text-white font-bold rounded-md">+</button>--}}
{{--                    <button class="ml-4 py-2 px-6 bg-mypink-light hover:bg-mypink-dark text-white font-bold rounded-md" href="{{ route('event.manage', ['event' => $event]) }}">Save</button>--}}
                </div>
            </div>
        </div>
    </div>

{{--    <script>--}}
{{--        const addInputBlockButton = document.getElementById('addInputBlock');--}}
{{--        const inputBlockContainer = document.getElementById('inputBlockContainer');--}}

{{--        addInputBlockButton.addEventListener('click', () => {--}}
{{--            const newInputBlock = document.createElement('div');--}}
{{--            newInputBlock.classList.add('grid', 'grid-cols-2', 'gap-4', 'p-4');--}}
{{--            newInputBlock.innerHTML = `--}}
{{--                <div>--}}
{{--                    <input type="text" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-mypink-light" placeholder="Enter name">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <input type="text" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-mypink-light" placeholder="Enter Role">--}}
{{--                </div>--}}
{{--            `;--}}
{{--            inputBlockContainer.appendChild(newInputBlock);--}}
{{--        });--}}
{{--    </script>--}}
@endsection
