<div>
<form wire:submit.prevent="save">
    <input type="file" wire:model="photos" multiple>

    @error('photos.*') <span class="error">{{ $message }}</span> @enderror
    <div wire:loading wire:target="photo">Uploading...</div>
    <button type="submit">Save Photo</button>
</form>

</div>

