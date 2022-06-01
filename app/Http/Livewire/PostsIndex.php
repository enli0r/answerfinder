<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.posts-index', [
            'posts' => Post::orderBy('created_at', 'DESC')->paginate(5),
        ]);
    }
}
