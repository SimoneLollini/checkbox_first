<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjectElement extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'customer', 'status'];
}
