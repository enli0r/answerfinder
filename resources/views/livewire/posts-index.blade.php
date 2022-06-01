<div>
    <div class="w-175">
        @foreach ($posts as $post)
            <x-post :title="$post->title" :description="$post->description" :username="$post->user->name" :postedbefore="$post->created_at->diffForHumans()" />
        @endforeach

        <div class="mb-5">
            {{ $posts->links() }}
        </div>
    </div>
</div>
