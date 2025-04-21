<div>
    <h1>{{ $greeting }}</h1>

    <div x-data="{ count: 0 }">
        <span x-text="count"></span>

        <button x-on:click="count++">+</button>
    </div>
</div>
