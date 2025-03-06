<div>
    <p>Current time: {{ now('America/Denver') }}</p>
    <p>{{ $count }}</p>
    <button wire:click="changeCount(64)">Change Count</button>
</div>
