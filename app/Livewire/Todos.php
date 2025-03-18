<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todos = [
        'Compile Linux kernel',
        'Update Laravel',
    ];

    public function render()
    {
        return view('livewire.todos');
    }
}
