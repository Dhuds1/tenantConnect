<div>
    
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900">
        <h1>Tickets</h1>
        <div class="">
          @if (session('success'))
            <div class="p-4 nb-4 text-sm text-green-800 rounded-lg bg-green-100" role="alert">
              <span class="font-medium">Ticket Submitted</span>
            </div>
          @endif
        </div>
        <form class="flex gap-4" wire:submit="save">
          <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
              <label for="tenant" class="block text-sm font-medium leading-6 text-gray-900">{{__("Tenant
                Name")}}</label>
              <input type="text" wire:model="ticket.tenant" name="tenant" id="tenant" autocomplete="full-name"
                class="block w-full rounded-md mt-2 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              {{-- Errors --}}
              <div class="">
                @error('ticket.tenant')
                <span class="text-red-500 text-xs">
                  {{$message}}
                </span>
                @enderror
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="building" class="block text-sm font-medium leading-6 text-gray-900">{{__("Building")}}</label>
              <select wire:model="ticket.building" name="building" id="building"
                class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="" selected>{{__("Select Building")}}</option>
                <option value="collie">Collie</option>
                <option value="hound">Hound</option>
                <option value="beagle">Beagle</option>
                <option value="sheperd">Sheperd</option>
              </select>
              {{-- Errors --}}
              <div class="">
                @error('ticket.building')
                <span class="text-red-500 text-xs">
                  {{$message}}
                </span>
                @enderror
              </div>
            </div>

            <div class="sm:col-span-1">
              <label for="unit" class="block text-sm font-medium leading-6 text-gray-900">{{__("Unit Number")}}</label>
              <div
                class="flex mt-2 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"># </span>
                <input type="text" wire:model="ticket.unit" inputmode="numeric" data-input-counter name="unit" id="unit"
                  autocomplete="unit-number" value=""
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
              </div>
              {{-- Errors --}}
              <div class="">
                @error('ticket.unit')
                <span class="text-red-500 text-xs">
                  {{$message}}
                </span>
                @enderror
              </div>
            </div>

            <div class="sm:col-span-full">
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
              <input wire:model="ticket.email" id="email" name="email" type="email" autocomplete="email" value=""
                class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              {{-- Errors --}}
              <div class="">
                @error('ticket.email')
                <span class="text-red-500 text-xs">
                  {{$message}}
                </span>
                @enderror
              </div>
            </div>

            <div class="sm:col-span-3">
              <label for="topic" class="block mb-2 text-sm font-medium text-gray-900">{{__("Topic")}}</label>
              <select wire:model="ticket.topic" id="topic" name="topic"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset mt-2 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="" selected>{{__("Select Topic")}}</option>
                <option value="building">Building</option>
                <option value="floor">Floor</option>
                <option value="unit">Unit</option>
                <option value="suggestion">Suggestion</option>
                <option value="concerns">Concerns</option>
              </select>
              {{-- Errors --}}
              <div class="">
                @error('ticket.topic')
                <span class="text-red-500 text-xs">
                  {{$message}}
                </span>
                @enderror
              </div>
            </div>

            <div class="sm:col-span-3">
              <label for="priority" class="block text-sm font-medium leading-6 text-gray-900">{{__("Priority")}}</label>
              <select id="priority" wire:model="ticket.priority" name="priority"
                class="block w-full rounded-md border-0 py-1.5 mt-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @foreach (\App\Enums\PriorityType::cases() as $priority)
                <option value="{{$priority->value}}">{{$priority->name}}</option>
                @endforeach
              </select>
              {{-- Errors --}}
              <div class="">
                @error('ticket.priority')
                <span class="text-red-500 text-xs">
                  {{$message}}
                </span>
                @enderror
              </div>
            </div>

            <div class="sm:col-span-full">
              <label for="title" class="block text-sm font-medium leading-6 text-gray-900">{{__("Title")}}</label>
              <input wire:model="ticket.title" id="title" name="title" type="text" autocomplete="title"
                class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              {{-- Errors --}}
              <div class="">
                @error('ticket.title')
                <span class="text-red-500 text-xs">
                  {{$message}}
                </span>
                @enderror
              </div>
            </div>

            <div class="sm:col-span-full">
              <label for="details" class="block text-sm font-medium leading-6 text-gray-900">{{__("Details")}}</label>
              <textarea wire:model="ticket.details" id="details" name="details" type="details" rows="10"
                autocomplete="details"
                class="block w-full rounded-md mt-2 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
              {{-- Errors --}}
              <div class="">
                @error('ticket.details')
                <span class="text-red-500 text-xs">
                  {{$message}}
                </span>
                @enderror
              </div>

            </div>
            <button
              class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__("Submit")}}
              <div wire:loading class="">ting</div>
            </button>
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
