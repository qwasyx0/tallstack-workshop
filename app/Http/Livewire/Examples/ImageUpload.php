<?php

namespace App\Http\Livewire\Examples;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $photo;

    protected $rules = [
        'photo' => 'image|max:1024', // 1MB Max
    ];

    public function save()
    {
        $this->validate();

        $this->photo->store('photos');
    }

    public function render()
    {
        return view('livewire.examples.image-upload');
    }
}
