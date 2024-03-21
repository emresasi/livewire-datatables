<?php

namespace Arm092\LivewireDatatables\Commands;

use Illuminate\Support\Facades\File;
use Livewire\Features\SupportConsoleCommands\Commands\FileManipulationCommand;

class MakeDatatableCommand extends FileManipulationCommand
{
    protected $signature = 'make:livewire-datatable {name} {--model=}';

    protected $description = 'Create a new Livewire Datatable';

    public function handle(): void
    {
        $this->parser = new ComponentParser(
            config('livewire.class_namespace', 'App\\Livewire').'\\Datatables',
            $this->argument('name'),
            $this->option('model')
        );

        if ($this->isReservedClassName($name = $this->parser->className())) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS! </> 😳 \n");
            $this->line("<fg=red;options=bold>Class is reserved:</> $name");

            return;
        }

        $class = $this->createClass();

        //        $this->refreshComponentAutodiscovery();

        $this->line("<options=bold,reverse;fg=green> COMPONENT CREATED </> 🤙\n");
        $class && $this->line("<options=bold;fg=green>CLASS:</> {$this->parser->relativeClassPath()}");
    }

    protected function createClass(): bool
    {
        $classPath = $this->parser->classPath();

        if (File::exists($classPath)) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS-IE-TOOTLES </> 😳 \n");
            $this->line("<fg=red;options=bold>Class already exists:</> {$this->parser->relativeClassPath()}");

            return false;
        }

        $this->ensureDirectoryExists($classPath);

        File::put($classPath, $this->parser->classContents());

        return $classPath;
    }

    //    public function refreshComponentAutodiscovery()
    //    {
    //        app(LivewireComponentsFinder::class)->build();
    //    }

    public function isReservedClassName($name): bool
    {
        return in_array($name, ['Parent', 'Component', 'Interface']);
    }
}
