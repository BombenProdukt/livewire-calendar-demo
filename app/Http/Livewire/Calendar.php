<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use BombenProdukt\LivewireCalendar\Data\Event;
use BombenProdukt\LivewireCalendar\Http\Livewire\AbstractCalendar;

final class Calendar extends AbstractCalendar
{
    public function events(): Collection
    {
        return new Collection([
            new Event(
                id: 'id',
                name: 'a really long name that needs to be truncated',
                description: 'description',
                href: 'href',
                startTime: $this->selectedDateTime->clone()->startOfDay()->addHours(2),
                endTime: $this->selectedDateTime->clone()->startOfDay()->addHours(4),
            ),
            new Event(
                id: 'id',
                name: 'a really long name that needs to be truncated',
                description: 'description',
                href: 'href',
                startTime: $this->selectedDateTime->clone()->startOfDay()->addHours(6),
                endTime: $this->selectedDateTime->clone()->startOfDay()->addHours(8),
            ),
            new Event(
                id: 'id',
                name: 'a really long name that needs to be truncated',
                description: 'description',
                href: 'href',
                startTime: $this->selectedDateTime->clone()->startOfDay()->addHours(10),
                endTime: $this->selectedDateTime->clone()->startOfDay()->addHours(12),
            ),
        ]);
    }
}
