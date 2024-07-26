<?php

namespace App\Livewire;

use App\Livewire\Forms\PostFrom;

//use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
    public PostFrom $form;

    use WithPagination;


    public $title = "";
    public $body = "";


    public function create(Request $request)
    {

        $this->form->store();
        //        $this->validate([
//            'title'=> 'required',
//            'description' => 'required'
//        ]);
//        Auth::user()->posts()->create([
//            'title' => $this->title,
//            'body' => $this->description
//        ]);
//
//        $this->title = '';
//        $this->body = '';

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
