@if (!$tickets->isEmpty())
@foreach ($tickets as $ticket)
  <div>
    {{$ticket->details}}
  </div>
@endforeach
@else
<div>
  No Tickets
</div>
@endif