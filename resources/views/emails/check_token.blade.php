@extends('master')
@section('content')
    <div class="recommend register">
        <form action="{{ route('check_token') }}" method="POST">
            @csrf
            <h3>Nhập mã xác thực</h3>
            <div class="form-group">
                <input class="form-control" type="text" name="token" placeholder="Mã xác thực">
                @error('token')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-warning form-control" type="submit">Continue</button>
            </div>
        </form>
    </div>
@endsection
