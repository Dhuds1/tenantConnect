<div class="w-full">
    @if (empty($tickets))
    <div class="p-4 w-full bg-white my-2 rounded-lg border-2 border-grey-200">
        <h2>
            No Tickets Available
        </h2>
    </div>
    @endif
    @foreach ($tickets as $ticket)
        <div class="p-4 w-full bg-white my-2 rounded-lg border-2 border-grey-200">
            <h2>
                {{$ticket->title}}
            </h2>
        </div>
    @endforeach

    <div class="mt-2 mb-12 p-2">
        {{$tickets->links()}}
    </div>

</div>
