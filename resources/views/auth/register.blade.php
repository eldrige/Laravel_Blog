@extends('layouts.app')

@section('content')
<div class="flex justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg">
    <form action="{{ route('register')}}" method="post">
      @csrf
      <!-- USERNAME -->
      <div class="mb-4">
        <label for="name" class="sr-only">Name</label>
        <input type="text" name="name" id="name" placeholder="enter your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('name')}}">

        <!-- if we have an error for name -->
        @error('name')
        <div class="text-red-500 mt-2 text-small">
          {{ $message}}
        </div>

        @enderror
      </div>
      <div class="mb-4">
        <label for="username" class="sr-only">Username</label>
        <input type="text" name="username" id="username" placeholder="enter your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('username')}}">

        <!-- if we have an error for name -->
        @error('username')
        <div class="text-red-500 mt-2 text-small">
          {{ $message}}
        </div>

        @enderror
      </div>
      <!-- EMAIL -->
      <div class="mb-4">
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" placeholder="somebody@yahoo.com" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('email')}}">
        @error('email')
        <div class="text-red-500 mt-2 text-small">
          {{ $message}}
        </div>

        @enderror
      </div>
      <!-- pasword -->
      <div class="mb-4">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" placeholder="enter your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('password')}}">
        @error('password')
        <div class="text-red-500 mt-2 text-small">
          {{ $message}}
        </div>

        @enderror
      </div>
      <!-- confirm password -->
      <div class="mb-4">
        <label for="password_confirmation" class="sr-only">Confirm Password</label>
        <input type="password" name="password_confirmation" id="comfirmed" placeholder="Confirm Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
      </div>

      <div>
        <button type="submit" class="bg-blue-700 text-white px-4 py-3 rounded font-medium w-full">Register</button>
      </div>
    </form>
  </div>
</div>
@endsection