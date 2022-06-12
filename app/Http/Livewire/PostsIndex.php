<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    public $sortDirection = 'desc';

    protected $listeners = ['postWasCreated'];

    public function postWasCreated(){
        $this->resetPage();
    }

    public function sort($sortDirection){

        if($this->sortDirection != $sortDirection)
        {
            $this->sortDirection = $sortDirection;
        }
    }

    public function render()
    {
        return view('livewire.posts-index', [
            'posts' => Post::orderBy('created_at', $this->sortDirection)->get()
        ]);
    }
}
