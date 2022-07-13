<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Vote;
use Livewire\Component;

class PostComment extends Component
{
    public $comment;
    public $hasVoted;

    public function mount(Comment $comment){
        $this->comment = $comment;
        $this->hasVoted = $comment->isVotedByUser(auth()->user()); //function in comment model
    }

    public function vote(){

        //checks if user is logged in
        if(!auth()->user()){
            return redirect()->route('login');
        }

        if(!$this->hasVoted)
        {
            $this->comment->vote(auth()->user());
            $this->hasVoted = true;
        }
        else
        {
            $this->comment->removeVote(auth()->user());
            $this->hasVoted = false;
        }
    }

    public function deleteComment(){
        //Deleting all the votes for that comment
        foreach(Vote::all() as $vote){
            if($vote->comment_id == $this->comment->id){
                $vote->delete();
            }
        }

        $this->comment->delete();

        $this->emit('commentWasDeleted');
    }

    public function render()
    {
        return view('livewire.post-comment',[
            'votescount' => $this->comment->votes()->count()
        ]);
    }
}
