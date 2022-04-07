<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_experience extends Model
{
    public $timestamps= false;
    protected $fillable = [
        'Job_title',
        'date_details',
        'description',
    ];
    use HasFactory;
}
