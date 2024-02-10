<div class="w-full">
  <livewire:tickets.ticket-list lazy />
  <x-ticket-modal title='New Ticket'>
    {{-- Does not close after form submitted TODO --}}
    <livewire:tickets.ticket-form />
  </x-ticket-modal>
</div>
