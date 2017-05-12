<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
            'name' => 'required|string|max:100',
            'username' => 'required|max:100|unique:users',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6|max:255|confirmed',
            'father_name' => 'required|string|max:100',
            'mother_name' => 'required|string|max:100',
            'dob' => 'required|date',
            'gender' => 'required',
            'marital_status' => 'required',
            'religion' => 'required',
            'occupation' => 'required|string|max:50',
            'occupation_details' => 'required|string|max:500',
            'educational_qualification' => 'max:500',
            'phone_number' => 'required|max:100',
            'nid' => 'string|required|max:50|unique:users',
            'passport_number' => 'max:50',
            'tin_number' => 'max:50',
            'permanent_address' => 'required|string|max:500',
            'emergency_contact' => 'max:100',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'father_name' => $data['father_name'],
            'mother_name' => $data['mother_name'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'marital_status' => $data['marital_status'],
            'religion' => $data['religion'],
            'occupation' => $data['occupation'],
            'occupation_details' => $data['occupation_details'],
            'educational_qualification' => $data['educational_qualification'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'nid' => $data['nid'],
            'passport_number' => $data['passport_number'],
            'tin_number' => $data['tin_number'],
            'permanent_address' => $data['permanent_address'],
            'emergency_contact' => $data['emergency_contact'],
            'active' => 0,
        ]);
    }
}
