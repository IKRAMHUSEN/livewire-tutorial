<div>
    <div id="calendar" wire:ignore></div>
</div>

@script
<script>
    const calendarEl = $wire.$el.querySelector('#calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true,
        events: @json($events),
        select: function(info) {
           var title = prompt('Enter Event Title:');
           console.log(title);

           Livewire.dispatch('eventAdded', {
               title: title,
               start: info.startStr,
               end: info.endStr
           });

           Livewire.on('eventLoaded', function(events) {
               calendar.removeAllEvents(events);
               calendar.addEventSource(events);
           });
        },
    });

    calendar.render();
</script>
@endscript
