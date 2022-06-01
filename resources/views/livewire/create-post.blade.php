<div>
    <form wire:submit.prevent="submit" action="#" method="POST" class="space-y-3">
        @csrf

        <input wire:model.defer="title" type="text" class="rounded-xl border border-white bg-gray-100 text-black text-sm w-full" placeholder="Title">
        @error('title')
            <small class="text-red-500 font-semibold">*{{ $message }}</small>
        @enderror 

        <textarea wire:model.defer="description" type="text" class="rounded-xl border-none bg-gray-100 text-black text-sm w-full" placeholder="Description" rows="5" style="resize: none;"></textarea>
        @error('description')
            <small class="text-red-500 font-semibold">*{{ $message }}</small>
        @enderror 

        <button type="submit" class="bg-blue-500 text-white text-md font-semibold pointer rounded-xl px-4 py-3 float-right">Submit</button>
    </form>
</div>
