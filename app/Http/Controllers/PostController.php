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

        if (preg_match_all('/<p>.*?<\/p>/', $text, $matches) >= 2) {
            $text = preg_replace('/(<p>.*?<\/p>)/', '$1' . view('banner', ['banner' => $banners[0]])->render(), $text, 1);
            $text = preg_replace('/(<p>.*?<\/p>)(?!.*<p>.*?<\/p>)/', view('banner', ['banner' => $banners[1]])->render() . '$1', $text, 1);
        } else {
            foreach ($banners as $banner) {
                $text .= view('banner', ['banner' => $banner])->render();
            }
        }
        
        return $text;
    }

}
