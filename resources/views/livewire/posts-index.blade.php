<div>
    @if (session()->has('message'))
        <div
            x-data="{visible: true}"
            x-show="visible"

            class="flex items-center w-full px-5 py-3 mb-6 font-semibold bg-white rounded-xl" style="animation: all 0.2s linear">
                <i class="text-3xl text-green-400 fa-solid fa-circle-check"></i>
                <p class="m-auto">{{ session('message') }} </p>
                <i @click="visible = !visible" class="fa-solid fa-xmark hover:cursor-pointer"></i>
            
            
        </div>
    @endif


    {{-- order button --}}

        <div x-data='{visible:false}' class="mb-6">
            <div class="flex justify-start items-baseline mb-2">
                <p class='text-sm font-semibold text-black py-3 px-5'>Order:</p>

                <div class="relative">
                        <button @click='visible = !visible' 
                                @click.away='visible = false'
                                class="text-sm rounded-md bg-white font-semibold hover:cursor-pointer border-none py-3 px-5">
                                @if ($sortDirection == 'asc')
                                    Oldest first
                                @else
                                    Newest first
                                @endif
                                
                                <i class="fa-solid fa-angle-down ml-1"></i>
                        </button>

                        {{-- appearing menu --}}
                        <div x-cloak x-show='visible' class="mb-6 bg-white font-semibold rounded-md text-left py-1 mt-12 absolute left-0 top-0 w-full border shadow-dialog">
                            <a wire:click.prevent="sort('desc')" class="block py-2 px-5 hover:bg-gray-100 text-sm @if($sortDirection == 'desc') bg-gray-100 @endif" href="">Newest first</a>
                            <a wire:click.prevent="sort('asc')" class="block py-2 px-5 hover:bg-gray-100 text-sm @if($sortDirection == 'asc') bg-gray-100 @endif" href="">Oldest first</a>
                        </div>
                        {{-- end of appearing menu --}}

                </div>
            </div>
        </div>
    {{-- end of order button --}}

    @foreach ($posts as $post)

        <livewire:post-index :key="$post->id" :post="$post"/>

    @endforeach

    {{-- pagination --}}
    {{-- <div class="mb-5">
        {{ $posts->links() }}
    </div> --}}
    {{-- end of pagination --}}
</div>
