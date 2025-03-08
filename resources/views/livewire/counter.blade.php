<div>
    <p>Current time: {{ now('America/Denver') }}</p>
    <p>{{ $count }}</p>
    <input type="number" wire:model.live="count">
    <button wire:click="changeCount(64)">Change Count</button>
</div>
