<?php

namespace App\Livewire;

use App\Models\Post;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;


class PostUpdate extends Component
{

    public Post $post;

    public string $title = '';
    public string $body = '';

    public function mount()
    {
        $this->title = $this->post->title;
        $this->body = $this->post->body;

    }

    public function submit()
    {
//        dd('working');
        $this->post->update([
            'title' => $this->title,
            'body' => $this->body
        ]);
        $this->dispatch('updating', false);


    }

    public function render()
    {
        return view('livewire.post-update');
    }
}
