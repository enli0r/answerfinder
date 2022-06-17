<div>
    <div class="w-full rounded-xl bg-white mb-4 p-5 flex gap-8">

        <div class="flex flex-col gap-2 items-center justify-start">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/250px-Tesla_circa_1890.jpeg" alt=""
            class="block rounded-xl h-16 w-16">
        </div>

        <div class="w-full">
            <div class="mb-10">
                <a class="block font-bold mb-3 text-base">{{ $post->title }}</a>
                <p class="line-clamp-3  @if(str_word_count($post->description) == 0) break-all @endif ">{{ $post->description }}</p>
            </div>
            
            <div class="flex justify-between items-center">
                <div class="flex gap-3 items-center">
                    <p class="block text-xs text-gray-400 font-semibold">{{ $post->user->name }}</p>
                    <p class="text-gray-600" style="font-size: 10px;">&#9670</p>
                    <p class="block text-xs text-gray-400 font-semibold">{{ $post->created_at->diffForHumans() }}</p>
                    <p class="text-gray-600" style="font-size: 10px;">&#9670</p>
                    <p class="block text-xs text-gray-400 font-semibold">5 comments</p>                    
                </div>
            
            </div>
        </div>
    </div>    

    <livewire:add-comment :post="$post"/>

</div>
