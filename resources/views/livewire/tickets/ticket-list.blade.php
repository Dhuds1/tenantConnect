<div class="w-full">
    @if (empty($tickets))
    <div class="p-4 w-full bg-white my-2 rounded-lg border-2 border-grey-200">
        <h2>
            No Tickets Available
        </h2>
    </div>
    @endif
    @foreach ($tickets as $ticket)
    <div class="p-4 w-full bg-white my-2 rounded-lg border-2 border-grey-200 ">

        <div class="flex justify-between">
            <div class="flex gap-2">

                <h2>
                    {{$ticket->title}}
                </h2>
                <h3 class="text-[0.6rem] py-1 px-3 rounded-full bg-indigo-200">
                    {{$ticket->created_at->diffForHumans()}}
                </h3>
                <h3 class="text-[0.6rem] py-1 px-3 rounded-full bg-indigo-200">
                    {{$ticket->status}}
                </h3>
                <h3 class="text-[0.6rem] py-1 px-3 rounded-full bg-indigo-200">
                    {{$ticket->priority}}
                </h3>
            </div>
            <a href="{{route('tickets.update', ['id' => "$ticket->id"])}}" wire:navigate>Update</a>
        </div>
        <p class="text-sm max-w-[70ch]">
            {{$ticket->details}}
        </p>
    </div>
    @endforeach

    <div class="mt-2 mb-12 p-2">
        {{$tickets->links()}}
    </div>

</div>
