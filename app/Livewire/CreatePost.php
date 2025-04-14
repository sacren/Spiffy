<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $content;

    public function save()
    {
        $this->validate([
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:10',
        ]);

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
