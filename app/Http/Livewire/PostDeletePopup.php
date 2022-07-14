<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Vote;
use Livewire\Component;

class PostDeletePopup extends Component
{
    public $post;

    public function mount(Post $post){
        $this->post = $post;
    }

    public function deletePost(){
        foreach($this->post->comments as $comment){
            //deleting all of the votes for that comment
            foreach(Vote::all() as $vote){
                if($comment->id == $vote->comment_id){
                    $vote->delete();
                }
            }

            //deleting the comment
            $comment->delete();
        }

        //deleting the post
        $this->post->delete();
        
        $this->emit('postWasDeleted');

        return redirect()->route('posts.index');
    }
    

    public function render()
    {
        return view('livewire.post-delete-popup');
    }
}
