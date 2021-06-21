@extends('master')
@section('content')
    <div class="recommend register">
        <form action="{{ route('verify') }}" method="POST">
            @csrf
            <h3>Enter your Email to reset password</h3>
            <div  class="form-group">
                <input class="form-control" type="email" value="{{ old('verify_email') }}" name="verify_email" placeholder="{{ __('trans.email_address') }}">
            @error('verify_email')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            @if (session('exist') ?? null)
            <div class="alert alert-danger" role="alert">
                {{ session('exist') }}
            </div>
            @endif
            </div>
            <div class="form-group">
                <button class="btn btn-warning form-control" type="submit">Send</button>
            </div>
        </form>
    </div>
@endsection
