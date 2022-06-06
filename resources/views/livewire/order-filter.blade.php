<div x-data='{visible:false}' class="">
        <div class="flex justify-start items-center mb-2">
                <p class='text-sm font-semibold text-black py-3 px-5'>Order:</p>
                <button @click='visible = !visible' class="text-sm rounded-md bg-white font-semibold hover:cursor-pointer border-none py-3 px-5">@if ($order == 'asc')
                    Oldest First
                @else
                    Newest First
                @endif<i class="fa-solid fa-angle-down ml-1"></i></button>
        </div>

        <div x-show='visible' class="mb-6">
                <div class="bg-white w-32 rounded-xl text-center py-1">
                        <a wire:click.prevent="orderFilter('asc')" class="block py-2 hover:bg-gray-200 text-sm @if($order == 'asc') bg-gray-200 @endif" href="">Oldest first</a>
                        <a wire:click.prevent="orderFilter('desc')" class="block py-2 hover:bg-gray-200 text-sm @if($order == 'desc') bg-gray-200 @endif" href="">Newest first</a>
                </div>
                
        </div>
</div>