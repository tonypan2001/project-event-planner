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
                <form method="POST" action="{{ route('settings.update',['user'=>$user]) }}" class="w-full flex flex-col items-center justify-center" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="w-32 h-32 rounded-full bg-black my-4 border-2 border-mypink-light shadow-lg rounded-full"
                         style="
                     @if( $user->image_user_path !== null )
                     background-image: url('{{ asset('storage/' . $user->image_user_path) }}');

                     @else
                     background-image: url('{{ asset('df_image/defaultProfile.jpg') }}');
                     /*background-image: url('https://images.unsplash.com/photo-1553501136-cb06cbffa795?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');*/
                     @endif
                     background-repeat: no-repeat;
                     background-size: cover;
                     background-position: center;">
                    </div>
                    <!-- Upload Files Form -->
                    <div class="w-auto h-56 bg-white flex flex-col justify-center">
                        <label class="ml-4 inline-block mb-2 text-gray-500 text-center">Upload Your Avatar</label>
                        <div type="file" class="mx-4 border border-4 border-dashed h-32 bg-white rounded-lg flex justify-center items-center flex-col hover:bg-gray-100 hover:border-gray-300">
                            <input type="file" id="image" name="image" class="rounded-lg border-2">
                        </div>
                    </div>
                    <!-- END -->
                <!-- fullname -->
                <div class="w-2/4">
                    <label for="fullname" >Fullname</label>
                    <input type="text" id="fullname" name="fullname" autocomplete = "off"
                    class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2"
                    value="{{$user->fullname}}"
                    placeholder="Put in fullname" >
                </div>
                <!-- phone_num -->
                <div class="w-2/4">
                    <label for="phone_num" >Phone number</label>
                    <input type="text" id="phone_num" name="phone_num" autocomplete = "off"
                    value="{{$user->phone_num}}"
                    placeholder="Put in phone_num" class="bg-gray-50 border border-gray-400 py-1 px-2 text-gray-900 rounded-xl w-full h-12 my-2 focus:border-none focus:ring-mypink-light focus:ring-2">
                </div>
                <div class="py-2"></div>

                <button type="submit" class="col-span-1 bg-mypink-light hover:bg-mypink-dark text-white font-bold py-2 px-10 rounded-full">Submit</button>
            </form>
        </div>

        <div class="grid grid-cols-3 gap-4 content-center w-full mb-5 mx-6 mt-5">
            <a href="{{ route('dashboard.index') }}" class="col-span-1 justify-self-start">< Back</a>
        </div>
    </div>
</div>

@endsection
