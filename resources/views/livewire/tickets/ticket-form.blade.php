<div class="w-full">
  <div class="mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
      <div class="p-4 text-gray-900">
        <h1 class="mb-4 text-xl">New Ticket</h1>
        <h2 class="text-red-500">All fields required</h2>
        <button class="absolute right-3 top-3 text-gray-900 hover:text-red-600 focus:outline-none"
          @click="modelOpen = false">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </button>
        <div class="">
          @if (session('success'))
          <div class="nb-4 text-md rounded-lg bg-green-100 p-4 text-green-800" role="alert">
            <span class="font-medium">Ticket Submitted</span>
          </div>
          @endif
        </div>
        <form wire:submit="save">
          <div class="grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-8">
            <div class="sm:col-span-3">
              <label class="text-md block font-medium leading-6 text-gray-900" for="tenant">{{ __("Tenant
                Name") }}</label>
              <input id="tenant" wire:model="ticket.tenant" name="tenant" value="{{$tenant}}"
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

            <div class="sm:col-span-3 grid grid-cols-2">
              <label class="text-md block font-medium leading-6 text-gray-900" for="building">{{
                __('Building') }}</label>
              <select id="building" wire:model="ticket.building" name="building"
                class=" sm:text-md mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:leading-6">
                <option value="" selected>{{ __('Select Building') }}</option>
                @foreach (\App\Enums\BuildingNames::cases() as $building)
                <option value="{{ $building->name }}">{{ $building->name }}</option>
                @endforeach
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
                <option value="" selected>{{ __('Select Topic') }}</option>
                @foreach (\App\Enums\TopicTypes::cases() as $topic)
                <option value="{{ $topic->value }}">{{ $topic->name }}</option>
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
                <option value="{{ $priority->value }}">{{ $priority->name }}</option>
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
          <label for="images">Images</label>
          @if($images)
            @foreach ( $images as $image)
              <img src="{{$image->temporaryUrl()}}" alt="">
            @endforeach
          @endif
          <div>
            <input type="file" wire:model="images" name="images" id="images" accept="image/png, image/jpeg, image/jpg" multiple>
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
