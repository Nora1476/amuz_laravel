@extends('layouts.app_menu')




@section('content')
    <div class="register">
        <div class="card_wrap">
            <div class="card">
                <a href="#"><img src={{ asset('img/logo.svg') }} alt=""></a>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input_data">
                        <label for="name" class="label_name">{{ __('이름') }}</label>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name"
                            placeholder="이름을 입력해 주세요" onfocus="this.placeholder=''" onblur="this.placeholder='이름을 입력해 주세요'">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input_data">
                        <label for="user_id" class="label_id">{{ __('아이디') }}</label>

                        <input id="user_id" type="text" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('user_id') }}" required autocomplete="off"
                            placeholder="8자 이상, 영문 혹은 영문과 숫자조합" onfocus="this.placeholder=''"
                            onblur="this.placeholder='8자 이상, 영문 혹은 영문과 숫자조합'">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input_data">
                        <label for="password" class="label_pw1">{{ __('비밀번호') }}</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password" placeholder="비밀번호를 입력해 주세요"
                            onfocus="this.placeholder=''" onblur="this.placeholder='비밀번호를 입력해 주세요'">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input_data">
                        <label for="password-confirm" class="label_pw2">{{ __('비밀번호 확인') }}</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="비밀번호를 입력해 주세요" onfocus="this.placeholder=''"
                            onblur="this.placeholder='비밀번호를 입력해 주세요'">
                    </div>

                    <div class="chk_data">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agree" id="agree">

                            <label class="form-check-label" for="agree">
                                {{ __('모든 약관에 동의합니다.') }}
                            </label>
                        </div>
                    </div>

                    <div class="btn_wrap">
                        <button type="submit" class="btn btn-primary">
                            {{ __('가입하기') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
