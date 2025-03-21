<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
    <!-- Time Display -->
    <div class="mb-6 p-4 bg-gray-100 rounded-lg border border-gray-200 text-center">
        <p class="text-2xl font-semibold text-gray-800">
            Current Time in Denver:
        </p>
        <p class="text-4xl mt-2 text-blue-600 font-bold">
            {{ now('America/Denver')->format('h:i:s A') }}
        </p>
        <p class="text-sm text-gray-600 mt-1">
            {{ now('America/Denver')->format('l, F j, Y') }}
        </p>
    </div>

    <!-- Buttons Container -->
    <div class="flex flex-col gap-4">
        <button wire:click="$refresh"
            class="w-full py-3 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
            Refresh
        </button>
        <button wire:click.window="$refresh"
            class="w-full py-3 px-4 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-200">
            Refresh Window
        </button>
        <button wire:mouseover="$refresh"
            class="w-full py-3 px-4 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-200">
            Mouse Over
        </button>
        <button wire:mouseenter="$refresh"
            class="w-full py-3 px-4 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition duration-200">
            Mouse Enter
        </button>
        <button wire:mouseleave="$refresh"
            class="w-full py-3 px-4 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-200">
            Mouse Leave
        </button>
    </div>
</div>
