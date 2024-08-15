<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    public function credenciamento()
    {
        return $this->hasMany(Credenciamento::class);
    }
}
