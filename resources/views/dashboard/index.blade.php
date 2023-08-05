@extends('layouts.main')
@section('content')
        <div class="mt-4 w-full">
            <h1 class="text-2xl font-medium text-center text-black">Dashboard</h1>
            <div class="border-b border-gray-400 mt-4"></div>
            <div class="mx-6 my-4 flex flex-col">
                <div>
                    <p class="text-dakr">Upcoming Event</p>
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
                  <a href="{{route('event.create')}}" class="bg-mypink-light hover:bg-mypink-dark rounded-full p-2 px-4 font-bold text-white">
                    + Create New Event
                  </a>
                </div>

                <!-- Event List -->
                <div class="w-full shadow-xl bg-white rounded-xl my-1">
                  <div class="p-2 flex flex-row">
                    <div class="h-32 w-full rounded-lg shadow-xl m-5" style="background-image: url('https://images.unsplash.com/photo-1607962837359-5e7e89f86776?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-repeat: no-repeat; background-size: cover;"></div>
                    <div class="w-full m-5">
                      <h1 class="text-xl">Running Activity</h1>
                      <p class="text-sm text-gray-600">By Thomas Adison</p>
                      <div class="my-5 flex flex-row items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                          <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        <div>
                          <p class="mx-3 font-normal">07/08/2023 - 11.00 AM</p>
                        </div>
                      </div>
                    </div>
                    <div class="w-full m-5 flex flex-col justify-between items-center">
                      <div class="flex flex-row justify-center items-center">
                        <p class="text-base text-gray-600">Status:</p>
                        <div class="rounded-full w-4 h-4 bg-red-500 ml-4"></div>
                      </div>
                        <a href="{{route('event.index')}}" class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 mt-4 rounded-full cursor-pointer">See More</a>
                    </div>
                  </div>
                </div>

                <div class="w-full shadow-xl bg-white rounded-xl my-1">
                  <div class="p-2 flex flex-row">
                    <div class="h-32 w-full rounded-lg shadow-xl m-5" style="background-image: url('https://images.unsplash.com/photo-1607962837359-5e7e89f86776?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-repeat: no-repeat; background-size: cover;"></div>
                    <div class="w-full m-5">
                      <h1 class="text-xl">Running Activity</h1>
                      <p class="text-sm text-gray-600">By Thomas Adison</p>
                      <div class="my-5 flex flex-row items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                          <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        <div>
                          <p class="mx-3 font-normal">07/08/2023 - 11.00 AM</p>
                        </div>
                      </div>
                    </div>
                    <div class="w-full m-5 flex flex-col justify-between items-center">
                      <div class="flex flex-row justify-center items-center">
                        <p class="text-base text-gray-600">Status:</p>
                        <div class="rounded-full w-4 h-4 bg-red-500 ml-4"></div>
                      </div>
                        <a href="{{route('event.index')}}" class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 mt-4 rounded-full cursor-pointer">See More</a>
                    </div>
                  </div>
                </div>

                <div class="w-full shadow-xl bg-white rounded-xl my-1">
                  <div class="p-2 flex flex-row">
                    <div class="h-32 w-full rounded-lg shadow-xl m-5" style="background-image: url('https://images.unsplash.com/photo-1607962837359-5e7e89f86776?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-repeat: no-repeat; background-size: cover;"></div>
                    <div class="w-full m-5">
                      <h1 class="text-xl">Running Activity</h1>
                      <p class="text-sm text-gray-600">By Thomas Adison</p>
                      <div class="my-5 flex flex-row items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                          <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        <div>
                          <p class="mx-3 font-normal">07/08/2023 - 11.00 AM</p>
                        </div>
                      </div>
                    </div>
                    <div class="w-full m-5 flex flex-col justify-between items-center">
                      <div class="flex flex-row justify-center items-center">
                        <p class="text-base text-gray-600">Status:</p>
                        <div class="rounded-full w-4 h-4 bg-red-500 ml-4"></div>
                      </div>
                        <a href="{{route('event.index')}}" class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 mt-4 rounded-full cursor-pointer">See More</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
@endsection