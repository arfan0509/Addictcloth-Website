<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTable extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'email',
    ];
}
