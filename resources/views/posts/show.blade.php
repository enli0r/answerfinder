<x-app-layout>
    <div class="back-button mb-6">
        <a href="{{ route('posts.index') }}" class="inline-block rounded-xl bg-white text-black font-semibold py-3 px-5"><i class="fa-solid fa-arrow-left mr-1"></i>
            All posts</a>
    </div>

    <livewire:post-show :post="$post"/>

    <livewire:post-comments :post="$post"/>
</x-app-layout>