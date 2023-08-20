<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Planner</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<div class="min-h-screen">
    <div class="w-full mx-auto h-screen flex items-center justify-center" style="background: rgb(150,1,218);
        background: linear-gradient(130deg, rgba(150,1,218,1) 0%, rgba(112,0,255,1) 50%, rgba(112,0,255,1) 100%);">
        <div class="flex flex-col w-9/12 bg-white mx-auto shadow-2xl rounded-lg">
            <div class="flex centent-center justify-between mt-10">
                <p class="w-full text-2xl font-bold text-center"> <span class="text-mypink-dark">E</span>vent <span class="text-mypurple-dark">P</span>lanner</p>
                <div class="w-full"></div>
                <p class="text-gray-600 text-center text-sm w-full">New User? <a href="{{route('register')}}" class="font-bold text-mypurple-light hover:text-mypurple-dark">Sign Up</a></p>
            </div>
            <div class="flex justify-between mx-10 my-10">
                <div class="flex justify-center rounded-lg items-center w-1/2 shadow-2xl" style="background-image: url('https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="w-1/2 mx-10 my-10">
                    <h2 class="text-3xl mb-4 font-bold">Welcome Back!</h2>
                    <p class="mb-4 text-gray-600">Please sign in to continue</p>

                    <!-- Login BOX -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div>
{{--                            <x-input-label for="email" :value="__('Email')" />--}}
                            <x-text-input id="email"
                                          class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                                          type="email" name="email" :value="old('email')"
                                          required autofocus autocomplete="username"
                                          placeholder="Enter email"
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div>
{{--                            <x-input-label for="password" :value="__('Password')" />--}}
                            <x-text-input id="password"
                                          class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                                          type="password"
                                          name="password"
                                          required autocomplete="current-password"
                                          placeholder="Enter password"
                            />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mt-4">
{{--                            @if (Route::has('password.request'))--}}
{{--                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">--}}
{{--                                    {{ __('Forgot your password?') }}--}}
{{--                                </a>--}}
{{--                            @endif--}}

                            <x-primary-button class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 mt-4 rounded-full cursor-pointer">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form>

                    <!-- ERROR MESSAGE -->
                    @error('title')
                    <div>
                        <p class="text-red-400">
                            {{$message}}
                        </p>
                    </div>
                    @enderror

{{--                    <!-- Old login button -->--}}
{{--                    <div class="mt-5">--}}
{{--                        <a href="{{ __('Log in') }}" class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 mt-4 rounded-full cursor-pointer">Sign In</a>--}}
{{--                        <!-- <a href="#" class="text-gray-600 ml-8 text-xs">FORGET PASSWORD?</a> -->--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
