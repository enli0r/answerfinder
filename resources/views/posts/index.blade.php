<x-app-layout>
    <main class="container flex mx-auto max-w-main gap-5">

        <div class="w-70 rounded-xl bg-white p-6 self-baseline">
            <div class="text-center">
                <h4 class="text-lg font-bold mb-1">Ask a question</h4>
                <p class="text-xs mb-6">Find the answer you are looking for!</p>
            </div>
            

            @auth
                <livewire:create-post />
            @endauth

            @guest
                <div class="flex justify-center gap-3 text-center">
                    <a href="{{ route('login') }}" class="bg-blue-500 text-white text-md font-semibold pointer rounded-xl px-4 py-3 flex-1">Log in</a>
                    <a href="{{ route('register') }}" class="bg-gray-300 text-black text-md font-semibold pointer rounded-xl px-4 py-3 flex-1">Register</a>
                </div>
                
            @endguest

        </div>

        <livewire:posts-index />

    </main>
</x-app-layout>