@if (!$tickets->isEmpty())
@foreach ($tickets as $ticket)
<div
  class="px-6 py-2 h-52 text capitalize shadow-md border-2 w-full grid grid-cols-5 border-l-8 {{$ticket->status == 'closed'? 'border-l-red-900' : 'border-l-green-500'}}">
  <div class="col-span-2">
    <a href="#" class="text-blue-700 hover:text-blue-900 underline text-md font-bold">{{$ticket->title}}</a>
    <p class="text-sm">
      {{$ticket->tenant}}
    </p>
  </div>
  <div class="col-span-1 flex flex-col">
    <div class="">
      <h3 class="font-semibold">Topic</h3>
      <p class="text-sm">{{$ticket->topic}}</p>
    </div>
    <div class="">
      <h3 class="font-semibold">Created & Updated:</h3>
      <p class="text-sm">{{$ticket->created_at}}<br>{{$ticket->updated_at}}</p>
    </div>
  </div>
  <div class="col-span-1">
    <h3 class="font-semibold">Building</h3>
    <p class="text-sm">{{$ticket->building}}</p>
    <h3 class="font-semibold">Unit</h3>
    <p class="text-sm">#{{$ticket->unit}}</p>
  </div>
  <div class="col-span-1">
    <h3 class="font-semibold">Priority</h3>
    <span class="text-sm
    @switch($ticket->priority)
        @case('low')
            @break
        @case('med')
          text-yellow-400
            @break
        @case('high')
            text-orange-500 font-bold
            @break
        @case('urgent')
            text-red-600 font-bold
            @break
        @default
            
    @endswitch ">
    {{$ticket->priority}}
  </span>
  <h3 class="font-semibold">Ticket Status</h3>
    <span class="text-sm
      {{$ticket->status == 'closed'? 'text-red-900' : 'text-green-500'}}
      ">{{$ticket->status}}</span>
  </div>
</div>
@endforeach
@else
<div class="p-4">
  No Tickets
</div>
@endif