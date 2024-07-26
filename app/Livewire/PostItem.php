<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostItem extends Component
{

    public bool $edit =false;

    public function destroy($id)
    {
//        dd($id);
       $post =   Post::find($id);

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
