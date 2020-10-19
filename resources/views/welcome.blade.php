@extends('layouts.page')

@section('content')
    @foreach ($posts as $post)
        <x-post>
            <x-slot name="created_at">{{ $post->created_at->diffForHumans() }}</x-slot>

            <x-slot name="slug">{{ $post->slug }}</x-slot>

            <x-slot name="title">{{ $post->title }}</x-slot>

            <x-slot name="comments">{{ $post->comments->count() }}</x-slot>

            {{ Str::limit($post->content, 50, '...') }}
        </x-post>
    @endforeach
@endsection
