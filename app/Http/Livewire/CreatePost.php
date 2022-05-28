<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Response;
use Illuminate\Http\Client\ResponseSequence;

class CreatePost extends Component
{
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required|min:3',
        'description' => 'required|min:50'
    ];

    public function render()
    {
        return view('livewire.create-post');
    }

    public function submit(){
        if(auth()->check()){
            $this->validate();

            Post::create([
                'user_id' => auth()->user()->id,
                'title' => $this->title,
                'description' => $this->description
            ]);

        }else{
            abort(Response::HTTP_FORBIDDEN);
        }

        return redirect()->route('posts.index');
    }
}
