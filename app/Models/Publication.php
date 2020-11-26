<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Unicodeveloper\Cloudinary\MediaAlly;

class Publication extends Model
{
    use HasFactory;


    protected $fillable = ['title','author', 'image', 'year','picture'];


    public const STATUSES = [
        'ACTIVE' => 'active',
        'INACTIVE' => 'inactive',
    ];
}
