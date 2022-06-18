<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post;

    public function mount(Post $post){
        $this->post = $post;
    }

    public function deletePost(){
        $this->post->delete();
        
        $this->emit('postWasDeleted');

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.post-show');
    }
}
