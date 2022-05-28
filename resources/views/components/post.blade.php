@props(['title', 'description', 'username', 'postedbefore'])

<div class="w-full rounded-xl bg-white mb-6 p-3">
    <h3 class="font-bold mb-3">{{ $title }}</h3>
    <p class="mb-5">{{ $description }}</p>
    <small class="text-gray-400 font-semibold">{{ $postedbefore }}</small>
</div>