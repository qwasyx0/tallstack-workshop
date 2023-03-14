<?php

namespace App\Http\Livewire\Examples;

use Livewire\Component;

class Child2 extends Component
{
    public $attribute;

    protected $listeners = ['setAttribute'];

    public function setAttribute($value)
    {
        $this->attribute = $value;
    }

    public function render()
    {
        return view('livewire.examples.child2');
    }
}
