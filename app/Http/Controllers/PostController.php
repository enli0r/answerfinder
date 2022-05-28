<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class PostController extends Controller
{
    use WithPagination;

    public function index(){
        return view('posts.index')->with([
            'posts' => Post::paginate(5),
        ]);
    }
}
