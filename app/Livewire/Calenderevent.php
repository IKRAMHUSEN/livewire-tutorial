<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Event;

class Calenderevent extends Component
{
    public $events;

    public function mount()
    {
        // $this->events = Event::select('id', 'title', 'start', 'end')->get()->toArray();
        $this->loadEvents();
    }

    public function loadEvents()
    {
        $this->events = Event::select('id', 'title', 'start', 'end')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.calenderevent');
    }

    #[On('eventAdded')]
    public function eventAdded($title, $start, $end)
    {
        Event::create([
            'title' => $title,
            'start' => $start,
            'end' => $end
        ]);

        $this->loadEvents();

        $this->dispatch('eventLoaded', events: $this->events);
        // $this->dispatchBrowserEvent('eventAdded', ['event' => $event]);
    }
}
