<div
x-cloak
x-show="isOpen"
@click.away="
isOpen=false
editClosed=true
"
@custom-show-comment-edit-modal.window="isOpen=true"
x-init="
    window.livewire.on('commentWasEdited', () => {
        isOpen=false;
        $dispatch('custom-close-comment-edit-modal')
    })
"


class="w-full ml-3 flex flex-col">

    <form

        wire:submit.prevent="edit" action="" method="POST" class="">
        @csrf
        <div class="mb-5">
            <textarea wire:model.defer="body" type="text" class="bg-gray-100 text-sm border-none rounded-xl w-full" style="resize: none;"></textarea>
        </div>

    </form>

    <div class="flex justify-center gap-4">
        <svg
        wire:click.prevent="editComment()"
        xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-600 hover:cursor-pointer hover:text-green-500 transition" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>

        <svg
        @click="
        isOpen=false
        editClosed=true
        "
        xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-600 hover:cursor-pointer hover:text-red-500 transition" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
    </div>
    
</div>