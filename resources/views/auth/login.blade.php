@extends('layouts.app_menu')



@section('content')
    <div class="login">
        <div class="card_wrap">
            <div class="card">
                <a href="#"><img src={{ asset('img/logo.svg') }} alt=""></a>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input_data">
                        <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror"
                            name="user_id" value="{{ old('user_id') }}" required autofocus placeholder="아이디를 입력해주세요"
                            onfocus="this.placeholder=''" onblur="this.placeholder='아이디를 입력해주세요'">

                        @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input_data">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password"
                            placeholder="비밀번호(영문, 숫자, 특수문자 포함 8~30자)" onfocus="this.placeholder=''"
                            onblur="this.placeholder='비밀번호(영문, 숫자, 특수문자 포함 8~30자)'">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="chk_data">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember"></label>
                            <label class="form-check-label" for="remember">{{ __('아이디 저장') }}</label>
                        </div>
                        <div class="find_wrap">
                            <span class="find_id">아이디 찾기</span>
                            <span>|</span>
                            <span class="find_pw">비밀번호 찾기</span>
                        </div>
                    </div>

                    <div class="btn_wrap">
                        <button type="submit" class="btn btn-primary">
                            {{ __('로그인') }}
                        </button>

                        <div class="btn_regi">
                            <span>계정이 없으신가요?</span>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">{{ __('회원가입하기') }}</a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
