<?php

namespace App\Models;

use Netflex\Customers\Customer as Authenticatable;
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
        'firstname', 'surname', 'mail',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the full name of the user.
     *
     * @return string
     */
    public function getNameAttribute () {
        return trim("{$this->firstname} {$this->surname}");
    }
}
