<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'min:8', 'max:255', 'unique:users', 'regex:/^[A-Za-z\d]+$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^[A-Za-z\d]+$/'],
        ], [
            'user_id.min' => '아이디는 8자 이상 영문조합이어야 합니다.',
            'user_id.unique' => '이미 존재하는 아이디 입니다.',
            'email.email' => '이메일 형식에 맞게 입력해 주세요.',
            'password.confirmed' => '비밀번호가 일치하지 않습니다. ',
            'password.regex' => '비밀번호는 8자리 이상 영문조합이어야 합니다. ',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'user_id' => $data['user_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
