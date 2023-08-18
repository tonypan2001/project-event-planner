@extends('layouts.main')

@section('content')
<div class="mt-4 w-full">
    <h1 class="text-2xl font-medium text-center text-black">Event</h1>
    <div class="border-b border-gray-400 mt-4"></div>
    <div class="mx-6 my-4 flex flex-col">
        <!-- INSERT HERE!!! -->


        <div id="default-carousel" class="relative w-full" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
              <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="https://images.unsplash.com/photo-1607962837359-5e7e89f86776?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="https://images.unsplash.com/photo-1603455778956-d71832eafa4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="https://images.unsplash.com/photo-1585473233369-14a97aa923df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1147&q=80" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
          </div>
          <!-- Slider indicators -->
          <div class="absolute z-30 flex space-x-2 -translate-x-1/2 bottom-5 left-1/2">
              <button type="button" class="w-8 h-1" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
              <button type="button" class="w-8 h-1" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
              <button type="button" class="w-8 h-1" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          </div>
          <!-- Slider controls -->
          <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                  </svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>
          <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
        </div>

        <div class="border-b border-gray-400 mt-6"></div>

        <div class="grid grid-cols-1 my-5">
            <div class="flex flex-row justify-center items-center py-2 my-2">
                <h1 class="text-4xl font-bold text-center w-2/3">Jogging Event</h1>
                <!-- Manage Button -->
                {{-- <div class="flex justify-end items-center border w-1/3">
                    <a class="flex justify-center items-center w-32 bg-white border border-2 border-mypurple-light hover:border-mypurple-dark text-mypurple-light hover:text-mypurple-dark text-center cursor-pointer font-bold py-2 px-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                          </svg>
                          <p class="mx-2">
                              Manage
                          </p>
                    </a>
                </div> --}}
            </div>

            <div class="grid grid-rows gap-6 mx-4">
                <div>
                    <h3 class="text-lg font-bold">About Event</h3>
                    <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae illo officiis consectetur beatae vero? Assumenda doloribus vero atque facere tempora reiciendis repudiandae quasi, dolor quae itaque! Culpa cum debitis nulla!</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold">Property</h3>
                    <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae illo officiis consectetur beatae vero? Assumenda doloribus vero atque facere tempora reiciendis repudiandae quasi, dolor quae itaque! Culpa cum debitis nulla!</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4 content-center w-full mb-5 mx-6 mt-5">
            <a href="{{ route('dashboard.index') }}" class="col-span-1 justify-self-start">< Back</a>
            <button class="col-span-1 bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Join Event</button>
            <a href="{{ route('event.manage') }}" class="col-span-1 justify-self-end">Edit ></a>
        </div>
    </div>
</div>
@endsection
