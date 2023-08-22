@extends('layouts.main')
@section('content')
        <div class="mt-4 w-full">
            <h1 class="text-2xl font-medium text-center text-black">Dashboard</h1>
            <div class="border-b border-gray-400 mt-4"></div>
            <div class="mx-6 my-4 flex flex-col">
                <div>
                    <p class="text-dark">Upcoming Event</p>
                </div>
                <div class="flex flex-row mt-4">
                    <div class="w-2/3 mx-2">
                        <div class="flex flex-row justify-center items-center">
                            <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                              <input
                                type="search"
                                class="relative focus:border-none focus:outline-none focus:ring-2 focus:ring-mypink-light border-gray-400 m-0 block w-[1px] min-w-0 flex-auto rounded-full bg-transparent bg-clip-padding px-3 h-12 text-base"
                                placeholder="Search"
                                aria-label="Search"
                                aria-describedby="button-addon2" />

                              <!--Search icon-->
                              <span
                                class="input-group-text flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-neutral-700 dark:text-neutral-200"
                                id="basic-addon2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20"
                                  fill="currentColor"
                                  class="h-5 w-5">
                                  <path
                                    fill-rule="evenodd"
                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                    clip-rule="evenodd" />
                                </svg>
                              </span>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 mx-2">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="filterdropdown" class="focus:ring-2 text-gray-500 focus:border-none focus:outline-none focus:ring-mypink-light rounded-full border border-gray-400 py-1 px-2 w-full h-12 text-base text-center inline-flex items-center" type="button">Filter <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                          </svg></button>
                        <!-- Dropdown menu -->
                        <div id="filterdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                              <li>
                                <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Newest</a>
                              </li>
                              <li>
                                <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Oldest</a>
                              </li>
                              <li>
                                <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My Event</a>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-1/3 mx-2">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="typedropdown" class="focus:ring-2 text-gray-500 focus:border-none focus:outline-none focus:ring-mypink-light rounded-full border border-gray-400 py-1 px-2 w-full h-12 text-base text-center inline-flex items-center" type="button">Type <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                          </svg></button>
                        <!-- Dropdown menu -->
                        <div id="typedropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                              <li>
                                <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Arts</a>
                              </li>
                              <li>
                                <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Science & Technology</a>
                              </li>
                              <li>
                                <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Poem</a>
                              </li>
                              <li>
                                <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Speech</a>
                              </li>
                              <li>
                                <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Other</a>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="my-2 py-2 w-full">
                  <a href="{{route('event.createEvent')}}" class="bg-mypink-light hover:bg-mypink-dark rounded-full p-2 px-4 font-bold text-white">
                    + Create New Event
                  </a>
                </div>

                <form method="POST" action="">
                  @csrf
                  @if ($events && count($events) > 0)
                    @foreach ($events as $event)
                    <div class="w-full shadow-xl bg-white rounded-xl my-1">
                      <div class="p-2 flex flex-row">
                        <div class="h-32 w-full rounded-lg shadow-xl m-5">
                          <img src="{{asset('storage/' . $event->image_path)}}" alt="Event Image" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="w-full m-5">
                          <h1 class="text-xl"> {{$event->name}} </h1>
{{--                            // Fetch the host user's full name for this event using query builder --}}
                            @php
                                $hostUser = DB::table('event_user')
                                    ->join('users', 'event_user.user_id', '=', 'users.id')
                                    ->where('event_user.event_id', $event->id)
                                    ->where('event_user.role', 'HOST')
                                    ->select('users.fullname')
                                    ->first();
                            @endphp
                            <p class="text-sm text-gray-600">By {{ $hostUser ? $hostUser->fullname : 'Unknown ' }}</p>
{{--                            <pre>{{ json_encode($hostUser , JSON_PRETTY_PRINT) }}</pre>--}}
                          <div class="my-5 flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                              <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <div>
                              <p class="mx-3 font-normal">{{$event->date}} - {{$event->hour}}:{{$event->minute}} {{$event->timeType}}</p>
                            </div>
                          </div>
                        </div>
{{--                          Status Indicator --}}
                        <div class="w-full m-5 flex flex-col justify-between items-center">
                          <div class="flex flex-row justify-center items-center">
                            <p class="text-base text-gray-600 w-12">Status:</p>
                              @if(Auth::user()->isAdmin()))
                                  <div class="rounded-full w-4 h-4 ml-1 flex items-center"> <p class="text-blue-800">ADMIN</p> </div>
                              @elseif(Auth::user()->isHost($event->id))
                                  <div class="rounded-full w-4 h-4 ml-1 flex items-center"> <p class="text-blue-800">HOST</p> </div>
                              @elseif(Auth::user()->isStaff($event->id))
                                  <div class="rounded-full w-4 h-4 ml-1 flex items-center"> <p class="text-blue-800">STAFF</p> </div>
                              @elseif(Auth::user()->isJoin($event->id))
                                  <div class="rounded-full w-4 h-4 ml-1 flex items-center"> <p class="text-red-600">Joined</p> </div>
                              @elseif(!Auth::user()->isJoin($event->id))
                                          <div class="rounded-full w-4 h-4 ml-1 flex items-center"> <p class="text-green-600">Available</p> </div>
                              @endif
                          </div>
                            <a href="{{route('event.index', ['event' => $event])}}" class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 mt-4 rounded-full cursor-pointer">See More</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  @else
                  <div class="text-center text-3xl mt-8 text-gray-400 uppercase">
                    <p>No Event!</p>
                  </div>
                  @endif
                </form>

                <!-- Event List -->

            </div>
{{--            {{ $events->links(); }}       --}}
        </div>
@endsection
