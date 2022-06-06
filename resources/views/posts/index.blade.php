<x-app-layout>
    <main class="container flex gap-5 mx-auto max-w-main">        

        <livewire:create-post />
  
        <div class="w-175">

            <livewire:order-filter />

            <livewire:posts-index />

        </div>


    </main>
</x-app-layout>