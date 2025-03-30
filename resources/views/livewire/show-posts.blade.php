<div class="space-y-4">
    <h2 class="text-xl font-semibold">Posts</h2>

    <div class="bg-white rounded-lg shadow divide-y divide-gray-200">
        @foreach ($posts as $post)
            <div wire:key="{{ $post->id }}" class="p-4">
                <h3 class="font-medium text-lg">{{ $post->title }}</h3>
                <p class="text-gray-600 mt-1">{{ Str::words($post->content, 12) }}</p>
                <button type="button" wire:click="delete({{ $post->id }})"
                    class="px-3 py-1.5 bg-red-50 hover:bg-red-100 text-red-600 rounded-md text-sm font-medium transition-colors border border-red-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-1">
                    Delete
                </button>
            </div>
        @endforeach
    </div>
</div>
