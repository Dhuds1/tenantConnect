<div class="w-full">
  <div class="mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg px-6">
      <div class="p-4 text-gray-900">
        <h1 class="mb-4 text-xl">New Ticket</h1>
      </div>
      <form wire:submit="update">
        <div class="grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-8">
          <div class="sm:col-span-3">
            <label class="text-md block font-medium leading-6 text-gray-900" for="tenant">{{ __("Tenant
              Name") }}</label>
            <input id="tenant" wire:model="ticket.tenant" name="tenant" value="{{$ticket->tenant}}"
              class="sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6"
              type="text" autocomplete="full-name">
            {{-- Errors --}}
            <div class="">
              @error('ticket.tenant')
              <span class="text-xs text-red-500">
                {{ $message }}
              </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-3">
            <label class="text-md block font-medium leading-6 text-gray-900" for="building">{{
              __('Building') }}</label>
            <select id="building" wire:model="ticket.building" name="building"
              class="sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6">
              @foreach (\App\Enums\BuildingNames::cases() as $building)
              <option value="{{ $building->value }}" @if ($building->value === $ticket->building->value)
                selected
                @endif
                >
                {{ $building->name }}
              </option>
              @endforeach
            </select>
            </select>
            {{-- Errors --}}
            <div class="">
              @error('ticket.building')
              <span class="text-xs text-red-500">
                {{ $message }}
              </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-2">
            <label class="text-md block font-medium leading-6 text-gray-900" for="unit">{{ __('Unit
              Number') }}</label>
            <div
              class="mt-2 flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-rp-600 sm:max-w-md">
              <span class="sm:text-md flex select-none items-center pl-3 text-gray-500"># </span>
              <input id="unit" wire:model="ticket.unit" name="unit"
                class="sm:text-md block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:leading-6"
                type="text" inputmode="numeric" data-input-counter autocomplete="unit-number" value="">
            </div>
            {{-- Errors --}}
            <div class="">
              @error('ticket.unit')
              <span class="text-xs text-red-500">
                {{ $message }}
              </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-full">
            <label class="text-md block font-medium leading-6 text-gray-900" for="email">Email</label>
            <input id="email" wire:model="ticket.email" name="email"
              class="sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6"
              type="email" autocomplete="email" value="">
            {{-- Errors --}}
            <div class="">
              @error('ticket.email')
              <span class="text-xs text-red-500">
                {{ $message }}
              </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-3">
            <label class="text-md mb-2 block font-medium text-gray-900" for="topic">{{ __('Topic')
              }}</label>
            <select id="topic" wire:model="ticket.topic" name="topic"
              class="sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6">
              @foreach (\App\Enums\TopicTypes::cases() as $topic)
              <option value="{{ $topic->value }}" @if ($topic->value === $ticket->topic->value)
                selected
                @endif
                >
                {{ $topic->name }}
              </option>
              @endforeach
            </select>
            {{-- Errors --}}
            <div class="">
              @error('ticket.topic')
              <span class="text-xs text-red-500">
                {{ $message }}
              </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-3">
            <label class="text-md block font-medium leading-6 text-gray-900" for="priority">{{
              __('Priority') }}</label>
            <select id="priority" wire:model="ticket.priority" name="priority"
              class="sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6">
              @foreach (\App\Enums\PriorityType::cases() as $priority)
              <option value="{{ $priority->value }}" @if ($priority->value === $ticket->priority->value)
                selected
                @endif
                >
                {{ $priority->name }}
              </option>
              @endforeach

            </select>
            {{-- Errors --}}
            <div class="">
              @error('ticket.priority')
              <span class="text-xs text-red-500">
                {{ $message }}
              </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-full">
            <label class="text-md block font-medium leading-6 text-gray-900" for="title">{{ __('Title')
              }}</label>
            <input id="title" wire:model="ticket.title" name="title"
              class="sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6"
              type="text" autocomplete="title">
            {{-- Errors --}}
            <div class="">
              @error('ticket.title')
              <span class="text-xs text-red-500">
                {{ $message }}
              </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-full">
            <label class="text-md block font-medium leading-6 text-gray-900" for="details">{{
              __('Details') }}</label>
            <textarea id="details" wire:model="ticket.details" name="details"
              class="sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6"
              type="details" rows="10" autocomplete="details"></textarea>
            {{-- Errors --}}
            <div class="">
              @error('ticket.details')
              <span class="text-xs text-red-500">
                {{ $message }}
              </span>
              @enderror
            </div>

          </div>
        </div>
        <div class="flex gap-2 items-end">

          <button
            class="mt-4 text-md col-span-2 rounded-md bg-rp-600 px-3 py-2 font-semibold text-white shadow-sm hover:bg-rp-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rp-600">{{
            __('Submit') }}
          </button>
          <span class="text-sm" wire:loading class="">Submitting...</span>
        </div>
    </div>
    </form>
  </div>
</div>
</div>
</div>
