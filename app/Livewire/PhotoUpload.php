<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;

class PhotoUpload extends Component
{
    use WithFileUploads;
    public $photo;
    public function render()
    {
        return view('livewire.photo-upload');
    }
    public function submit()
    {
        $this->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $filepath = $this->photo->store('photos', 'public');
        $image = Image::create([
            'title' => $this->photo->getClientOriginalName(),
            'filepath' => $filepath,
        ]);
        session()->flash('message', 'Photo uploaded successfully.');
        session()->flash('error', 'Photo not uploaded successfully.');
        return redirect()->route('success');
        Info($image);
    }
}
