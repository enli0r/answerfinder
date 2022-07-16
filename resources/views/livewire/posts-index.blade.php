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
            <div class="flex justify-start items-baseline mb-2 gap-3">
                <div class="relative">
                    {{-- Newest first/Oldest firstt --}}
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

                {{-- Filter button --}}
                <button class="text-sm rounded-md bg-white font-semibold hover:cursor-pointer border-none py-3 px-5">
                    Filter
                    <i class="fa-solid fa-angle-down ml-1"></i>
                </button>

                <div class="flex-1">
                    <form action="" method="POST">
                        @csrf
    
                        <div class="relative">
                            <input wire:model="search" type="search" class="rounded-lg bg-white text-black border-none text-sm py-3 pl-9 placeholder-gray-900 w-full" placeholder="Search">
    
                            <div class="absolute mr-2" style="left:10px; top:50%; transform:translateY(-50%)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- end of order button --}}

    @forelse ($posts as $post)
        <livewire:post-index :key="$post->id" :post="$post"/>
    @empty
        <div class="w-full">
            <p class="text-black">No questions were found...</p>
        </div>
    @endforelse

        

</div>
