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

        <div class="grid grid-cols-3 my-5">
          <h1 class="text-4xl font-bold">Jogging Event</h1>
          <div>
            <h3 class="text-lg font-medium">Detail</h3>
            <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae illo officiis consectetur beatae vero? Assumenda doloribus vero atque facere tempora reiciendis repudiandae quasi, dolor quae itaque! Culpa cum debitis nulla!</p>
          </div>
        </div>

        <div class="flex content-center justify-between w-full mb-5 mx-6 mt-5">
            <a href="{{route('dashboard.index')}}" class="w-full">< Back</a>
            <button class="w-full bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Join Event</button>
            <div class="w-full"></div>
        </div>
    </div>
</div> 
@endsection