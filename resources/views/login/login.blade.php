@extends('layouts.app')

@section('content')
    <h1>Création de mon formulaire</h1>
    <div>
        <form action="#" style="border:1px solid black">
            @method('POST')
            @csrf
            <x-forms.label for="Login">Login</x-forms.label>
        </form>
    </div>
@endsection
