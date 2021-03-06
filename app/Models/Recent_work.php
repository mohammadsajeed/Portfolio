<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recent_work extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'project_name',
        'description',
        'github_link',
        'pic',
    ];

    use HasFactory;
}
