@props(['comment'])
<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/80?u{{ $comment->user_id }}" alt="" width="80" height="80" class="rounded-xl">
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->username }}</h3>
                <p class="text-xs">Posted
                    <time>{{  $comment->created_at->diffForHumans() }}</time>
                </p>

                <p>
                    {{ $comment->body }}
                </p>

            </header>
        </div>
    </article>
</x-panel>
