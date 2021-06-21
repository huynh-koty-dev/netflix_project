@extends('master')
@section('content')
    <div class="recommend register">
        <form action="{{ route('reset.pass') }}" method="POST">
            @csrf
            <h3>Reset Password</h3>
            <div class="form-group">
                <input class="form-control" type="email" name="email" readonly value="{{ $user->email }}" placeholder="{{ __('trans.email_address') }}" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="reset_pass" placeholder="Nhập mật khẩu mới">
                @error('reset_pass')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="re_pass" placeholder="Nhập lại mật khẩu mới">
                @error('re_pass')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-warning form-control" type="submit">Reset</button>
            </div>
        </form>
    </div>
@endsection
