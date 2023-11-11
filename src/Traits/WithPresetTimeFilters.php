<?php

namespace Arm092\LivewireDatatables\Traits;

trait WithPresetTimeFilters
{
    public function nineToFive(): void
    {
        $this->times['start'] = '09:00:00';
        $this->times['end'] = '17:00:00';
    }

    public function sevenToSevenDay(): void
    {
        $this->times['start'] = '07:00:00';
        $this->times['end'] = '19:00:00';
    }

    public function sevenToSevenNight(): void
    {
        $this->times['start'] = '19:00:00';
        $this->times['end'] = '07:00:00';
    }

    public function graveyardShift(): void
    {
        $this->times['start'] = '22:00:00';
        $this->times['end'] = '06:00:00';
    }
}
