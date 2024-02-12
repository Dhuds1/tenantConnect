<div class="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tickets, {{auth()->user()->name}}
        </h2>
    </x-slot>
    <div class="mx-auto flex flex-col-reverse">
        <livewire:tickets.ticket-list lazy />
        <x-ticket-modal title='New Ticket'>
            {{-- Does not close after form submitted TODO --}}
            <livewire:tickets.ticket-form />
        </x-ticket-modal>
    </div>
</div>
