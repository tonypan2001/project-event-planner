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
        <div class="w-full mx-auto h-full flex justify-center items-center" style="background: rgb(150,1,218);
        background: linear-gradient(130deg, rgba(150,1,218,1) 0%, rgba(112,0,255,1) 50%, rgba(112,0,255,1) 100%);">
            <div class="flex flex-col w-8/12 bg-white mt-16 mb-16 mx-auto shadow-2xl overflow-hidden rounded-lg">
                <div class="flex centent-center justify-between mt-10">
                    <p class="w-full text-2xl font-bold text-center"> <span class="text-mypink-dark">E</span>vent <span class="text-mypurple-dark">P</span>lanner</p>
                    <div class="w-full">
                        <h1 class="w-full text-center text-2xl font-bold">Sign Up</h1>
                        <p class="text-center text-gray-600">Fill up your information</p>
                    </div>
                    <div class="w-full"></div>
                    </div>
                    <div class="mx-10 my-4 w-auto flex justify-center flex-col items-center">
                        <!-- register box -->
                        <form method="POST" action="{{ route('register') }}"  class="m-10 w-2/3">
                          @csrf
                            <div>
                            <div>
                            <label >Fullname</label>
                            <x-text-input id="fullname"
                                          class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                                          name="fullname" type="text" :value="old('fullname')"
                                          placeholder="Full Name"
                            />
                            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                        </div><div>
                        <label >Username</label>
                            <x-text-input id="username"
                                          class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                                          name="username" type="text" :value="old('username')"
                                          placeholder="Username"
                            />
                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div><div>
                        <label >Email</label>
                            <x-text-input id="email"
                                          class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                                          name="email" type="email" :value="old('email')"
                                          placeholder="Email"
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div><div>
                            <label >Phone number</label>
                            <x-text-input id="phone_num"
                                          class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                                          name="phone_num" type="text" :value="old('phone_num')"
                                          placeholder="Phone number"
                            />
                            <x-input-error :messages="$errors->get('phone_num')" class="mt-2" />
                        </div><div>
                        <label >Password</label>
                            <x-text-input id="password"
                                          class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                                          name="password" type="password" 
                                          placeholder="Password"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div><div>
                        <label >Password Confirmation</label>
                            <x-text-input id="password_confirmation"
                                          class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                                          name="password_confirmation" type="password" 
                                          placeholder="Confirm password"
                            />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div><div>
                        <label >Age</label>
                            <x-text-input id="age"
                                          class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                                          name="age" type="text" :value="old('age')"
                                          placeholder="Age"
                            />
                            <x-input-error :messages="$errors->get('age')" class="mt-2" />
                        </div>
                                <!-- <input type="text" placeholder="Full Name" class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                <input type="text" placeholder="Username" class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                <input type="text" placeholder="Email" class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                <input type="text" placeholder="Phone Number" class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                <input type="text" placeholder="Password" class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                <input type="text" placeholder="Confirm Password" class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                                <input type="text" placeholder="Age" class="border border-gray-400 py-1 px-2 rounded w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">

                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="focus:ring-2 text-gray-500 focus:border-none focus:outline-none focus:ring-mypink-light rounded border border-gray-400 py-1 px-2 w-full h-12 my-2 text-base text-center inline-flex items-center" type="button">Campus <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                  </svg></button>
                                 Dropdown menu 
                                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                      <li>
                                        <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bangkhen</a>
                                      </li>
                                      <li>
                                        <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kamphaeng Saen</a>
                                      </li>
                                      <li>
                                        <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Chaloem Phra Kiat Sakon Nakhon</a>
                                      </li>
                                      <li>
                                        <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sriracha</a>
                                      </li>
                                      <li>
                                        <a href="#" class="block w-auto px-10 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Suphan Buri</a>
                                      </li>
                                    </ul>
                                </div> -->
                                
                            </div>
                            <x-primary-button class="bg-mypink-light hover:bg-mypink-dark text-white font-bold py-3 px-15 mt-4 rounded-full cursor-pointer">
                              {{ __('Sign up') }}
                            </x-primary-button>

                        </form>
                        <div class="flex content-center justify-between w-full mb-5">
                            <a href="{{route('login')}}" class="w-full">< Back</a>
                            
                            <div class="w-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>