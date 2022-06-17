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

            <div class="flex justify-between items-center mt-auto">
                <div class="flex gap-3 items-center">
                    <p class="block text-xs text-gray-400 font-semibold">{{ $comment->created_at->diffForHumans() }}</p>
                </div>

                <div class="shrink-0 flex gap-2 items-center">
                    <p class="block text-xs font-semibold">{{ $comment->user->name }}</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/250px-Tesla_circa_1890.jpeg" alt=""
                    class="block rounded-md h-6 w-6">
                </div>
                
            </div>
        </div>
        {{-- end of comment info --}}
    </div>
</div>
