<div class="space-y-4">
    <h2 class="text-xl font-semibold">Create a New Post</h2>

    <!-- Success Message -->
    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <!-- Current Title Section -->
    <div class="flex items-center space-x-2 bg-gray-50 p-4 rounded-md border border-gray-200">
        <span class="text-sm font-medium text-gray-600">Current Title:</span>
        <span x-text="$wire.title" class="text-sm font-semibold text-indigo-600"></span>
    </div>

    <!-- Form -->
    <form wire:submit="save" class="space-y-4">
        @csrf
        <!-- Title Input -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="title" wire:model="title"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Content Input -->
        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea id="content" rows="5" wire:model="content"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            @error('content')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Create Post
        </button>
    </form>
</div>
