<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostNewComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $post = Post::take(2)->orderBy('created_at', 'DESC')->get();

        $posts = Post::skip(2)->take(3)->orderBy('created_at', 'DESC')->get();

        return view('components.post-new-component', [
            'post' => $post,
            'posts' => $posts,
        ]);
    }
}