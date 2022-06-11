<div class="w-full rounded-xl bg-white mb-6 p-5 flex gap-5">

    <div class="post-info w-full">
        <a href="{{ route('posts.show', $post) }}">
            <h3 class="font-bold mb-3">{{ $post->title }}</h3>
        </a>
        <p class="mb-5 line-clamp-3">{{ $post->description }}</p>

        <div class="flex justify-between items-center">
            <div class="flex gap-3 items-center">
                <p class="block text-xs text-gray-400 font-semibold">{{ $post->created_at->diffForHumans() }}</p>
                <p class="text-gray-600" style="font-size: 10px;">&#9670</p>
                <p class="block text-xs text-gray-400 font-semibold">5 comments</p>
            </div>
            

            <div class="user-info flex gap-2 items-center">
                <p class="inline text-xs font-semibold">{{ $post->user->name }}</p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/250px-Tesla_circa_1890.jpeg" alt="" class="rounded-full w-6 h-6">
            </div>
        </div>

        
    </div>
    
</div>
