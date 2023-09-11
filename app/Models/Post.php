<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'content', 'image'
    ];

    public static array $statuses = [
        'DRAFT' => 'Draft',
        'PUBLISHED' => 'Published',
        'MODERATION' => 'Moderation'
    ];
}
