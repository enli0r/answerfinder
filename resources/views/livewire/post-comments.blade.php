<div>
    <div class="comments relative">
        @foreach ($comments as $comment)
            <livewire:post-comment :key="$comment->id" :comment="$comment"/>
        @endforeach
    </div>
</div>
