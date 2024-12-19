<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'allprojects';

    protected $fillable = [
        'name',
        'description',
        'image',
        'is_active'
    ];
}