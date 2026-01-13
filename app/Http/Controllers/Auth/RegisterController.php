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
            'user_select' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_no' => ['required', 'string', 'max:40'],
            'dob' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'state_of_residence' => ['required', 'string'],
            'town' => ['required', 'string'],
            'street_address' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'father_name' => ['required', 'string'],
            'mother_name' => ['required', 'string'],
            'next_of_kin_name' => ['required', 'string'],
            'next_of_kin_relationship' => ['required', 'string'],
            'next_of_kin_address' => ['required', 'string'],
            'phone_no_of_next_of_kin' => ['required', 'string'],
            'language' => ['required', 'string'],
            'nin' => ['required', 'string'],
            'company_name' => ['required', 'string'],
            'office_state_of_residence' => ['required', 'string'],
            'office_town_of_residence' => ['required', 'string'],
            'office_address' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
            'user_select' => $data['user_select'],
            'email' => $data['email'],
            'phone_no' => $data['phone_no'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'nationality' => $data['nationality'],
            'state_of_residence' => $data['state_of_residence'],
            'town' => $data['town'],
            'street_address' => $data['street_address'],
            'religion' => $data['religion'],
            'father_name' => $data['father_name'],
            'mother_name' => $data['mother_name'],
            'next_of_kin_name' => $data['next_of_kin_name'],
            'next_of_kin_relationship' => $data['next_of_kin_relationship'],
            'next_of_kin_address' => $data['next_of_kin_address'],
            'phone_no_of_next_of_kin' => $data['phone_no_of_next_of_kin'],
            'language' => $data['language'],
            'nin' => $data['nin'],
            'company_name' => $data['company_name'],
            'office_state_of_residence' => $data['office_state_of_residence'],
            'office_town_of_residence' => $data['office_town_of_residence'],
            'office_address' => $data['office_address'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
