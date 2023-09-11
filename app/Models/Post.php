<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'content', 'image', 'status'
    ];

    public static array $statuses = [
        'DRAFT' => 'Draft',
        'PUBLISHED' => 'Published',
        'MODERATION' => 'Moderation'
    ];

    public static function slugExists(string $slug): bool
    {
        return Post::query()->where('slug', '=', $slug)->exists();
    }

    public static function getIncrementedSlug(string $slug): string
    {
        return $slug . "-" .Post::query()->where('slug', '=', $slug)->count();
    }

    public static function saveImage(UploadedFile $image): string
    {
        $ext = $image->getClientOriginalExtension();
        $fileName = Str::random(64) . "." . $ext;
        $image->storeAs('public', $fileName);
        return $fileName;
    }
}
