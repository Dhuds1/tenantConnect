<div class="bg-white p-4 rounded-lg shadow-lg">
  <div class="">
    <button class="text-rp-500 hover:text-rp-700" onclick="history.back()"><i class="fa-solid fa-arrow-left fa-sm"></i>
      Back</button>
    <h1 class="text-lg">Update Ticket</h1>
    <h2>{{ $ticket->status }}</h2>
  </div>
  <div class="grid grid-cols-2 mb-3 items-center">
    <div class="flex flex-col justify-evenly border-l-4 pl-2 border-l-rp-500 h-[125px]">
      <p>
        {{$ticket->tenant}}
      </p>
      <p>
        {{$ticket->email}}
      </p>
      <p>
        {{$ticket->building}} #{{$ticket->unit}}
      </p>
      <p>
        <span class="px-1 py-0.5 rounded-full bg-rp-500 text-white">{{$ticket->topic}}</span><span
          class="px-1 py-0.5 ml-3 rounded-full bg-rp-500 text-white">{{$ticket->priority}}</span>
      </p>
    </div>
    @if($ticket->images)
    <div class="flex gap-4 border-l-4 pl-2 border-l-rp-500 h-[125px]">
      @foreach ($ticket->images as $image)
      <img src="{{Storage::url($image)}}" class="h-full" alt="">
      @endforeach
    </div>
    @endif
  </div>
  <form wire:submit="update" class="grid">
    <label for="title" class="text-md block font-medium leading-6 text-gray-900">Title</label>
    <input wire:model="title" name="title" id="title" type="text" value="{{ $ticket->title }}"
      class="sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6">
    <label for="details" class="text-md block font-medium leading-6 text-gray-900">Details</label>
    <textarea wire:model="details"
      class="sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6 resize-none"
      name="details" id="details" class="" rows="10">{{ $ticket->details }}</textarea>
    <div class="flex gap-20 mt-4">
      <button type="submit" class="px-4 py-2 bg-rp-500 rounded-lg text-white hover:bg-rp-600">Save</button>
      <button type="reset" class="px-4 py-2 text-rp-500 hover:text-rp-600 underline">Reset</button>
    </div>
  </form>
</div>
