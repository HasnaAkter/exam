<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['title', 'description', 'image', 'tag'];
    use HasFactory;
}
