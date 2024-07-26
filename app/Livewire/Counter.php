<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increaseNumber()
    {
        $this->count++;

    }
    public function decreaseNumber()
    {
        $this->count--;

    }
    public function render()
    {
        return view('livewire.counter');
    }
}
