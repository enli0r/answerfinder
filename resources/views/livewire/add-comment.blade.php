<div
    x-data="{visible:false}"

    x-init=
    "
        Livewire.on('commentWasAdded', () => {
            visible = false
        })
    "

    class="relative w-full">

    <div class="reply-button sm:hidden">
        <button
            @click="visible = !visible"
            class="rounded-xl bg-blue-500 text-white px-5 py-3 mb-6 hover:bg-blue-400 transition">Reply</button>
    </div>

    <div
        x-cloak
        x-show="visible"
        @click.away="visible = false"
        class="absolute top-14 left-0 z-50 w-2/3 sm:w-full">

        <div class="bg-white shadow-dialog p-5 rounded-xl">
            @auth
                <form wire:submit.prevent='addComment' action="#" method="POST">
                    @csrf
                    <textarea name="body" id="body" wire:model.difer="body" class="rounded-xl border-none bg-gray-100 w-full text-sm text-black mb-2" rows="5" name="" id="" placeholder="Tell us what you think" style="resize: none;"></textarea>
                    @error('body')
                        <small class="block text-red-500 font-semibold mb-2">*{{ $message }}</small>
                    @enderror 

                    <button class="rounded-xl bg-blue-500 text-white px-5 py-3 hover:bg-blue-400 transition" type="submit">Post comment</button>
                </form>
            @endauth

            @guest
                <p class="text-sm font-semibold mb-4">Please login to be able to comment on posts!</p>

                <div class="flex justify-center gap-3 text-center">
                    <a href="{{ route('login') }}" class="bg-blue-500 text-white text-md font-semibold pointer rounded-xl px-4 py-3 flex-1 hover:bg-blue-400">Log in</a>
                    <a href="{{ route('register') }}" class="bg-gray-200 text-black text-md font-semibold pointer rounded-xl px-4 py-3 flex-1 hover:bg-gray-100">Sign up</a>
                </div>
            @endguest
        </div> 
    </div>
        

    @guest
        
    @endguest
    
    
    
</div>
