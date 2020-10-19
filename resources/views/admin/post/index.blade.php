@extends('layouts.app')

@section('content')
    <div class="flex justify-end py-2">
        <a href="{{ route('post.create') }}" class="bg-gray-300 rounded-full py-3 px-2">
            <i stroke="#2c5282" stroke-width="2" height="16" data-feather="plus"></i>
        </a>
    </div>

    <table class="w-full">
        <thead class="text-blue-800 text-md font-semibold font-poppins">
            <tr>
                <th class="py-4">No</th>
                <th class="text-left py-4">Title</th>
                <th class="py-4">Created at</th>
                <th class="py-4">Action</th>
            </tr>
        </thead>

        <tbody class="text-gray-700 text-sm font-medium font-poppins">
            @foreach ($posts as $key => $post)
                <tr>
                    <td class="text-center py-2">{{ $key + 1 }}</td>
                    <td class="py-2">{{ $post->title }} <br> <span class="text-blue-800">{{ $post->slug }}</span></td>
                    <td class="text-center py-2">{{ $post->created_at->diffForHumans() }}</td>
                    <td>
                        <div class="flex justify-center">
                            <a href="{{ route('post.show', $post->slug) }}" class="bg-gray-300 rounded-full py-3 px-2 mr-2">
                                <i stroke="#2c5282" stroke-width="2" height="16" data-feather="eye"></i>
                            </a>

                            <a href="{{ route('post.edit', $post->slug) }}" class="bg-gray-300 rounded-full py-3 px-2 mr-2">
                                <i stroke="#2c5282" stroke-width="2" height="16" data-feather="edit-2"></i>
                            </a>
                            
                            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('delete')

                                <button type="submit" class="bg-gray-300 rounded-full py-3 px-2">
                                    <i stroke="#2c5282" stroke-width="2" height="16" data-feather="trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
