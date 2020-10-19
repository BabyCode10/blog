@extends('layouts.app')

@section('content')
    <table class="w-full">
        <thead class="text-blue-800 text-md font-semibold font-poppins">
            <tr>
                <th class="py-4">User Name</th>
                <th class="text-left py-4">Website</th>
                <th class="text-left py-4">Comment Name</th>
                <th class="text-left py-4">Comment</th>
            </tr>
        </thead>

        <tbody class="text-gray-700 text-sm font-medium font-poppins">
            @foreach ($comments as $comment)
                <tr>
                    <td class="text-center py-2">{{ $comment->post->user->name }}</td>
                    <td class="py-2">{{ $comment->website }}</td>
                    <td class="py-2">{{ $comment->name }} <br> <span class="text-blue-800">{{ $comment->email }}</span></td>
                    <td class="py-2">{{ $comment->comment }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
