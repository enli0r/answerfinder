<div>
    
    <div class="text-center">
        <h4 class="text-lg font-bold mb-1">Ask a question</h4>
        <p class="text-xs mb-6">Find the answer you are looking for!</p>
    </div>

    @auth
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
    @endauth

    @guest
        <div class="flex justify-center gap-3 text-center">
            <a href="{{ route('login') }}" class="bg-blue-500 text-white text-md font-semibold pointer rounded-xl px-4 py-3 flex-1">Log in</a>
            <a href="{{ route('register') }}" class="bg-gray-300 text-black text-md font-semibold pointer rounded-xl px-4 py-3 flex-1">Register</a>
        </div>
    @endguest
    
</div>
