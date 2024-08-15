<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credenciamento extends Model
{
    use HasFactory;

    protected $table = 'credenciamento'; // Define o nome da tabela

    protected $fillable = [
        'employee_id',
        'full_name',
        'birth_date',
        'cpf',
        'phone',
        'email',
        'password',
        'status',
    ];
}
