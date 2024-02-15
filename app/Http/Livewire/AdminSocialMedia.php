<?php

namespace App\Http\Livewire;

use App\Models\SocialMedia;
use Livewire\Component;

class AdminSocialMedia extends Component
{
    public $social_media;

    public $facebook_url, $instagram_url, $youtube_url, $tiktok_url;

    public function mount()
    {
        $this->social_media = SocialMedia::find(1);
        $this->facebook_url = $this->social_media->sm_facebook;
        $this->instagram_url = $this->social_media->sm_instagram;
        $this->youtube_url = $this->social_media->sm_youtube;
        $this->tiktok_url = $this->social_media->sm_tiktok;
    }
    public function UpdateBlogSocialMedia()
    {
        $this->validate([
            'facebook_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'tiktok_url' => 'nullable|url',
        ]);

        $update = $this->social_media->update([
            'bsm_facebook' => $this->facebook_url,
            'bsm_instagram' => $this->instagram_url,
            'bsm_youtube' => $this->youtube_url,
            'bsm_tiktok' => $this->tiktok_url,
        ]);
        if ($update) {
            $this->showToastr('Blog socialmedia has been successfuly updated.', 'success');
        } else {
            $this->showToastr('Something Wrong!', 'error');
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
        return view('livewire.admin-social-media');
    }
}
