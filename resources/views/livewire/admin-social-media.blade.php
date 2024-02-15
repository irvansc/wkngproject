<div>
    <form method="POST" wire:submit.prevent='UpdateBlogSocialMedia()'>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Facebook</label>
                    <input type="text" class="form-control" placeholder="Facebook page url" wire:model='facebook_url'>
                    <span class="text-danger">@error('facebook_url')
                        {!!$message!!}
                    @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Instagram</label>
                    <input type="text" class="form-control" placeholder="Instagram url" wire:model='instagram_url'>
                       <span class="text-danger">@error('instagram_url')
                        {!!$message!!}
                    @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Youtube</label>
                    <input type="text" class="form-control" placeholder="Youtube url" wire:model='youtube_url'>
                       <span class="text-danger">@error('youtube_url')
                        {!!$message!!}
                    @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Tiktok</label>
                    <input type="text" class="form-control" placeholder="tiktok url" wire:model='tiktok_url'>
                    <span class="text-danger">@error('tiktok_url')
                        {!!$message!!}
                    @enderror</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
