<?php

namespace Arm092\LivewireDatatables;

class JsonColumn extends Column
{
    public string $type = 'json';

    public string|\Closure|array|null $callback;

    public function __construct()
    {
        parent::__construct();
        $this->callback = static function ($value) {
            return $value ? implode(', ', json_decode($value, false, 512, JSON_THROW_ON_ERROR)) : null;
        };
    }
}
