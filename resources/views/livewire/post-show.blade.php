<div 
x-data="{editOpen:false, visible:true, showMore:false}"
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

                    <div class="flex justify-between gap-4">
                        <button 
                        @click="showMore=!showMore"

                        class="bg-gray-100 border rounded-full flex justify-between gap-1" style="padding: 7px 10px;">

                        <svg style="width: 5px; height: 5px;" class="text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 31.955 31.955">
                            
                            <path d="M27.25,4.655C20.996-1.571,10.88-1.546,4.656,4.706C-1.571,10.96-1.548,21.076,4.705,27.3
                            c6.256,6.226,16.374,6.203,22.597-0.051C33.526,20.995,33.505,10.878,27.25,4.655z"/>
                                
                        </svg>

                        <svg style="width: 5px; height: 5px;" class="text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 31.955 31.955">
                            
                            <path d="M27.25,4.655C20.996-1.571,10.88-1.546,4.656,4.706C-1.571,10.96-1.548,21.076,4.705,27.3
                            c6.256,6.226,16.374,6.203,22.597-0.051C33.526,20.995,33.505,10.878,27.25,4.655z"/>
                                
                        </svg>

                        <svg style="width: 5px; height: 5px;" class="text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 31.955 31.955">
                            
                            <path d="M27.25,4.655C20.996-1.571,10.88-1.546,4.656,4.706C-1.571,10.96-1.548,21.076,4.705,27.3
                            c6.256,6.226,16.374,6.203,22.597-0.051C33.526,20.995,33.505,10.878,27.25,4.655z"/>
                                
                        </svg>
                    </button>

                    <div 
                        x-show="showMore"
                        @click.away="showMore=false"
                        class="absolute bottom-0 right-0 w-24 rounded-xl bg-white shadow-dialog flex flex-col py-2 -mr-24 -mb-24 z-50">
                            <p
                                @click=
                                "
                                visible=false
                                editOpen=true
                                "
                            class="hover:bg-gray-200 hover:cursor-pointer py-2 px-3 font-semibold" href="">Edit</p>
                            <p
                            @click=
                                "
                                showMore=false
                                $dispatch('custom-post-delete-popup')
                                "
                            class="hover:bg-gray-200 hover:cursor-pointer  py-2 px-3 font-semibold" href="">Delete</p>
                    </div>
                        
                    </div>

                @endif
            
                
            </div>
        </div>

        <livewire:edit-post :post="$post" />
    </div>
        
    <livewire:add-comment :post="$post"/>
</div>    

