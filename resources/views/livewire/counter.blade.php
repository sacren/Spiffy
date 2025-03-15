<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
    <div class="mb-6">
        <div class="text-2xl font-bold text-center text-gray-800 mb-4">
            Count: {{ $count }}
        </div>
    </div>

    <div class="mb-6">
        <input type="number" wire:model.change="number"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            placeholder="Enter a number">
    </div>

    <button wire:click="changeCount({{ $number }})"
        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
        Change Count
    </button>
</div>
