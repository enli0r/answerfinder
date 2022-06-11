<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post;
    public $comments;

    public function mount(Post $post, $comments){
        $this->post = $post;
        $this->comments = $comments;
    }

    public function render()
    {
        return view('livewire.post-show');
    }
}
