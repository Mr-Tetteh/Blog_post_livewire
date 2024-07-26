<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostItem extends Component
{

    public bool $edit =false;

    #[On('updating')]
    public function updating($updating)
    {
        $this->edit = $updating;

    }

    public function destroy(Post $post)
    {
//        dd($id);
//       $post =   Post::find($id);

        $this->authorize('delete', $post);
        //above deals with policy

        $post->delete();

        $this->dispatch('deleting');

        session()->flash('message', 'Post successfully deleted.');


    }
    public Post $post;
    public function render()
    {
        return view('livewire.post-item');
    }
}
