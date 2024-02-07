<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Ticket Center') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 flex gap-4 text-gray-900">

          <form class="mx-auto w-3/5">
            <div class="space-y-12">
              <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Ticket Information</h2>
                <p class="text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>
              </div>
              <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                
                <div class="sm:col-span-3">
                  <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                  <input type="text" name="name" id="name" autocomplete="full-name"
                    value="{{ $user->name }}"
                    class="block w-full rounded-md mt-2 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>

                <div class="sm:col-span-2">
                  <label for="building" class="block text-sm font-medium leading-6 text-gray-900">Building</label>
                  <select id="countries"
                    class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option selected>Select Building</option>
                    <option value="collie">Collie</option>
                    <option value="hound">Hound</option>
                    <option value="beagle">Beagle</option>
                    <option value="sheperd">Sheperd</option>
                  </select>
                </div>

                <div class="sm:col-span-1">
                  <label for="unit" class="block text-sm font-medium leading-6 text-gray-900">Unit Number</label>
                  <div class="flex mt-2 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"># </span>
                    <input type="text" inputmode="numeric" data-input-counter name="unit" id="unit" autocomplete="unit-number" value="{{ $user->unit }}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                  </div>
                </div>

                <div class="sm:col-span-full">
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email"
                      value="{{ $user->email}}"
                      class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>

                <div class="sm:col-span-3">
                  <label for="building" class="block mb-2 text-sm font-medium text-gray-900">Topic</label>
                  <select id="building"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset mt-2 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option selected>Select Topic</option>
                    <option value="building">Building</option>
                    <option value="floor">Floor</option>
                    <option value="unit">Unit</option>
                    <option value="suggestion">Suggestion</option>
                    <option value="concerns">Concerns</option>
                  </select>
                </div>

                <div class="sm:col-span-3">
                  <label for="priority" class="block mb-2 text-sm font-medium text-gray-900">Priority</label>
                  <select id="priority"
                    class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option selected>Select Topic</option>
                    <option value="low">Low</option>
                    <option value="med">Medium</option>
                    <option value="high">High</option>
                    <option value="urgent">Urgent</option>
                  </select>
                </div>

                <div class="sm:col-span-full">
                  <label for="details" class="block text-sm font-medium leading-6 text-gray-900">Details</label>
                  <textarea id="details" name="details" type="details" rows="10" autocomplete="details"
                    class="block w-full rounded-md mt-2 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </textarea>
                </div>

              </div>
              <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit"
                  class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
              </div>
          </form>
        </div>
      </div>
    </div>
</x-app-layout>