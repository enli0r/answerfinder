@props(['title', 'description', 'username', 'postedbefore'])

<div class="w-full rounded-xl bg-white mb-6 p-5 flex gap-5">
    <div class="user-info flex flex-col">
        <img src="https://m0.her.ie/wp-content/uploads/2018/01/07093633/GettyImages-887815620.jpg" alt="rock" class="max-w-max w-16 h-16 rounded-xl mb-2">
        <p class="text-sm font-semibold text-center">{{ $username }}</p>
    </div>

    <div class="vertical-line bg-gray-300 w-px h-auto" ></div>

    <div class="post-info">
        <h3 class="font-bold mb-3">{{ $title }}</h3>
        <p class="mb-5 line-clamp-3">{{ $description }}{{ $description }}{{ $description }}{{ $description }}</p>
        <small class="text-gray-400 font-semibold">{{ $postedbefore }}</small>
    </div>
    
</div>