<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'father_name',
        'mother_name',
        'dob',
        'gender',
        'marital_status',
        'religion',
        'occupation',
        'occupation_details',
        'educational_qualification',
        'phone_number',
        'nid',
        'passport_number',
        'tin_number',
        'permanent_address',
        'emergency_contact',
        'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
