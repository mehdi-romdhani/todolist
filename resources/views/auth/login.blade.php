@extends('layouts.app')
@section('title','Login')
@section('content')
    {{-- <h1>Création de mon formulaire</h1> --}}

<div class="flex h-screen bg-indigo-700">
    <div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">
        <div>
            <img class="w-20 mx-auto mb-5" src="https://img.icons8.com/fluent/344/year-of-tiger.png" />
        </div>
        <div>
            <form action="" method="POST">
                {{-- @method('POST') --}}
                @csrf
                <x-forms.label for="login">Login</x-forms.label>
                <x-forms.input-text id="login" name="username" placeholder="Enter your Login" value="{{old('login')}}"/>
                @error('username')
                    <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <x-forms.label for="password">Password</x-formes.label>
                <x-forms.input-password id="password" name="password" placeholder="Enter your password"/>
                @error('password')
                    <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input class="w-full bg-indigo-700 hover:bg-green-700 cursor-pointer text-white font-bold py-2 px-4 mb-6 rounded" type="submit" value="Login">
            </form>
        </div>
@endsection
