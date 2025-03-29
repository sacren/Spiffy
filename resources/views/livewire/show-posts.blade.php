<div class="space-y-4">
    <h2 class="text-xl font-semibold">Posts</h2>

    <div class="bg-white rounded-lg shadow divide-y divide-gray-200">
        @foreach($posts as $post)
            <div wire:key="{{ $post->id }}" class="p-4">
                <h3 class="font-medium text-lg">{{ $post->title }}</h3>
                <p class="text-gray-600 mt-1">{{ $post->content }}</p>
            </div>
        @endforeach
    </div>
</div>
