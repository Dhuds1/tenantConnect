@if (!$tickets->isEmpty())
@foreach ($tickets as $ticket)
  <div class="p-2 text capitalize border-l-8 shadow-[0_7px_29px_rgba(100,100,111,0.2)] w-full grid grid-cols-4 {{$ticket->status == 'closed'? 'border-red-900' : 'border-green-500'}}" >
    <div class="col-span-1">
      <h2 class=""><b>Topic</b> {{$ticket->topic}}</h2>
      <p>
        <b>Building</b>{{" $ticket->building"}}
      </p>
      <p>
        <b>Unit</b> {{"#$ticket->unit"}}
      </p>
    </div>
    <div class="col-span-2">
      <p>
        {{$ticket->details}}
      </p>
    </div>
    <div class="col-span-1 flex flex-col items-end">
      <span class="
      {{$ticket->status == 'closed'? 'text-red-900' : 'text-green-500'}}
      "
      >{{$ticket->status}}</span>
      <span class=""><b>Created</b>{{" $ticket->created_at "}}</span>
      <span class=""><b>Updated</b>{{" $ticket->updated_at "}}</span>
    </div>
  </div>
@endforeach
@else
<div class="p-4">
  No Tickets
</div>
@endif