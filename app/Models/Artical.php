<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    public $timestamps = false ;
    protected $fillable = [
        'title',
        'date',
        'pic',
        'category',
        'description',
    ];
    use HasFactory;
}
