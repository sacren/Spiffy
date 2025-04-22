<div>
    <h1>{{ $greeting }}</h1>

    <div x-data="{ count: 0 }">
        <span x-text="count"></span>

        <button x-on:click="count++">+</button>
    </div>

    <span x-text="256"></span>
    <span x-text="count"></span>
</div>
