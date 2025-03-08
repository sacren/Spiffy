<x-slot:title>
    {{ __('Dummy') }}
</x-slot:title>

<div>
    <p>Current time: {{ now('America/Denver') }}</p>
    <button wire:click="$refresh">Refresh</button>
</div>
