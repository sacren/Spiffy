<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required|min:3|max:255', as: 'IMPORTANT')]
    public $title;

    #[Rule('required|min:10', as: 'DETAILED')]
    public $content;

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        // Reset form fields to prevent duplicate submissions
        $this->reset(['title', 'content']);

        $this->redirect(route('posts.index'));
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
