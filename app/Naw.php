<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Naw extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'naw';
    protected $fillable = array(
        'firstname',
        'lastname',
        'email',

    );

}
