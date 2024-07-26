<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{

    use WithPagination;

    public $title = "";
    public $description = "";


    public function createe(Request $request)
    {
        $this->validate([
            'title'=> 'required',
            'description' => 'required'
        ]);
        Auth::user()->posts()->create([
            'title' => $this->title,
            'body' => $this->description
        ]);

        $this->title = '';
        $this->description = '';

        session()->flash('message', 'Post successfully created.');
    }


//#[On('deleting')]
//public function refresh()
//{
//
//}

    public function render()
    {
        $posts = Auth::user()->posts()->latest()->paginate(5);
//        $posts = Post::latest()->paginate(5);
        return view('livewire.post-index', compact('posts'));
    }
}
