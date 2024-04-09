<div class="w-full">
  @if ($tickets->isEmpty())
  <div class="text-center text-2xl font-bold text-gray-500">
    <h2>
      No Tickets Available
    </h2>
  </div>
  @endif
  @foreach ($tickets as $ticket)
  <div class="p-4 w-full bg-gray-100 border-2 border-gray-200 my-2 rounded-lg">

    <div class="flex justify-between">
      <div class="flex gap-2">

        <h2>
          {{$ticket->title}}
        </h2>
        <h3 class="text-[0.6rem] py-1 px-3 rounded-full bg-rp-200">
          {{$ticket->created_at->diffForHumans()}}
        </h3>
        <h3 class="text-[0.6rem] py-1 px-3 rounded-full bg-rp-200">
          {{$ticket->status}}
        </h3>
        <h3 class="text-[0.6rem] py-1 px-3 rounded-full bg-rp-200">
          {{$ticket->priority}}
        </h3>
      </div>
      @if($ticket->status->value === "review")
      <a href="{{route('tickets.view', ['id'=>"$ticket->id"])}}" class="text-rp-500 hover:text-rp-600 font-bold">View</a>
      @elseif($ticket->status->value !== "close")
      <a href="{{route('tickets.update', ['id' => "$ticket->id"])}}" class="text-rp-500 hover:text-rp-600 font-bold">Update <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i></a>
      @else
      <span class="text-gray-500 font-bold">Closed</span>
      @endif

    </div>
    <p class="text-sm max-w-[70ch]">
      {{$ticket->details}}
    </p>
  </div>
  @endforeach
  <div class="mt-2 p-2">
    {{$tickets->links()}}
  </div>

</div>
