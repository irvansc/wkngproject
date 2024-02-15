<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class TopHeader extends Component
{
    public $admin;
    protected $listeners = [
        'updateTopHeader' => '$refresh'
    ];
    public function mount()
    {
        $this->admin = User::find(auth('web')->id());
    }
    public function render()
    {
        return view('livewire.top-header');
    }
}
