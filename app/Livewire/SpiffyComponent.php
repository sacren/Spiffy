<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]

class SpiffyComponent extends Component
{
    public function render()
    {
        return view('livewire.spiffy-component');
    }
}
