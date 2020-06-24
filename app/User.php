<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasRole($role)
    {
        return ($this->role == $role);
    }


    public function authorizeRole($role)
    {
        return ($this->role == $role) ||
            abort(401, 'This action is unauthorized.');
    }

    /*Implementation Relation*/
    public function kochbuches(){
        return $this->hasMany('App\Kochbuch');
    }

    public function wochenkochplans(){
        return $this->hasOne('App\Wochenkochplan');
    }
}
