<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersResults extends Model
{
    use HasFactory;
    protected $fillable = [
            'code',
            'iin',
            'fio',
            'depart',
            'case',
            'result',
        ];
}
