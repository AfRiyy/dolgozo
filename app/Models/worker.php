<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "name",
        "city",
        "birthdate",
        "salary"
    ];
}
