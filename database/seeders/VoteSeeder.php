<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vote;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $comments = Comment::all();

        foreach($users as $user){
            foreach($comments as $comment){
                Vote::create([
                    'user_id' => $user->id,
                    'comment_id' => $comment->id
                ]);
            }
        }
    }
}
