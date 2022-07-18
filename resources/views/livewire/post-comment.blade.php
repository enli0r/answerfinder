<div
    x-data="{editClosed:true, isOpen:false, commentDelete:false}"
>
    <div class="comment relative rounded-xl bg-white text-black p-5 mb-6 ml-24">
        <div class="flex gap-5">
            {{-- vote button and vote count --}}
            <div class="flex flex-col items-center justify-center mt-auto mb-auto rounded-xl">
                <p class="text-center mb-4 mt-1"><span class="block font-semibold text-xl mb-0 @if($hasVoted) text-blue-500 @endif">{{ $votescount }}</span><span class="text-sm text-gray-500">Votes</span></p>
    
                @if($hasVoted)
                    <button wire:click='vote()' class="bg-blue-500 text-white font-semibold uppercase text-xs rounded-md px-5 py-3">Vote</button>
                @else
                    <button wire:click='vote()' class="bg-gray-200 text-black font-semibold uppercase text-xs rounded-md px-5 py-3">Vote</button>
                @endif
    
    
    
            </div>
            {{-- end of voting --}}
            <div class="h-auto bg-gray-100" style="width: 2px"></div>

            {{-- comment info --}}
            <div x-show="editClosed" class="w-full ml-3 flex flex-col">
                <div class="mb-8">
                    <p class="@if(str_word_count($comment->body) <= 1) break-all @endif">{{ $comment->body }}</p>
                </div>
    
                <div class="flex justify-between items-center mt-auto relative">
                    <div class="flex gap-3 items-center">
                        <img src="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-27.jpg" alt=""
                        class="block rounded-full h-6 w-6 hover:cursor-pointer">
                        <p class="block text-xs text-gray-400 font-semibold">{{ $comment->user->name }}</p>
                        <p class="text-gray-600 hover:cursor-text" style="font-size: 10px;">&#9670</p>
                        <p class="block text-xs text-gray-400 font-semibold">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
    
                    @if ($comment->user == auth()->user())
                        <div x-show="editClosed" x-data class="flex justify-between gap-4">
                            {{-- Edit icon --}}
                            <button
                            @click="
                                isOpen=true
                                editClosed=false
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
                            editClosed=false
                            commentDelete=true
                            "
                            class="rounded-lg p-1 hover:bg-gray-200 transition"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:cursor-pointer text-red-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            
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

