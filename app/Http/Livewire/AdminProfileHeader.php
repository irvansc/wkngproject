<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminProfileHeader extends Component
{
    public $admin;

    protected $listeners = [
       'updateAuthorProfileHeader'=>'$refresh'
    ];

   public function mount()
   {
      $this->admin = User::find(auth('web')->id());
   }
    public function render()
    {
        return view('livewire.admin-profile-header');
    }
}
