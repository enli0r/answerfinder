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
        'post' => 'required|min:4',
    ];

    public function submit(){
        if(auth()->check()){
            $this->validate();

            Comment::create([
                'user_id' => auth()->user()->id,
                'post_id' => $this->post->id,
                'body' => $this->body
            ]);
        }else{
            abort(Response::HTTP_FORBIDDEN);
        }

        //resets body input field after submiting
        $this->reset('body');

        $this->emit('commentWasAdded', 'Comment added successfully!');
        
    }



    public function mount(Post $post){
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.add-comment');
    }
}
