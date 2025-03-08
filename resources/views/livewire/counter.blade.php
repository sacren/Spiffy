<div>
    <p>Current time: {{ now('America/Denver') }}</p>
    <p>{{ $count }}</p>
    <input type="number" wire:model.defer="number">
    <button wire:click="changeCount({{ $number }})">Change Count</button>
</div>
