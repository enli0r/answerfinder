<x-app-layout>
    <main class="container flex mx-auto max-w-main">
        <div class="w-70 mr-5">
            
        </div>

        <div class="w-175">
            @foreach ($posts as $post)
                <x-post :title="$post->title" :description="$post->description" :username="$post->user->name" :postedbefore="$post->created_at->diffForHumans()" />
            @endforeach
        </div>
    </main>
</x-app-layout>
