<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Repositories\PostBannerRepository;

class PostController extends Controller
{

    protected $postBannerRepository;

    public function __construct(PostBannerRepository $postBannerRepository)
    {
        $this->postBannerRepository = $postBannerRepository;
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts', compact('posts'));
    }
    public function showPost($id)
    {
    $post = Post::find($id);
    $post->text = $this->preparePostContent($post->text, $id);
    return view('post', compact('post'));
    }

    protected function preparePostContent($text, $postId)
    {
        $banners = $this->postBannerRepository->getActiveBannersByPostId($postId);

        $paragraphs = explode('</p>', $text);

        if (end($paragraphs) === '') {
            array_pop($paragraphs);
        }

        if (isset($banners[0])) {
            array_splice($paragraphs, 1, 0, view('banner', ['banner' => $banners[0]])->render());
        }
        if (isset($banners[1]) && count($paragraphs) > 1) {
            array_splice($paragraphs, -1, 0, view('banner', ['banner' => $banners[1]])->render());
        }

        $text = implode('</p>', $paragraphs);
        
        return $text;
    }

}
