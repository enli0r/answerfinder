<div>
    <div class="w-full rounded-xl bg-white mb-6 p-5 flex gap-5">
        <div class="user-info flex flex-col">
            <img src="https://m0.her.ie/wp-content/uploads/2018/01/07093633/GettyImages-887815620.jpg" alt="rock" class="max-w-max w-16 h-16 rounded-xl mb-2">
            <p class="text-sm font-semibold text-center">{{ $post->user->name }}</p>
        </div>


        <div class="post-info">
            <a href="{{ route('posts.show', $post) }}">
                <h3 class="font-bold mb-3">{{ $post->title }}</h3>
            </a>
            <p class="mb-5">{{ $post->description }}</p>
            <small class="text-gray-400 font-semibold">{{ $post->created_at->diffForHumans() }}</small>
        </div>
        
    </div>

    <div class="comments relative">
        @foreach ($comments as $comment)
            <div class="comment relative flex gap-5 rounded-xl bg-white text-black p-5 mb-6 ml-24">

                <div class="user-info flex flex-col">
                    <img src="https://m0.her.ie/wp-content/uploads/2018/01/07093633/GettyImages-887815620.jpg" alt="rock" class="max-w-max w-16 h-16 rounded-xl mb-2">
                    <p class="text-sm font-semibold text-center">{{ $comment->user->name }}</p>
                </div>

                <div class="comment-info">                    
                    <p class="mb-5">{{ $comment->body }}</p>
                    <small class="text-gray-400 font-semibold">{{ $post->created_at->diffForHumans() }}</small>
                </div>

            </div>
        @endforeach
    </div>
    

</div>
