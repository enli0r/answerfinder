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
        if(request()->order){
            $order = request()->order;
        }else{
            $order = 'ASC';
        }

        return view('livewire.posts-index', [
            'posts' => Post::orderBy('created_at', $order)->paginate(5),
        ]);
    }
}
