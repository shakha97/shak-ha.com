<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RssSportItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'link',
        'description',
        'image',
    ];
}

