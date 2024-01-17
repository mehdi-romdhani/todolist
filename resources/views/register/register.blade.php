@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="flex h-screen bg-indigo-700">
    <div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">
        <div>
            <img class="w-20 mx-auto mb-5" src="https://img.icons8.com/fluent/344/year-of-tiger.png" />
        </div>
          <form action="{{route('register')}}" id="register-form" method="POST" autocomplete="off">
            @csrf
            <div>
              <label class="block mb-2 text-indigo-500" for="username">Username</label>
              <input   data-parsley-required
                    data-parsley-required-message="Please enter your username"
                    data-parsley-minlength="3"
                    data-parsley-minlength-message="Name is too short"
                    data-parsley-maxlength="20"
                    data-parsley-maxlength-message="Name is too long"
                    class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                    id="register_login"
                    type="text"
                    name="username"
                    value="{{old('username')}}">
              @error('username')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div>
                <label class="block mb-2 text-indigo-500" for="password">Password</label>
                <input
                    data-parsley-required
                    data-parsley-required-message="Please enter your password"
                    data-parsley-type="alphanum"
                    data-parsley-type-message="Password must be alphanumeric"
                    data-parsley-minlength="6"
                    data-parsley-minlength-message="Password must be atleast 6 chars long"
                    data-parsley-maxlength="10"
                    data-parsley-maxlength-message="Password must be max 10 chars long"

                    class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                    type="password"
                    name="password"
                    id="password">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>
            <div>
                <label class="block mb-2 text-indigo-500" for="password">Confirm Password</label>
                <input
                    data-parsley-required
                    data-parsley-required-message="Please re-enter your password"
                    data-parsley-equalto="#password"
                    data-parsley-equalto-message="Confirm Password must be same as Password"
                    class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                    type="password"
                    name="conf_password"
                    id="conf_password">
            </div>
            <div>
              <input class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded" type="submit">
            </div>
          </form>
          <div>
            <a class="text-indigo-700 hover:text-pink-700 text-sm float-left" href="#">Forgot Password?</a>
          </div>
        </div>
    </div>
@endsection


