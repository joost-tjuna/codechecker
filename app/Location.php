<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'place','zipcode', 'address','housenumber', 'ticketAmount',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
