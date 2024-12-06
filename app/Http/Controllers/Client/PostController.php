<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show list post
     *
     * @return \Illuminate\Contracts\View\View
     */
    // public function index() {
    //     $posts = Post::get();

    //     return view('client.post.index', [
    //         'posts' => $posts
    //     ]);
    // }
    public function index() {
        // Lấy 2 bài viết đầu tiên
        $postsFirst = Post::take(2)->get();

        // Lấy 3 bài viết tiếp theo
        $postsSecond = Post::skip(2)->take(3)->get();

        // Lấy 6 bài viết tiếp theo
        $postsThird = Post::skip(5)->take(6)->get();

        return view('client.post.index', [
            'postsFirst' => $postsFirst,
            'postsSecond' => $postsSecond,
            'postsThird' => $postsThird,
        ]);
    }


    /**
     * Show detail post
     *
     * @param integer $id post
     * @return \Illuminate\Contracts\View\View
     */
    public function detail ($id) {
        $post = Post::findOrFail($id);
        return view('client.post.detail', [
            'post' => $post,
        ]);
    }
}