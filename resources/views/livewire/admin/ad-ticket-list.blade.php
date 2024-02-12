<div>
  <div class="relative mt-4 overflow-x-auto bg-white p-6 shadow-md sm:rounded-lg">
    <h1 class="fs-2xl">Ticket Center</h1>
    <table class="w-full rounded-lg text-left text-sm text-gray-500 rtl:text-right">
      <thead class="border-b-2 border-gray-400 text-xs uppercase text-gray-700">
        <tr>
          <th class="px-6 py-4" scope="col">
            Tenant
          </th>
          <th class="px-6 py-4" scope="col">
            Created
          </th>
          <th class="px-6 py-4" scope="col">
            Title
          </th>
          <th class="px-6 py-4" scope="col">
            Priority
          </th>
          <th class="px-6 py-4" scope="col">
            Status
          </th>
          <th class="px-6 py-4" scope="col">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @if (empty($tickets))
        <tr class="border-b odd:bg-white even:bg-gray-50">
            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
            No Tickets Available
            </th>
        </tr>
        @endif
        @foreach ($tickets as $ticket)
          <tr class="border-b odd:bg-white even:bg-gray-50">
            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" scope="row">
              {{ $ticket->tenant }}
            </th>
            <td class="px-6 py-4">
              {{ $ticket->created_at->diffForHumans() }}
            </td>
            <td class="px-6 py-4">
              {{ $ticket->title }}
            </td>
            <td class="px-6 py-4">
              {{ $ticket->priority }}
            </td>
            <td class="px-6 py-4">
              {{ $ticket->status }}
            </td>
            <td class="px-6 py-4">
              <a class="font-medium text-blue-600 hover:underline" href="{{route('ad.ticket.viewing', ['id' => "$ticket->id"])}} "wire:navigate>
                View Ticket
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="p-2">
      {{ $tickets->links() }}
    </div>
  </div>

</div>
