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
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
