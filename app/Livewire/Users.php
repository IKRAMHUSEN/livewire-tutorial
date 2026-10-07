<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class Users extends Component
{
    use WithPagination;
    #[Url()]

    public $search = '';
    public function render()
    {
        return view('livewire.users', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%')->paginate(5)
        ]);
    }
    public function delete($id)
    {
        User::find($id)->delete();
    }
}
