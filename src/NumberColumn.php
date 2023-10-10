<?php

namespace Mediconesystems\LivewireDatatables;

class NumberColumn extends Column
{
    public string $type = 'number';
    public string $headerAlign = 'right';
    public string $contentAlign = 'right';
    public $round;

    public function round($places = 0): self
    {
        $this->round = $places;

        $this->callback = function ($value) {
            return round($value, $this->round);
        };

        return $this;
    }

    public function format(int $places = 0): self
    {
        $this->callback = function ($value) use ($places) {
            return number_format($value, $places, '.', ',');
        };

        return $this;
    }
}
