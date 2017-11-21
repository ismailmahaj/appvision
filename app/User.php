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
    protected function interet(){
        return $this->hasManyThrough(Interet::class, 
                                     User_interet::class,
                                     'interet_id',  // Foreign key on users table...
                                     'user_interet_id',  // Foreign key on users_interet table...
                                     'id', // Local key on user table...
                                     'id' // Local key on interet table...
                                    );
    }
}
