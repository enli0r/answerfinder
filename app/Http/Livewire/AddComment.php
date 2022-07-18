<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Comment;
use Livewire\Component;
use Illuminate\Http\Response;

class AddComment extends Component
{
    public $post;
    public $body;

    protected $rules = [
        'body' => 'required|min:4',
    ];

    public function addComment(){
        if(auth()->guest()){
            abort(Response::HTTP_FORBIDDEN);
        }else{
            $this->validate();

            Comment::create([
                'user_id' => auth()->user()->id,
                'post_id' => $this->post->id,
                'body' => $this->body
            ]);

        }

        //resets body input field after submiting
        $this->reset('body');

        $this->emit('commentWasAdded', 'Comment was added successfully!'); 
    }


    public function mount(Post $post){
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.add-comment');
    }
}
