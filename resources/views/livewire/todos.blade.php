<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
    <!-- Input and Add Button -->
    <div class="flex space-x-2">
        <input type="text" wire:model="task" placeholder="Add a new task"
            class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        <button type="button" wire:click="add"
            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Add
        </button>
    </div>

    <!-- Todo List -->
    <ul class="mt-6 space-y-2">
        @foreach ($todos as $todo)
            <li
                class="px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg hover:bg-gray-100 transition duration-150 ease-in-out">
                {{ $todo }}
            </li>
        @endforeach
    </ul>
</div>
