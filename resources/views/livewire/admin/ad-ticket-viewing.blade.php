<x-admin-layout>
  <x-slot name="header">
    <div class="flex justify-between align-bottom">

        <div class="">
            <button class="text-blue-600 hover:text-blue-900" onclick="history.back()">Back</button>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Viewing Ticket #{{ $ticket->id }}
      </h2>
      <h3>
          From {{ $ticket->created_at->diffForHumans() }}
        </h3>
    </div>
    <form class="flex flex-col">
        <label class="block text-xl font-medium leading-6 text-gray-900" for="status">{{ __('Change Status') }}</label>
        <select id="status" name="status"
        class="rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:text-sm sm:leading-6">
        <option value="Open" selected>Open</option>
        <option value="reviewing">Reviewing</option>
        <option value="accepted">Accepted</option>
        <option value="closed">Closed</option>
        <option value="archived">Archived</option>
      </select>
    </form>
  </div>
  </x-slot>
  <div class="">
    <div class="mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 pt-0 text-gray-900">
          <div>
            <h2 class="pt-6 font-bold text-red-600">READONLY</h2>

            <div class="space-y-12">
              <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <h3 class="block text-sm font-medium leading-6 text-gray-900" for="tenant">{{ __('Tenant Name') }}
                  </h3>
                  <span
                    class="mt-2 block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    {{ $ticket->tenant }}
                  </span>
                </div>

                <div class="sm:col-span-2">
                  <h3 class="block text-sm font-medium leading-6 text-gray-900">{{ __('Building') }}</h3>
                  <span
                    class="mt-2 block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    {{ $ticket->building }}
                  </span>
                </div>

                <div class="sm:col-span-1">
                  <h3 class="block text-sm font-medium leading-6 text-gray-900">{{ __('Building') }}</h3>
                  <span
                    class="mt-2 block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    # {{ $ticket->unit }}
                  </span>
                </div>

                <div class="sm:col-span-full">
                  <h3 class="block text-sm font-medium leading-6 text-gray-900" for="email">{{ __('Email address') }}
                  </h3>
                  <span
                    class="mt-2 block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    {{ $ticket->email }}
                  </span>
                </div>

                <div class="sm:col-span-3">
                  <h3 class="mb-2 block text-sm font-medium text-gray-900" for="topic">{{ __('Topic') }}</h3>
                  <span
                    class="mt-2 block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    {{ $ticket->topic }}
                  </span>
                </div>

                <div class="sm:col-span-3">
                  <h3 class="mb-2 block text-sm font-medium text-gray-900" for="priority">{{ __('Priority') }}</h3>
                  <span
                    class="mt-2 block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    {{ $ticket->priority }}
                  </span>
                </div>

                <div class="sm:col-span-full">
                  <h3 class="block text-sm font-medium leading-6 text-gray-900" for="title">{{ __('Title') }}</h3>
                  <span
                    class="mt-2 block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    {{ $ticket->title }}
                  </span>

                </div>

                <div class="sm:col-span-full">
                  <h3 class="block text-sm font-medium leading-6 text-gray-900" for="details">{{ __('Details') }}</h3>
                  <span
                    class="mt-2 block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    {{ $ticket->details }}
                  </span>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
</x-admin-layout>
