<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('New Task')]
class Todos extends Component
{
    public $task = '';
    public $todos = [];

    public function mount()
    {
        $this->todos[] = 'Compile Linux kernel';
        $this->todos[] = 'Update Laravel';
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
