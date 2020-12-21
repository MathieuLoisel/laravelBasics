@extends('layouts.layout')
@section('content')
    <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf

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
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="remember"
                        value="{{ old('remember') ? 'checked' : '' }}">

                <label class="form-check-label" for="remember">
                    Remember me
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
@endsection