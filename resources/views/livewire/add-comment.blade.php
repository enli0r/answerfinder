<div
    x-data="{visible:false}"

    x-init=
    "
        Livewire.on('commentWasAdded', () => {
            visible = false
        })
    "

    class="relative w-full">

    <div class="reply-button">
        <button
            @click="visible = !visible"
            class="rounded-xl bg-blue-500 text-white px-5 py-3 mb-6">Reply</button>
    </div>

    <style>
        [x-cloak] {display: none}
    </style>

    <div
        x-cloak
        x-show="visible"
        @click.away="visible = false"
        class="absolute top-14 left-0 z-50 w-2/3">

        <form wire:submit.prevent='submit' action="#" method="POST" class="bg-white shadow-2xl p-5 rounded-xl">
            @csrf
            <textarea wire:model.difer="body" class="rounded-xl border-none bg-gray-100 w-full text-sm text-black mb-2" rows="5" name="" id="" placeholder="Tell us what you think" style="resize: none;"></textarea>
    
            <button class="rounded-xl bg-blue-500 text-white px-5 py-3" type="submit">Post comment</button>
        </form>
    </div>
    
    
</div>
