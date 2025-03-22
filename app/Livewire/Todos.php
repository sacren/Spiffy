<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('New Task')]
class Todos extends Component
{
    public $task = null;

    public $todos = null;

    public function mount()
    {
        $this->todos = [
            'Compile Linux kernel',
            'Update Laravel',
        ];
    }

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
