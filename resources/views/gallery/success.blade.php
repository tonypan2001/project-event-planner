@extends('layouts.main')
@section('content')
<div class="h-full flex justify-center items-center">
    <div class="text-center mt-4">
        <p class="text-2xl font-medium my-3">Upload Successfully</p>
        <a href="{{ route('gallery.index') }}" class="text-mypink-light hover:text-mypink-dark">Go back</a>
    </div>
</div>
@endsection
