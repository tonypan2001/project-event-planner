<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="flex">
        <!-- SIDEBAR -->
        <div class="px-5 pt-4 w-1/4" style="background: rgb(150,1,218);
        background: linear-gradient(130deg, rgba(150,1,218,1) 0%, rgba(112,0,255,1) 50%, rgba(112,0,255,1) 100%);">
            <div class="flex justify-end">
                <a href="" class="text-white hover:text-mypink-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center text-center text-white mt-2">
                <h1 class="uppercase font-medium">My Account</h1>
                <div class="rounded-full bg-white w-[64px] h-[64px] m-5" style="background-image: url('https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-repeat: no-repeat; background-size: cover;"></div>
                <p class="text-base font-normal">Robert Downey Jr.</p>
                <div class="border-b border-white w-40 mt-4 mb-3"></div>
                <!-- NAVIGATE BUTTON -->
                <a href="" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                    </svg>
                    <p class="mx-2">Notifications</p>
                </a>
                <a href="" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-microsoft" viewBox="0 0 16 16">
                        <path d="M7.462 0H0v7.19h7.462V0zM16 0H8.538v7.19H16V0zM7.462 8.211H0V16h7.462V8.211zm8.538 0H8.538V16H16V8.211z"/>
                    </svg>
                    <p class="mx-2">Dashboard</p>
                </a>
                <a href="" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                        <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                      </svg>
                    <p class="mx-2">Gallery</p>
                </a>
                <a href="" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                        <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                    </svg>
                    <p class="mx-2">Upload Files</p>
                </a>
                <a href="" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                    </svg>
                    <p class="mx-2">Settings</p>
                </a>
                <a href="{{route('login')}}" class="flex flex-row justify-center items-center mt-4 p-2 font-mediu border border-2 rounded-full w-full hover:border-mypink-light hover:text-mypink-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                    <p class="mx-2">Log Out</p>
                </a>
                

            </div>
        </div>
        <!-- END SIDEBAR -->
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
                  <a href="#" class="bg-mypink-light hover:bg-mypink-dark rounded-full p-2 px-4 text-white">
                    + Create my Event
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
                        <a href="{{route('dashboard')}}" class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 mt-4 rounded-full cursor-pointer">See more</a>
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
                        <a href="{{route('dashboard')}}" class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 mt-4 rounded-full cursor-pointer">See more</a>
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
                        <a href="{{route('dashboard')}}" class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 mt-4 rounded-full cursor-pointer">See more</a>
                    </div>
                  </div>
                </div>



            </div>
        </div>
    </div>
</body>
</html>