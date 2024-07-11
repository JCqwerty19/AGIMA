@extends('layouts.head')

@section('title')
Form
@endsection

@section('content')
<div class="container">
    <form action="{{ route('form.data') }}" method="POST">
        @csrf
        <div class="form-group"></div>

            <!-- Username input -->
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" value="{{ old('username') }}"><br>
            @error('username')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>

            <!-- Email input -->
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>

            <!-- Rating input -->
            <label for="rating">Rate us</label>
            <select name="rating" id="rating">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
            <br><br>

            <label for="comment"></label>
            <textarea name="comment" id="comment" cols="30" rows="10">{{ old('comment') }}</textarea>
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <br>

            <input type="submit" value="Send">
            <br>

            @if(session('success'))
                {{ session('message') }}
            @endif
            
        </div>
    </form>
</div>
@endsection