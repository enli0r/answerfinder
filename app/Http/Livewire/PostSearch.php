<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostSearch extends Component
{
    public function render()
    {
        return view('livewire.post-search', [
            'posts' => Post::all()
        ]);
    }
}
