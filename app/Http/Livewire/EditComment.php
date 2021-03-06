<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class EditComment extends Component
{
    public $comment;
    public $body;

    protected $rules = [
        'body' => 'required|max:255'
    ];

    public function mount(Comment $comment){
        $this->comment = $comment;
        $this->body = $comment->body;
    }

    public function editComment(){
        $this->validate();

        $this->comment->update([
            'body' => $this->body
        ]);

        $this->emit('commentWasEdited', 'Comment was successfully updated!');
    }

    public function render()
    {
        return view('livewire.edit-comment');
    }
}
