<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Vote;
use Livewire\Component;

class PostComment extends Component
{
    public $comment;
    public $hasVoted;

    protected $listeners = ['commentWasEdited'];

    public function commentWasEdited(){
        $this->comment->refresh();
    }

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

    public function render()
    {
        return view('livewire.post-comment',[
            'votescount' => $this->comment->votes()->count()
        ]);
    }
}
