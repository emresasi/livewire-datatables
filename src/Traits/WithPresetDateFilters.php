<?php

namespace Arm092\LivewireDatatables\Traits;

trait WithPresetDateFilters
{
    public function lastMonth(): void
    {
        $this->dates['start'] = now()->subMonth()->startOfMonth()->format('Y-m-d');
        $this->dates['end'] = now()->subMonth()->endOfMonth()->format('Y-m-d');
    }

    public function lastQuarter(): void
    {
        $this->dates['start'] = now()->subQuarter()->startOfQuarter()->format('Y-m-d');
        $this->dates['end'] = now()->subQuarter()->endOfQuarter()->format('Y-m-d');
    }

    public function lastYear(): void
    {
        $this->dates['start'] = now()->subYear()->startOfYear()->format('Y-m-d');
        $this->dates['end'] = now()->subYear()->endOfYear()->format('Y-m-d');
    }

    public function monthToToday(): void
    {
        $this->dates['start'] = now()->subMonth()->addDay()->format('Y-m-d');
        $this->dates['end'] = now()->format('Y-m-d');
    }

    public function quarterToToday(): void
    {
        $this->dates['start'] = now()->subQuarter()->addDay()->format('Y-m-d');
        $this->dates['end'] = now()->format('Y-m-d');
    }

    public function yearToToday(): void
    {
        $this->dates['start'] = now()->subYear()->addDay()->format('Y-m-d');
        $this->dates['end'] = now()->format('Y-m-d');
    }
}
