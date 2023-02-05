<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function santa()
    {
        return $this->hasOne(Santa::class, 'id', 'id');
    }
}
