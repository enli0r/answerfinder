<x-app-layout>
    <div class="back-button mb-6">
        <a href="{{ url()->previous() }}" class="inline-block rounded-xl bg-gray-300 text-black font-semibold py-3 px-5"><i class="fa-solid fa-arrow-left mr-1"></i>
            Back</a>
    </div>

    <livewire:post-show :post="$post" :comments="$comments"/>
</x-app-layout>