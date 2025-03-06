<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 6;

    public function changeCount(int $number)
    {
        $this->count = $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
