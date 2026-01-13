<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'user_select',
        'email',
        'phone_no',
        'dob',
        'gender',
        'nationality',
        'state_of_residence',
        'town',
        'street_address',
        'religion',
        'father_name',
        'mother_name',
        'next_of_kin_name',
        'next_of_kin_relationship',
        'next_of_kin_address',
        'phone_no_of_next_of_kin',
        'language',
        'nin',
        'company_name',
        'office_state_of_residence',
        'office_address',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
