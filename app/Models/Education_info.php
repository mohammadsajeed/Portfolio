<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education_info extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'degree_name',
        'degree_info'
    ];
}
