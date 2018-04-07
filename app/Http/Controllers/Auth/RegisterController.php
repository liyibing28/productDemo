<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/register';

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
            'name' => 'required|string|max:255',
            'telephone' => 'required|string|min:11',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['is_taihao'] == '公司员工'){
            $job = array(
                'cuche'=> false,
                'rechuli'=> false,
                'jingche'=>false,
                'kaidaoyi'=>true,
                'kaiding'=>true,
                'zuankong'=>true,
                'role' => 1
            );
        }
        else{
            $job = array(
                'cuche'=> true,
                'rechuli'=> true,
                'jingche'=>true,
                'kaidaoyi'=>false,
                'kaiding'=>false,
                'zuankong'=>false,
                'role' => 2
            );
        }

        $user = User::create([
            'name' => $data['name'],
            'telephone' => $data['telephone'],
            'password' => bcrypt($data['password']),
            'is_cuche' => $job['cuche'],
            'is_rechuli' => $job['rechuli'],
            'is_jingche' => $job['jingche'],
            'is_kaidaoyi' => $job['kaidaoyi'],
            'is_kaiding' => $job['kaiding'],
            'is_zuankong' => $job['zuankong'],
            'role' => $job['role'],
        ]);

        return $user;
    }
}
