<div 
x-data="{editOpen:false, visible:true}"
x-init="window.livewire.on('postWasEdited', () => {
    visible=true;
    editOpen=false;
})"
>
    <div
    class="w-full rounded-xl bg-white mb-4 p-5 flex gap-8">

        <div class="flex flex-col gap-2 items-center justify-start shrink-0">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/250px-Tesla_circa_1890.jpeg" alt=""
            class="block rounded-xl h-16 w-14">
        </div>

        <div
        x-show="visible"
        class="w-full">
            <div class="mb-10">
                <a class="block font-semibold mb-3 text-base">{{ $post->title }}</a>
                <p class="line-clamp-3  @if(str_word_count($post->description) <= 1) break-all @endif ">{{ $post->description }}</p>
            </div>
            
            <div class="flex justify-between items-center relative">
                <div class="flex gap-3 items-center">
                    <p class="block text-xs text-blue-500 font-semibold">{{ $post->user->name }}</p>
                    <p class="text-gray-600" style="font-size: 10px;">&#9670</p>
                    <p class="block text-xs text-gray-400 font-semibold">{{ $post->created_at->diffForHumans() }}</p>
                    <p class="text-gray-600" style="font-size: 10px;">&#9670</p>
                    <p class="block text-xs text-gray-400 font-semibold">{{ $post->comments->count() }} comments</p>                    
                </div>

                @if ($post->user == auth()->user())

                    <div class="flex justify-between gap-4"
                    >
                        {{-- Edit icon --}}
                        <svg
                        @click=
                        "
                        visible=false
                        editOpen=true
                        "
                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:cursor-pointer hover:text-green-700 text-green-500 transition" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                        </svg>

                        {{-- delete icon --}}
                        <svg
                        @click=
                        "
                            $dispatch('custom-post-delete-popup')
                        "
                        $dispatch('custom-post-delete-popup')
                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:cursor-pointer hover:text-red-700 text-red-500 transition" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>

                @endif
            
                
            </div>
        </div>

        <livewire:edit-post :post="$post" />
    </div>    

    <livewire:add-comment :post="$post"/>

</div>
