@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('post.store') }}">
    @csrf

    <div class="mb-4">
        <input name="title" class="w-full bg-transparent border @error('title') border-red-500 @enderror rounded p-3 text-xs text-blue-800 font-semibold font-poppins" type="text" placeholder="title" />

        @error('title')
            <span class="text-xs text-red-500 font-medium font-poppins" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-4">
        <textarea name="content" class="w-full bg-transparent border @error('content') border-red-500 @enderror rounded p-3 text-xs text-blue-800 font-semibold font-poppins" type="text" placeholder="Content..."></textarea>

        @error('content')
            <span class="text-xs text-red-500 font-medium font-poppins" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button class="flex items-center bg-blue-800 text-white text-xs font-semibold font-poppins px-8 py-3 rounded-full" type="submit">
        {{ __('Save') }}
    </button>
</form>
@endsection
