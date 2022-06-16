<div class="comment relative rounded-xl bg-white text-black p-5 mb-6 ml-24">
    <div class="flex gap-5">
        {{-- vote button and vote count --}}
        <div class="flex flex-col items-center justify-center mt-auto mb-auto">
            <p class="text-center mb-3"><span class="block font-semibold text-xl mb-0">{{ $votescount }}</span><span class="text-sm text-gray-500">Votes</span></p>
            <button wire:click='vote()' class="bg-gray-200 text-black font-semibold uppercase text-xs rounded-md px-5 py-3">Vote</button>
        </div>
        {{-- end of voting --}}

        {{-- comment info --}}
        <div class="flex flex-col  w-full">
            <div class="comment-info">                    
                <p class="mb-5">{{ $comment->body }}</p>
            </div>

            <div class="flex justify-between items-center mt-auto">
                <div>
                    <p class="block text-xs text-gray-400 font-semibold">{{ $comment->created_at->diffForHumans() }}</p>
                </div>

                <div class="user-info flex gap-2 items-center">
                    <p class="inline text-xs font-semibold text-center">{{ $comment->user->name }}</p>
                    <img src="https://m0.her.ie/wp-content/uploads/2018/01/07093633/GettyImages-887815620.jpg" alt="rock" class="w-6 h-6 rounded-full">
                </div>
            </div>
        </div>
        {{-- end of comment info --}}
    </div>
</div>
