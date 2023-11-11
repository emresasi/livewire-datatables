<?php

namespace Arm092\LivewireDatatables\Tests\Classes;

use Illuminate\Database\Eloquent\Model;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Tests\Models\DummyModel;

class DummyTable extends LivewireDatatable
{
    public $perPage = 10;
    public string|null|Model $model = DummyModel::class;

    public function getColumns(): array|Model
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->linkTo('dummy_model', 6),

            Column::name('subject')
                ->filterable(),

            Column::name('category')
                ->filterable(['A', 'B', 'C']),

            Column::name('body')
                ->truncate()
                ->filterable(),

            BooleanColumn::name('flag')
                ->filterable(),

            DateColumn::name('expires_at')
                ->label('Expiry')
                ->format('jS F Y')
                ->hide(),

            Column::name('dummy_has_one.name')
                ->label('Relation'),

            Column::name('subject AS string')
                    ->label('BooleanFilterableSubject')
                    ->booleanFilterable()
                    ->hide(),
        ];
    }
}
