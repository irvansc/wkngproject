<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class AdminGeneralSetting extends Component
{
    public $settings;

    public $web_name, $web_email, $web_desc, $web_wa, $web_address, $web_maps;

    public function mount()
    {
        $this->settings = Setting::find(1);
        $this->web_name = $this->settings->web_name;
        $this->web_email = $this->settings->web_email;
        $this->web_wa = $this->settings->web_wa;
        $this->web_maps = $this->settings->web_maps;
        $this->web_address = $this->settings->web_address;
        $this->web_desc = $this->settings->web_desc;
    }
    public function updateGeneralSettings()
    {
        $this->validate([
            'web_name' => 'required',
            'web_wa' => 'required',
            'web_maps' => 'required',
            'web_email' => 'required|email'
        ]);

        $update =  $this->settings->update([
            'web_name' => $this->web_name,
            'web_email' => $this->web_email,
            'web_wa' => $this->web_wa,
            'web_desc' => $this->web_desc,
        ]);
        if ($update) {
            $this->showToastr('General settings successfuly updated', 'success');
            $this->emit('updateAuthorFooter');
        } else {
            $this->showToastr('Something wrong!', 'error');
        }
    }

    public function showToastr($message, $type)
    {
        return $this->dispatchBrowserEvent('showToastr', [
            'type' => $type,
            'message' => $message
        ]);
    }
    public function render()
    {
        return view('livewire.admin-general-setting');
    }
}
