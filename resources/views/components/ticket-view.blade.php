<x-app-layout>
  <div class="w-full mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900">

        <div class="">
          <div class="grid grid-cols-5 gap-4">

            <div class="col-span-3">
              <div class="">
                <button class="text-rp-500 hover:text-rp-700" onclick="history.back()"><i
                    class="fa-solid fa-arrow-left fa-sm"></i> Back</button>
                <h1 class="text-2xl mt-2 mb-[-0.25rem] font-semibold leading-tight">
                  Viewing Ticket #{{ $ticket->id }}
                </h1>
              </div>
              <h3 class="mt-2 block text-sm font-medium leading-6 text-gray-900" for="details">
                {{__('Tags')
                }}</h3>
              <div class="flex gap-2 mt-1 mb-2">
                <span class="bg-tur-500 px-2 py-0 text-sm text-black rounded-full">
                  {{ $ticket->topic }}
                </span>
                <span class="bg-rp-500 px-2 py-0 text-sm text-white rounded-full">
                  {{ $ticket->priority }}
                </span>
              </div>
              <div class="">
                <h3 class="block text-sm font-medium leading-6 text-gray-900" for="title">{{
                  __('Subject')
                  }}</h3>
                <p class="border-gray-200 border-b-2 mb-2">
                  {{ $ticket->title }}
                </p>
                <h3 class="block text-sm font-medium leading-6 text-gray-900" for="details">
                  {{__('Message')
                  }}</h3>
                <p class="border-gray-200 mb-2 border-b-2">
                  {{ $ticket->details }}
                </p>
              </div>

            </div>
            <aside
              class="bg-gray-100 col-span-2 border-l-4 px-4 rounded-r-lg py-4 border-rp-500 capitalize flex flex-col justify-evenly">
              @if (session('success'))
              <div class="mb-4 text-md rounded-lg bg-green-100 p-4 text-green-800" role="alert">
                <span class="font-medium">{{ session('success') }}</span>
              </div>
              @endif

              <div class="">

                <h3 class="block text-sm font-medium leading-6 text-gray-900" for="tenant">{{
                  __('Tenant')
                  }}
                </h3>
                <p>
                  {{ $ticket->tenant }}
                </p>
              </div>
              <div class="">

                <h3 class="block text-sm font-medium leading-6 text-gray-900">{{ __('Building') }}</h3>
                <p class="">
                  {{ $ticket->building }} #{{ $ticket->unit }}
                </p>
              </div>
              <div class="">

                <h3 class="block text-sm font-medium leading-6 text-gray-900" for="email">{{ __('Email
                  address') }}
                </h3>
                <p>
                  {{ $ticket->email }}
                </p>
              </div>
            </aside>
          </div>
          <div class="">
            <h3>Media</h3>
            <div class="grid grid-cols-3 gap-4">
              @if ($ticket->images)
              @foreach ($ticket->images as $image)
              <img src="{{Storage::url($image)}}" alt="">
              @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>
