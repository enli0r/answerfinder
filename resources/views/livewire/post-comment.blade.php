<div
    x-data="{editClosed:true, isOpen:false, commentDelete:false, showMore:false}"
>
    <div class="comment relative rounded-xl bg-white text-black p-5 mb-6 smMin:ml-24">
        <div class="flex flex-col gap-5">

            <div class="flex gap-5 sm:gap-3">
                {{-- vote button and vote count --}}
                <div class="flex flex-col items-center justify-center mt-auto mb-auto rounded-xl">
                    <p class="text-center mb-4 mt-1"><span class="block font-semibold text-xl mb-0 @if($hasVoted) text-blue-500 @endif">{{ $votescount }}</span><span class="text-sm text-gray-500">Votes</span></p>

                    @if($hasVoted)
                        <button wire:click='vote()' class="bg-blue-500 text-white font-semibold uppercase text-xs rounded-md px-5 py-3 sm:px-4 sm:py-2">Vote</button>
                    @else
                        <button wire:click='vote()' class="bg-gray-200 text-black font-semibold uppercase text-xs rounded-md px-5 py-3 sm:px-4 sm:py-2">Vote</button>
                    @endif
                </div>
                {{-- end of voting --}}
                <div class="h-auto bg-gray-100" style="width: 2px"></div>

                {{-- comment + user info --}}
                <div x-show="editClosed" class="w-full flex flex-col">

                    <div class="flex gap-3 items-center mb-3 flex-wrap">
                        <img src="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-27.jpg" alt=""
                        class="block h-8 w-8 rounded-lg hover:cursor-pointer">

                        <div>
                            <p class="block text-sm text-blue-500 font-semibold">{{ $comment->user->name }}</p>
                            <p class="block text-xs text-gray-400 font-semibold">{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                        
                    </div>

                    <div class="mb-8">
                        <p class="@if(str_word_count($comment->body) <= 1) break-all @endif">{{ $comment->body }}</p>
                    </div>

                    <div class="flex justify-between items-center mt-auto relative self-end">

                        @if ($comment->user == auth()->user())
                            <div x-show="editClosed" x-data= class="flex justify-between gap-4">

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
                                        @click="
                                        isOpen=true
                                        editClosed=false
                                        "
                                    class="hover:bg-gray-200 hover:cursor-pointer py-2 px-3 font-semibold" href="">Edit</p>
                                    <p
                                        @click=
                                        "
                                        editClosed=false
                                        commentDelete=true
                                        "
                                    class="hover:bg-gray-200 hover:cursor-pointer  py-2 px-3 font-semibold" href="">Delete</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                {{-- end of comment info --}}

                <livewire:edit-comment :key="$comment->id" :comment='$comment'/>
                <livewire:comment-delete-popup :comment='$comment' />
            </div>
        </div>
    
    </div>
</div>

