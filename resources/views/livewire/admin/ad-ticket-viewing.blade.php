<x-admin-layout>
    <div class="w-full mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="">
                    <button class="text-rp-500 hover:text-rp-700" onclick="history.back()"><i class="fa-solid fa-arrow-left fa-sm"></i> Back</button>
                    <h1 class="text-2xl mt-2 mb-[-0.25rem] font-semibold leading-tight">
                        Viewing Ticket #{{ $ticket->id }}
                    </h1>
                </div>
                <div class="">
                    <div class="grid grid-cols-5 gap-4">
                        <div class="col-span-3">
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
                            <div class="">
                                <h3>Media</h3>
                                <div class="flex gap-4 flex-wrap">

                                    <div class="p-5 border-rp-500 border-2 aspect-square">
                                        test
                                    </div>
                                </div>
                            </div>
                        </div>
                        <aside
                            class="bg-gray-100 col-span-2 border-l-4 px-4 rounded-r-lg border-rp-500 capitalize flex flex-col justify-evenly">
                            <form class="">
                                <label class="block text-xl font-medium leading-6 mb-2 text-gray-900" for="status">{{
                                    __('Change
                                    Status')
                                    }}</label>
                                <select id="status" name="status"
                                    class="py-1 px-4 rounded border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rp-600 sm:text-sm sm:leading-6">
                                    <option value="Open" selected>Open</option>
                                    <option value="reviewing">Reviewing</option>
                                    <option value="accepted">Accepted</option>
                                    <option value="closed">Closed</option>
                                    <option value="archived">Archived</option>
                                </select>
                            </form>
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
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
