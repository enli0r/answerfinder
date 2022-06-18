<div class="comment relative rounded-xl bg-white text-black p-5 mb-6 ml-24">
    <div class="flex gap-5">
        {{-- vote button and vote count --}}
        <div class="flex flex-col items-center justify-center mt-auto mb-auto rounded-xl">
            <p class="text-center mb-8 mt-1"><span class="block font-semibold text-xl mb-0 @if($hasVoted) text-blue-500 @endif">{{ $votescount }}</span><span class="text-sm text-gray-500">Votes</span></p>

            @if($hasVoted)
                <button wire:click='vote()' class="bg-blue-500 text-white font-semibold uppercase text-xs rounded-md px-5 py-3">Vote</button>
            @else
                <button wire:click='vote()' class="bg-gray-200 text-black font-semibold uppercase text-xs rounded-md px-5 py-3">Vote</button>
            @endif



        </div>
        {{-- end of voting --}}
        <div class="h-auto bg-gray-100" style="width: 2px"></div>

        {{-- user info --}}
        {{-- <div class="shrink-0">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/250px-Tesla_circa_1890.jpeg" alt=""
            class="block rounded-xl h-16 w-14">
        </div> --}}
        {{-- end of user info --}}

        {{-- comment info --}}
        <div class="w-full ml-3 flex flex-col">
            <div class="mb-10">                    
                <p class="@if(str_word_count($comment->body) <= 1) break-all @endif">{{ $comment->body }}</p>
            </div>

            <div class="flex justify-between items-center mt-auto relative">
                <div class="flex gap-3 items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/250px-Tesla_circa_1890.jpeg" alt=""
                    class="block rounded-full h-6 w-6 hover:cursor-pointer">
                    <p class="block text-xs text-gray-400 font-semibold">{{ $comment->user->name }}</p>
                    <p class="text-gray-600 hover:cursor-text" style="font-size: 10px;">&#9670</p>
                    <p class="block text-xs text-gray-400 font-semibold">{{ $comment->created_at->diffForHumans() }}</p>
                </div>

                @if ($comment->user == auth()->user())
                    <div
                    x-data='{visible:false}'
                    @click="visible= !visible"
                    @click.away="visible = false"
                    >
                        <div class="flex items-center bg-gray-100 rounded-full hover:cursor-pointer hover:bg-gray-200 transition hover:text-gray-500 text-gray-400">
                            <i class="fa-solid fa-ellipsis  px-3" style="font-size: 20px;"></i>
                        </div>
            
                        <div 
                        x-show="visible"  
                        class="absolute bg-white text-black rounded-xl z-50 border shadow-dialog w-28" style="bottom: -90px; right: -110px; ">
                            <button class="py-2 block mt-2 text-sm hover:bg-gray-100 w-full text-left pl-5">Edit</button>
                            <button wire:click.prevent="deleteComment()" class="py-2 block mb-2 text-sm hover:bg-gray-100 w-full text-left pl-5">Delete</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        {{-- end of comment info --}}
    </div>
</div>
