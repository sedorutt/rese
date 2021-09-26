@extends('layouts.app')

@section('content')
<div class="header">
    <h2><a href="{{ route('menu') }}">Rese</a></h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-form-label label"><i class="fas fa-user fa-2x"></i></label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        <div class="form-group row">
                            <label for="email" class="label col-form-label"><i class="fas fa-envelope fa-2x"></i></label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group row">
                            <label for="password" class="label col-form-label"><i class="fas fa-unlock-alt fa-2x"></i></label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                         
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="label col-form-label"><i class="fas fa-check-square fa-2x"></i></i></label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password-confirm">
                       
                        </div>

                        <div>
                            <div class="justify-between">
                                <a href="{{ __('login') }}">ログイン画面へ</a>
                                <button type="submit" class="btn btn-primary" action="{{ __('Register') }}">
                                    登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style scoped>
    .card {
        margin: 100px auto ;
    }
</style>