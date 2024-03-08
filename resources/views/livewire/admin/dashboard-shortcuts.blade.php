<div class="mt-3 border-l-4 border-rp-500">
    <div class="w-full text-left text-sm text-gray-500 rtl:text-right rounded-r-lg overflow-hidden">
        @foreach ($tickets as $ticket)
        <div class="odd:bg-gray-100 even:bg-gray-200 flex justify-between">
            <div class="whitespace-nowrap p-4 font-medium text-gray-900" scope="row">
                {{ $ticket->tenant }}
            </div>
            <div class="p-4">
                <a class="font-medium underline p-2 rounded text-ob-900 hover:text-rp-500 transition-all duration-200" href="{{route('ad.ticket.viewing', ['id' => "
                    $ticket->id"])}} "wire:navigate>
                    View Ticket
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
