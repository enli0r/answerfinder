<div id="post-{{ $post->id }}" class="post-container w-full rounded-xl bg-white mb-6 p-5 flex gap-8 hover:shadow-card hover:cursor-pointer">

    <div class="flex flex-col gap-2 items-center justify-start">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/250px-Tesla_circa_1890.jpeg" alt=""
        class="block rounded-xl h-16 w-16">
    </div>
    

    <div class="w-full">
        <a id="post-{{ $post->id }}-link" class="block font-bold text-base mb-3" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        <p class="mb-10 line-clamp-3 @if(str_word_count($post->description) == 0) break-all @endif hover:cursor-text">{{ $post->description }}</p>

        <div class="flex justify-between items-center">
            <div class="flex gap-3 items-center">
                <p class="block text-xs text-gray-400 font-semibold hover:cursor-text">{{ $post->user->name }}</p>
                <p class="text-gray-600 hover:cursor-text" style="font-size: 10px;">&#9670</p>
                <p class="block text-xs text-gray-400 font-semibold hover:cursor-text">{{ $post->created_at->diffForHumans() }}</p>
                <p class="text-gray-600 hover:cursor-text" style="font-size: 10px;">&#9670</p>
                <p class="block text-xs text-gray-400 font-semibold hover:cursor-text">5 comments</p>
            </div>
        </div>
    </div>
    
</div>
