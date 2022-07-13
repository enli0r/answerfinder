<div id="post-{{ $post->id }}" class="post-container w-full rounded-xl bg-white mb-6 p-5 flex gap-8 hover:shadow-card hover:cursor-pointer">

    <div class="flex flex-col gap-2 items-center justify-start shrink-0">
        <img src="https://d.newsweek.com/en/full/2060277/donald-trump.jpg?w=1600&h=1600&q=88&f=516806e889367f6445652628237ee214" alt=""
        class="block rounded-xl h-16 w-14" style="">
    </div>
    

    <div class="w-full">
        <a id="post-{{ $post->id }}-link" class="block font-bold text-base mb-3" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        <p class="mb-10 line-clamp-3 @if(str_word_count($post->description) <= 1) break-all @endif hover:cursor-text">{{ $post->description  }}</p>

        <div class="flex justify-between items-center relative">
            <div class="flex gap-3 items-center">
                <p class="block text-xs font-semibold hover:cursor-text text-blue-500">{{ $post->user->name }}</p>
                <p class="text-gray-600 hover:cursor-text" style="font-size: 10px;">&#9670</p>
                <p class="block text-xs text-gray-400 font-semibold hover:cursor-text">{{ $post->created_at->diffForHumans() }}</p>
                <p class="text-gray-600 hover:cursor-text" style="font-size: 10px;">&#9670</p>
                <p class="block text-xs text-gray-400 font-semibold hover:cursor-text">{{ $post->comments->count() }} comments</p>
            </div>



            {{-- Edit and delete buttons on index page --}}
            {{-- @if ($post->user == auth()->user())
                <div
                x-data='{visible:false}'
                @click="visible= !visible"
                @click.away="visible = false"
                >
                    <div class="flex items-center bg-gray-100 rounded-full hover:cursor-pointer hover:bg-gray-200 transition hover:text-gray-500 text-gray-400">
                        <i class="fa-solid fa-ellipsis  px-3" style="font-size: 20px;"></i>
                    </div>

                    <div
                    x-cloak
                    x-show="visible"  
                    class="absolute bg-white text-black rounded-xl z-50 border shadow-dialog w-28" style="bottom: -90px; right: -110px; ">
                        <button class="py-2 block mt-2 text-sm hover:bg-gray-100 w-full text-left pl-5">Edit</button>
                        <button wire:click.prevent="deletePost()" class="py-2 block mb-2 text-sm hover:bg-gray-100 w-full text-left pl-5">Delete</button>
                    </div>
                </div>
            @endif --}}
        </div>
    </div>
    
</div>
