<div id="post-{{ $post->id }}" class="post-container w-full rounded-xl bg-white mb-6 p-5 flex gap-6 hover:shadow-card hover:cursor-pointer sm:flex-col sm:gap-3">

    <div class="flex gap-2 justify-start shrink-0 sm:items-center">
        <img src="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-27.jpg" alt=""
            class="block rounded-xl h-16 w-16 sm:h-6 sm:w-6">
            <p class="block text-xs text-blue-500 font-semibold smMin:hidden">{{ $post->user->name }}</p>
            <p class="smMin:hidden text-gray-500 font-semibold">/</p>
            <p class="block text-xs text-gray-400 font-semibold smMin:hidden">{{ $post->created_at->diffForHumans() }}</p>
    </div>

    <div class="w-full">
        <a id="post-{{ $post->id }}-link" class="block font-semibold text-lg mb-3" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        <p class="mb-8 line-clamp-3 sm:line-clamp-5 @if(str_word_count($post->description) <= 1) break-all @endif hover:cursor-text sm:mb-4">{{ $post->description  }}</p>

        <div class="flex justify-between items-center relative">
            <div class="flex gap-3 items-center w-full">
                <p class="block text-xs text-blue-500 font-semibold hover:cursor-text sm:hidden">{{ $post->user->name }}</p>
                <p class="sm:hidden text-gray-500 font-semibold">/</p>
                <p class="block text-xs text-gray-400 font-semibold hover:cursor-text sm:hidden">{{ $post->created_at->diffForHumans() }}</p>
                <p class="sm:hidden text-gray-500 font-semibold">/</p>
                <p class="block text-xs text-gray-400 font-semibold hover:cursor-text">{{ $post->comments->count() }} comments</p>
            </div>
        </div>
    </div>
    
</div>
