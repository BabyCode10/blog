@extends('layouts.app')

@section('content')
    <div class="flex justify-start">
        <h5 class="text-center text-2xl font-bold font-poppins text-blue-800 bg-gray-300 rounded-full px-8 py-2">Hi @auth {{ Auth::user()->name }} @endauth, Welcome Back!</h5>
    </div>
@endsection
