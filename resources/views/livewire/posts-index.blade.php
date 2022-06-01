<div>
    <div class="w-175">

        {{-- @if (session()->has('message')) --}}
        
        <div
            x-data="{visible: true}"
            x-show="visible"

            class="flex items-center w-full px-5 py-3 mb-6 font-semibold bg-white rounded-xl" style="animation: all 0.2s linear">
                    {{-- {{ session('message') }}  --}}
                <i class="text-3xl text-green-400 fa-solid fa-circle-check"></i>
                <p class="m-auto">Post successfully added!</p>
                <i @click="visible = !visible" class="fa-solid fa-xmark hover:cursor-pointer"></i>
            
            
        </div>
        
        {{-- @endif --}}

        @foreach ($posts as $post)
            <x-post :title="$post->title" :description="$post->description" :username="$post->user->name" :postedbefore="$post->created_at->diffForHumans()" />
        @endforeach

        <div class="mb-5">
            {{ $posts->links() }}
        </div>
    </div>
</div>
