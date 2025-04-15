<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required', message: 'The custom title is required')]
    #[Rule('min:3', message: 'At least 3 characters')]
    #[Rule('max:255', message: 'At most 255 characters')]
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
