<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />


<!-- This is an example component -->
<div class="">
    <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button
                class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active"
                id="All-tab" data-tabs-target="#All" type="button" role="tab" aria-controls="All"
                aria-selected="true">All</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                id="active-tab" data-tabs-target="#active" type="button" role="tab" aria-controls="active"
                aria-selected="false">Active</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                id="Closed-tab" data-tabs-target="#Closed" type="button" role="tab" aria-controls="Closed"
                aria-selected="true">Closed</button>
        </li>
    </ul>
    <div id="myTabContent">
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800" id="All" role="tabpanel" aria-labelledby="All-tab">
            <x-ticket-item :tickets="$tickets=auth()->user()->get_tickets()" />
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="active" role="tabpanel"
            aria-labelledby="active-tab">
            <x-ticket-item :tickets="$tickets=auth()->user()->open_tickets()" />
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="Closed" role="tabpanel"
            aria-labelledby="Closed-tab">
            <x-ticket-item :tickets="$tickets=auth()->user()->closed_tickets()" />
        </div>
    </div>
</div>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>