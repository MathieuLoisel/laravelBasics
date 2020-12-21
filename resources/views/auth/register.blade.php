@extends('layouts.layout')
@section('content')
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input 
                type="text" 
                value="{{ old('name') }}" 
                required 
                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" 
                name="name" 
                id="name"
                >

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input 
                type="email" 
                value="{{ old('email') }}" 
                required 
                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                name="email" 
                id="email"
                >
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input 
                type="password" 
                required 
                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                name="password" 
                id="password"
                >
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group">
            <label for="">Retyped password</label>
            <input 
                type="password" 
                required 
                class="form-control" 
                name="password_confirmation" 
                id="password_confirmation"
                >
        </div>

        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
@endsection