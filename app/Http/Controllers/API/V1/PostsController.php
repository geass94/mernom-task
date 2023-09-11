<?php

namespace App\Http\Controllers\API\V1;

use App\Filament\Resources\PostResource\Pages\CreatePost;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function getPosts(Request $request)
    {
        $posts = Post::query()->paginate($request->query('perPage', 15));
        return PostResource::collection($posts);
    }

    public function getPost(int $postId)
    {
        $post = Post::query()->findOrFail($postId);

        return PostResource::make($post);
    }

    public function create(CreatePostRequest $request)
    {
        $data = $request->validated();
        $slug = Str::slug($data['title']);
        if (Post::slugExists($slug)) {
            $slug = Post::getIncrementedSlug($slug);
        }
        $data['slug'] = $slug;
        if (array_key_exists('image', $data) && $data['image'] instanceof UploadedFile) {
            $image = $data['image'];
            $data['image'] = Post::saveImage($image);
        }
        $post = Post::query()->create($data);
        return PostResource::make($post);
    }

    public function update(int $postId, CreatePostRequest $request)
    {
        $data = $request->validated();
        $post = Post::query()->findOrFail($postId);
        $post->title = data_get($data, 'title', $post->title);
        $post->status = data_get($data, 'status', $post->status);
        $post->content = data_get($data, 'content', $post->content);
        if (array_key_exists('image', $data) && $data['image'] instanceof UploadedFile) {
            $image = $data['image'];
            $post->image = data_get($data, 'image', Post::saveImage($image));
        }

        $post->save();

        return PostResource::make($post);
    }

    public function delete(int $postId)
    {
        $post = Post::query()->findOrFail($postId);

        $deleted = $post->delete();

        return response()->json(['status' => (bool)$deleted]);
    }
}
