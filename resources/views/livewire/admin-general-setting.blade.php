<div>
    <form method="POST" wire:submit.prevent='updateGeneralSettings()'>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name">Web Name</label>
                    <input type="text" class="form-control" placeholder="Enter web name" wire:model='web_name'>
                    <span class="text-danger">@error('web_name')
                        {!!$message!!}
                        @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name">Web Email</label>
                    <input type="text" class="form-control" placeholder="Enter web email" wire:model='web_email'>
                    <span class="text-danger">@error('web_name')
                        {!!$message!!}
                        @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name">Web Whatsapp</label>
                    <input type="text" class="form-control" placeholder="Enter web Whatsapp" wire:model='web_wa'>
                    <span class="text-danger">@error('web_wa')
                        {!!$message!!}
                        @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name">Web Address</label>
                    <input type="text" class="form-control" placeholder="Enter web Address" wire:model='web_address'>
                    <span class="text-danger">@error('web_address')
                        {!!$message!!}
                        @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name">Web maps</label>
                    <input type="text" class="form-control" placeholder="Enter web maps" wire:model='web_maps'>
                    <span class="text-danger">@error('web_maps')
                        {!!$message!!}
                        @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name">Web Description</label>
                    <textarea class="form-control" id="" cols="3" rows="3" wire:model='web_desc'></textarea>
                    <span class="text-danger">@error('web_desc')
                        {!!$message!!}
                        @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </form>
</div>
</div>
