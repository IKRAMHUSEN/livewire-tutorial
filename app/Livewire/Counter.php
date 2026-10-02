<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;
    public function render(): View
    {
        return view('livewire.counter')->layout('layouts.app');
    }
    public function increment(): void
    {
        $this->counter++;
    }
    public function decrement(): void
    {
        $this->counter--;
    }
}
