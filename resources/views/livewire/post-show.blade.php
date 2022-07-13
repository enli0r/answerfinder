<div>
    <div class="w-full rounded-xl bg-white mb-4 p-5 flex gap-8">

        <div class="flex flex-col gap-2 items-center justify-start shrink-0">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/250px-Tesla_circa_1890.jpeg" alt=""
            class="block rounded-xl h-16 w-14">
        </div>

        <div class="w-full">
            <div class="mb-10">
                <a class="block font-bold mb-3 text-base">{{ $post->title }}</a>
                <p class="line-clamp-3  @if(str_word_count($post->description) <= 1) break-all @endif ">{{ $post->description }}</p>
            </div>
            
            <div class="flex justify-between items-center relative">
                <div class="flex gap-3 items-center">
                    <p class="block text-xs text-gray-400 font-semibold">{{ $post->user->name }}</p>
                    <p class="text-gray-600" style="font-size: 10px;">&#9670</p>
                    <p class="block text-xs text-gray-400 font-semibold">{{ $post->created_at->diffForHumans() }}</p>
                    <p class="text-gray-600" style="font-size: 10px;">&#9670</p>
                    <p class="block text-xs text-gray-400 font-semibold">{{ $post->comments->count() }} comments</p>                    
                </div>
            
                @if ($post->user == auth()->user())
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
                            <button
                            {{-- creating event by the name 'custom-show-edit-modal' koji se emituje prilikom klika --}}
                            @click="$dispatch('custom-show-edit-modal')"
                            class="py-2 block mt-2 text-sm hover:bg-gray-100 w-full text-left pl-5">Edit</button>
                            <button wire:click.prevent="deletePost()" class="py-2 block mb-2 text-sm hover:bg-gray-100 w-full text-left pl-5">Delete</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>    

    <livewire:add-comment :post="$post"/>

</div>
