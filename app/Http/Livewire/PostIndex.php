<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostIndex extends Component
{
    public $post;

    public function mount(Post $post){
        $this->post = $post;
    }

    public function deletePost(){
        $this->post->delete();

        $this->emit('postWasDeleted');
    }

    public function render()
    {
        return view('livewire.post-index');
    }
}
