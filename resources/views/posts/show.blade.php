<x-app-layout>
    <div class="back-button mb-6">
        <a href="{{ url()->previous() }}" class="inline-block rounded-xl bg-white text-black font-semibold py-3 px-5"><i class="fa-solid fa-arrow-left mr-1"></i>
            Back</a>
    </div>

    <livewire:post-show :post="$post"/>


    <livewire:post-comments :post="$post"/>
</x-app-layout>