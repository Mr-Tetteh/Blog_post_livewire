<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;

class PostFrom extends Form
{
    #[Validate('required')]
    public $title='';

    #[Validate('required')]
    public $body = '';


    public function store()
    {
//        dd($this->all());
        $this->validate();

        auth()->user()->posts()->create($this->all());
        $this->reset();


    }
}
