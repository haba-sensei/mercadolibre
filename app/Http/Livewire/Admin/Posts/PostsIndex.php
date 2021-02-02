<?php

namespace App\Http\Livewire\Admin\Posts;
use App\Models\Post;

use Livewire\Component;

class PostsIndex extends Component
{
    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)->paginate();
        return view('livewire.admin.posts.posts-index', compact('posts'));
    }
}
