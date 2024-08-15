<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NormalUsers extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
