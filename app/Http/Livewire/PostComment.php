<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Vote;
use Livewire\Component;

class PostComment extends Component
{
    public $comment;

    public function mount(Comment $comment){
        $this->comment = $comment;
    }

    public function vote(){
        $hasVoted = Vote::where('user_id', auth()->user()->id)->where('comment_id', $this->comment->id)->first();
                        
        if($hasVoted != null){
            $hasVoted->delete();
        }else{
            Vote::create([
                'user_id' => auth()->user()->id,
                'comment_id' => $this->comment->id
            ]);
        }

    }

    public function render()
    {
        return view('livewire.post-comment',[
            'votescount' => $this->comment->votes()->count()
        ]);
    }
}
