@extends('layouts.main')

@section('content')

<div class="mt-4 w-full">
    <h1 class="text-2xl font-medium text-center text-black">Settings</h1>
    <div class="border-b border-gray-400 mt-4"></div>
    <div class="mx-6 my-4 flex flex-col justify-center">
        <!-- INSERT HERE!!! -->
        <div class="w-full">
            <div class="w-full flex flex-col items-center justify-center my-4">
                <div>
                    <p class="text-xl text-gray-600">Your Avatar</p>
                </div>
                <div class="w-32 h-32 rounded-full bg-black my-4 border-2 border-mypink-light shadow-lg rounded-full">

                </div>
                <div>
                    <button class="col-span-1 bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Edit Picture</button>
                </div>
            </div>
            <form action="" class="w-full flex flex-col items-center justify-center">
                <div class="w-2/4">
                    <p>Your Name</p>
                    <input type="text" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>
                <div class="w-2/4">
                    <p>Phone Number</p>
                    <input type="text" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>
                <div class="w-2/4">
                    <p>Old Password</p>
                    <input type="text" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>
                <div class="w-2/4">
                    <p>New Password</p>
                    <input type="password" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>
                <div class="w-2/4">
                    <p>Confirm New Password</p>
                    <input type="password" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>
                <div class="mt-4">
                    <button class="col-span-1 bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Save Changes</button>
                </div>
            </form>
            <form action="{{ route('settings.update',[Auth::user()->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="fullname" class="block mb-2 font-bold text-gray-600">Artist Name</label>
                    <input type="text" id="fullname" name="fullname" autocomplete = "off" 
                    value="{{$user->fullname}}"
                    placeholder="Put in artist name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                </div>

                <button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
            </form>
        </div>

        <div class="grid grid-cols-3 gap-4 content-center w-full mb-5 mx-6 mt-5">
            <a href="{{ route('dashboard.index') }}" class="col-span-1 justify-self-start">< Back</a>
        </div>
    </div>
</div>

@endsection