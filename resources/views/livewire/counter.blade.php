<div>
    <p>Current time: {{ now('America/Denver') }}</p>
    <p>{{ $count }}</p>
    <button wire:click="changeCount">Change Count</button>
</div>
