<?php

namespace Arm092\LivewireDatatables;

use Closure;

class BooleanColumn extends Column
{
    public string $type = 'boolean';

    public string|Closure|array|null $callback;

    public function __construct()
    {
        parent::__construct();

        $this->callback = static fn ($value) => view('datatables::boolean', ['value' => $value]);

        $this->exportCallback = static fn ($value) => $value ? 'Yes' : 'No';
    }
}
