<div
x-cloak
x-show="editOpen"
class="w-full"
>
    <form
    class="w-full mb-5"

    wire:submit.prevent="edit" action="" method="POST">
        @csrf

        <input type="text" wire:model.defer="title" class="block w-full font-semibold mb-3 text-base border-none bg-gray-100 rounded-xl"/>
        <textarea wire:model.defer="description" class="w-full border-none bg-gray-100 rounded-lg" style="resize: none;" autofocus></textarea>
    </form>

    <div class="flex justify-center gap-4">
        <svg
        wire:click.prevent="edit()"
        xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-600 hover:cursor-pointer hover:text-green-500 transition" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>

        <svg
        @click="
        editOpen=false
        visible=true
        "
        xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-600 hover:cursor-pointer hover:text-red-500 transition" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </div>
</div>

{{-- <div>
    <!-- This example requires Tailwind CSS v2.0+ -->

    <div
    x-cloak
    x-data='{visible:false}'
    x-init="
        window.livewire.on('postWasEdited', () => {
            visible = false;
        })
    "
    @custom-show-edit-modal.window="visible=true"
    x-show="visible"
    class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!--
        Background backdrop, show/hide based on modal state.

        Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
        Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div 
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div
            class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
            <!--
                Modal panel, show/hide based on modal state.

                Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
                Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
                <div
                @click.away="visible = false"
                class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 relative">
                        <svg
                        @click="visible = false"
                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute text-gray-400 hover:text-gray-600 transition-all hover:cursor-pointer" style="top: 5px; right: 5px;" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>


                        <h3 class="text-xl text-center font-semibold">Edit post</h3>

                        <form wire:submit.prevent="edit" action="#" method="POST" class="space-y-3">
                            @csrf
                
                            <input wire:model.defer="title" type="text" class="rounded-xl border border-white bg-gray-100 text-black text-sm w-full" placeholder="Title">
                            @error('title')
                                <small class="text-red-500 font-semibold">*{{ $message }}</small>
                            @enderror 
                
                            <textarea wire:model.defer="description" type="text" class="rounded-xl border-none bg-gray-100 text-black text-sm w-full" placeholder="Description" rows="5" style="resize: none;"></textarea>
                            @error('description')
                                <small class="text-red-500 font-semibold">*{{ $message }}</small>
                            @enderror 
                
                            <div class="px-4 py-3 flex gap-3 justify-end">
                                <button @click ="visible = false" class="bg-gray-200 text-black text-md font-semibold pointer rounded-xl px-6 py-3 hover:bg-gray-100 transition">Cancel</button>

                                <button type="submit" class="bg-blue-500 text-white text-md font-semibold pointer rounded-xl px-6 py-3 float-right hover:bg-blue-400 transition">Edit</button>
                            </div>
                             
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}