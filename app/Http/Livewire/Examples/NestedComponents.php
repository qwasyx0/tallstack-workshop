<?php

namespace App\Http\Livewire\Examples;

use App\Models\User;
use Livewire\Component;

class NestedComponents extends Component
{
    public $initiated = false;

    public $prefetch;

    public $array = [];

    public $param;

    public $text;

    public function updatedParam($value)
    {
        $this->text = $value;
    }
    
    public function emitChild1()
    {
        $this->emitTo('examples.child1', 'setAttribute', 'Sent to child1');
    }

    public function emitChild2()
    {
        $this->emitTo('examples.child2', 'setAttribute', 'Sent to child2');
    }

    public function emitAll()
    {
        $this->emit('setAttribute', 'Sent to all');
    }

    public function prefetch()
    {
        $this->prefetch = User::first()->email;
    }
    public function initiate()
    {
        $this->initiated = true;
    }

    public function render()
    {
        // for ($i = 0; $i < 5000; $i++) {
        //     // $this->array[] = $this->initiated ? User::select('id')->first() : [];
        //     $this->array[] = User::select('id')->first();
        // }

        return view('livewire.examples.nested-components');
    }
}
