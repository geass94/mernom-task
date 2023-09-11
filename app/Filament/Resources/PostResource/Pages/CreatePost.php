<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\Post;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;


    public function mutateFormDataBeforeCreate(array $data): array
    {
        if (Post::slugExists($data['slug'])) {
            $data['slug'] = Post::getIncrementedSlug($data['slug']);
        }
        return $data;
    }


}
