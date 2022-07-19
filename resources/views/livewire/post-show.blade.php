<div 
x-data="{editOpen:false, visible:true}"
x-init="window.livewire.on('postWasEdited', () => {
    visible=true;
    editOpen=false;
})"
>
    <div class="w-full rounded-xl bg-white mb-4 p-5 flex gap-5 sm:flex-col sm:gap-3">
        
        <div class="flex flex-col gap-2 items-center justify-start shrink-0 sm:flex-row">
            <img src="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-27.jpg" alt=""
            class="block rounded-xl h-16 w-16 sm:h-8 sm:w-8 sm:rounded-lg">

            <div class="smMin:hidden">
                <p class="block text-sm text-blue-500 font-semibold">{{ $post->user->name }}</p>
                <p class="block text-xs text-gray-400 font-semibold">{{ $post->created_at->diffForHumans() }}</p>
            </div>
        </div>
    
        <div
        x-show="visible"
        class="w-full">
            <div class="mb-8 sm:mb-4">
                <a class="block font-bold mb-3 text-lg">{{ $post->title }}</a>
                <p class="sm:line-clamp-5 line-clamp-3  @if(str_word_count($post->description) <= 1) break-all @endif ">{{ $post->description }}</p>
            </div>
            
            <div class="flex justify-between items-center relative">

                <div class="flex gap-3 items-center">
                    <p class="block text-sm text-blue-500 font-semibold sm:hidden">{{ $post->user->name }}</p>
                    <p class="sm:hidden text-gray-500 font-semibold">•</p>
                    <p class="block text-xs text-gray-400 font-semibold sm:hidden">{{ $post->created_at->diffForHumans() }}</p>
                    <p class="sm:hidden text-gray-500 font-semibold">•</p>
                    <p class="block text-xs text-gray-900 font-semibold hover:cursor-text">{{ $post->comments->count() }} comments</p>     
                </div>

                @if ($post->user == auth()->user())

                    <div class="flex justify-between gap-4"
                    >
                        {{-- Edit icon --}}
                        <button 
                        @click=
                        "
                        visible=false
                        editOpen=true
                        "
                        class="rounded-lg p-1 hover:bg-gray-200 transition"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:cursor-pointer text-green-600" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        

                        {{-- delete icon --}}
                        <button 
                        @click=
                        "
                            $dispatch('custom-post-delete-popup')
                        "
                        class="rounded-md p-1 hover:bg-gray-200 transition"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:cursor-pointer text-red-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        
                    </div>

                @endif
            
                
            </div>
        </div>

        <livewire:edit-post :post="$post" />
    </div>
        
    <livewire:add-comment :post="$post"/>
</div>    

