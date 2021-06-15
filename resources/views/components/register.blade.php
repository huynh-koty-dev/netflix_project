@extends('master')
@section('content')
    <div class="recommend register">
        <h1>{{ __('trans.register') }}</h1>
        <br>
        <form action="{{ route('register_user') }}" name="myForm" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" value="{{ $old_email ?? old('email_register') }}" class="form-control"
                    name="email_register" placeholder="{{ __('trans.email_address') }}" value="{{ old('email') }}">
                @error('email_register')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" value="{{ old('nameUser') }}" class="form-control" name="nameUser"
                    placeholder="{{ __('trans.user_name') }}" value="{{ old('email') }}">
                @error('nameUser')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="{{ __('trans.password') }}">
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repassword" placeholder="{{ __('trans.repassword') }}">
                @error('repassword')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-danger form-control">{{ __('trans.register') }}</button>
            </div>
            @if (session('error_register') ?? null)
                <div class="alert alert-danger" role="alert">
                    {{ session('error_register') }}
                </div>
            @endif
        </form>
    </div>
@endsection
