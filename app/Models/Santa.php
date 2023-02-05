<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santa extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function recipient()
    {
        return $this->hasOne(Recipient::class, 'santa_id', 'id');
    }
}
