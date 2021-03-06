<?php

namespace App\Http\Livewire;

use App\Models\Vote;
use App\Models\Comment;
use Livewire\Component;

class CommentDeletePopup extends Component
{
    public $comment;

    public function mount(Comment $comment){
        $this->comment = $comment;
    }

    public function deleteComment(){
        //Deleting all the votes for that comment
        foreach(Vote::all() as $vote){
            if($vote->comment_id == $this->comment->id){
                $vote->delete();
            }
        }

        $this->comment->delete();

        $this->emit('commentWasDeleted', 'Comment was successfully deleted!');
    }

    public function render()
    {
        return view('livewire.comment-delete-popup');
    }
}
