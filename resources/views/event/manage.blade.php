@extends('layouts.main')

@section('content')
    <div class="mt-4 w-full">
        <h1 class="text-2xl font-medium text-center text-black">Event Manager</h1>
        <div class="border-b border-gray-400 mt-4"></div>
        <div class="mx-6 my-4 flex flex-col">
            <!-- INSERT HERE!!! -->
            @php
                // Fetch attendee count and names for this event using query builder

            @endphp
            <div class="w-full rounded shadow-lg my-2 border">
                <div class="flex-col justify-center items-center m-4">
                    <div id="info" class="w-full grid grid-cols-2 gap-2 p-4 rounded shadow-lg my-2 border bg-gray-100">
                        <div class="w-full rounded shadow-lg my-2 border bg-zinc-300 p-4 text-center">
                            <p class="w-full mb-2 text-xl font-medium font-extrabold">Attendees</p>
                            <p class="mb-2 text-xl font-medium font-bold">{{ $attendees->count() }}</p>
                        </div>
                        <div class="w-full rounded shadow-lg my-2 border bg-zinc-300 p-4 text-center">
                            <p class="mb-2 text-xl font-medium font-extrabold">Staffs</p>
                            <p class="mb-2 text-xl font-medium font-bold">{{ $staffs->count() }}</p>
                        </div>
                    </div>
                    <a href="{{route('event.editEvent', ['event' => $event])}}" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                        <p class="mx-2">Edit Event</p>
                    </a>

                    <a href="{{route('event.whiteboard', ['event' => $event])}}" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        <p class="mx-2">Whiteboard</p>
                    </a>

                    <a href="{{route('event.editBudget', ['event' => $event])}}" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                          </svg>
                        <p class="mx-2">Edit Budget</p>
                    </a>

{{--                    Check if user are isHost or isAdmin before load this button--}}
                    @if(Auth::user()->isHost($event->id) | Auth::user()->isAdmin())

                        <a href="{{route('event.editStaff', ['event' => $event])}}" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                            </svg>
                            <p class="mx-2">Edit Staff / Worker</p>
                        </a>

                        <form method="POST" action="{{route('event.manage.destroy', ['event' => $event])}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                </svg>
                                <p class="mx-2">Delete Event</p>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
            <div class="w-full rounded shadow-lg my-2 border">
                <div class="flex-col justify-center items-center m-4">
                    <div id="info" class="w-full grid grid-cols-2 gap-2 p-4 rounded shadow-lg my-2 border bg-gray-100">
                        <div class="w-full rounded shadow-lg my-2 border bg-zinc-300 p-4 text-center">
                            <p class="w-full mb-2 text-xl font-medium font-extrabold">Attendees List</p>
                            @if ($attendees->count() > 0)
                                <table class="table-auto w-full mt-2">
                                    <tbody>
                                    @foreach ($attendees as $attendee)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $attendee->fullname }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="text-gray-600">No Attendees</p>
                            @endif
                        </div>
                        <div class="w-full rounded shadow-lg my-2 border bg-zinc-300 p-4 text-center">
                            <p class="w-full mb-2 text-xl font-medium font-extrabold">Staffs List</p>
                            @if ($staffs->count() > 0)
                                <table class="table-auto w-full mt-2">
                                    <tbody>
                                    @foreach ($staffs as $staff)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $staff->fullname }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="text-gray-600">No Staff</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex content-center justify-between w-full mb-5 mx-6 mt-5">
                <a href="{{ route('event.index', ['event' => $event]) }}" class="w-full">< Back</a>
                {{-- <button class="w-full bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Join Event</button> --}}
                <div class="w-full"></div>
            </div>
        </div>
    </div>
@endsection
