<div>
    <div class="comments relative sm:mt-12">
        @foreach ($comments as $comment)
            <livewire:post-comment :key="$comment->id" :comment="$comment"/>
        @endforeach
    </div>
</div>
