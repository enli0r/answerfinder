<div id="post-{{ $post->id }}" class="post-container w-full rounded-xl bg-white mb-6 p-5 flex gap-5 hover:shadow-card hover:cursor-pointer sm:flex-col sm:gap-3">

    <div class="flex gap-2 justify-start shrink-0 sm:items-center">
        <img src="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-27.jpg" alt=""
            class="block rounded-xl h-16 w-16 sm:h-8 sm:w-8 sm:rounded-lg">
            
            <div class="smMin:hidden flex flex-col">
                <p class="block text-sm text-blue-500 font-semibold">{{ $post->user->name }}</p>
                <p class="block text-xs text-gray-400 font-semibold">{{ $post->created_at->diffForHumans() }}</p>
            </div>
    </div>

    <div class="w-full">

        <div class="mb-8 sm:mb-4">
            <a id="post-{{ $post->id }}-link" class="block font-bold text-lg mb-3" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            <p class="line-clamp-3 sm:line-clamp-5 @if(str_word_count($post->description) <= 1) break-all @endif hover:cursor-text">{{ $post->description  }}</p>
        </div>
        

        <div class="flex justify-between items-center relative">
            <div class="flex gap-3 items-center w-full">
                <p class="block text-sm text-blue-500 font-semibold hover:cursor-text sm:hidden">{{ $post->user->name }}</p>
                <p class="sm:hidden text-gray-500 font-semibold">•</p>
                <p class="block text-xs text-gray-400 font-semibold hover:cursor-text sm:hidden">{{ $post->created_at->diffForHumans() }}</p>
                <p class="sm:hidden text-gray-500 font-semibold">•</p>
                <p class="block text-xs text-gray-900 font-semibold hover:cursor-text">{{ $post->comments->count() }} comments</p>
            </div>
        </div>
    </div>
    
</div>
