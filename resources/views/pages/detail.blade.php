@extends('layouts.page')

@section('content')
    <a class="rounded-full bg-gray-300 inline-block p-2 mb-2" href="{{ url()->previous() }}">
        <i class="" stroke="#a0aec0" stroke-width="2" data-feather="corner-up-left"></i>
    </a>

    <x-card>
        <x-slot name="created_at">{{ $post->created_at->diffForHumans() }}</x-slot>

        <x-slot name="title">{{ $post->title }}</x-slot>

        <x-slot name="content">{{ $post->content }}</x-slot>

        <div class="divide-y-2 divide-gray-400">
            <div class="flex justify-start py-2 mt-2">
                <div class="flex items-center">
                    <i class="mr-2" fill="#cbd5e0" stroke="#cbd5e0" stroke-width="0.5" data-feather="message-circle"></i>
                    <p class="text-gray-400 text-sm font-medium font-poppins">{{ $post->comments->count() }} Comments</p>
                </div>
            </div>

            <div class="py-2">
                @foreach ($post->comments as $comment)
                <div class="mt-3">
                    <p class="text-blue-300 text-xs font-semibold font-poppins">{{ $comment->name }}</p>
                    <p class="text-blue-800 text-sm font-medium font-poppins">{{ $comment->comment }}</p>
                    <p class="text-gray-400 text-xs font-semibold font-poppins">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
                @endforeach

                <form class="py-4" method="POST" action="{{ route('comment.store') }}">
                    @csrf

                    <input type="hidden" name="post_id" value={{ $post->id }}>

                    <div class="mb-4">
                        <input name="name" class="w-full bg-transparent border @error('name') border-red-500 @enderror rounded p-3 text-xs text-blue-800 font-semibold font-poppins" type="text" placeholder="Name" value="{{ request()->input('name') ?? old('name') }}" />
        
                        @error('name')
                            <span class="text-xs text-red-500 font-medium font-poppins" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input name="email" class="w-full bg-transparent border @error('email') border-red-500 @enderror rounded p-3 text-xs text-blue-800 font-semibold font-poppins" type="text" placeholder="Email" value="{{ request()->input('email') ?? old('email') }}" />
        
                        @error('email')
                            <span class="text-xs text-red-500 font-medium font-poppins" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input name="website" class="w-full bg-transparent border @error('website') border-red-500 @enderror rounded p-3 text-xs text-blue-800 font-semibold font-poppins" type="text" placeholder="Website" value="{{ request()->input('website') ?? old('website') }}" />
        
                        @error('website')
                            <span class="text-xs text-red-500 font-medium font-poppins" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <textarea name="comment" class="w-full bg-transparent border @error('comment') border-red-500 @enderror rounded p-3 text-xs text-blue-800 font-semibold font-poppins" type="text" placeholder="Comment...">{{ request()->input('comment') ?? old('comment') }}</textarea>
        
                        @error('comment')
                            <span class="text-xs text-red-500 font-medium font-poppins" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <button class="flex items-center bg-blue-800 text-white text-xs font-semibold font-poppins px-8 py-3 rounded-full" type="submit">
                        {{ __('Send') }}
                        <i class="ml-1" stroke="#fff" stroke-width="2" height="14" data-feather="send"></i>
                    </button>
                </form>
            </div>
        </div>
    </x-card>
@endsection
