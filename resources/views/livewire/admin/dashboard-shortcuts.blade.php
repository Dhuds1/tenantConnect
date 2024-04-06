<div class="mt-3 border-l-4 border-rp-500">
  <div class="w-full overflow-hidden rounded-r-lg text-left text-sm text-gray-500 rtl:text-right">
    @foreach ($tickets as $i => $ticket)
      {{-- Formatting created undeeded URI complications --}}
      <?php $route = route('ad.ticket.viewing', ['id' => "$ticket->id"]); ?>
      <div class="flex justify-between odd:bg-gray-100 even:bg-gray-200">
        <div class="whitespace-nowrap p-4 font-medium text-gray-900" scope="row">
          {{ $ticket->tenant }}
          {{ $ticket->tenant }}
          @if (isset($new) && $new->contains('id', $ticket->id))
            &mdash; <span class="text-red-600">New</span>
          @endif
        </div>
        <div class="p-4">
          <a class="rounded p-2 font-medium text-ob-900 transition-all duration-200 hover:text-rp-500"
            href="{{ $route }}">View Ticket
            <i class="fa-solid fa-arrow-up-right-from-square fa-sm"></i>
          </a>
        </div>
      </div>
    @endforeach
  </div>
</div>
