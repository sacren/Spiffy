<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $task = null;

    public $todos = [
        'Compile Linux kernel',
        'Update Laravel',
    ];

    public function add()
    {
        $this->todos[] = $this->task;
        $this->reset('task');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
