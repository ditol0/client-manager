<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class datauser extends Model
{
    protected $table = 'datauser';

    protected $fillable = [
        'name',
        'email',
        'platform',
        'server',
    ];
}