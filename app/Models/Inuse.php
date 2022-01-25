<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inuse extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'thing_id', 'place_id', 'user_id', 'amount'
      ];
}
