<div>
  @if ($images)
  <form wire:submit.prevent="delete('{{ $image }}')">
    @foreach ($images as $image)
    <img src="{{ Storage::url($image) }}" alt="">
    <input type="hidden" wire:model="image" value="{{ $image }}">
    <button type="submit">Delete</button>
    @endforeach
  </form>
  @endif
</div>
