<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use function Psy\debug;

class ExampleCollection extends Command
{
    use MeasurePerformanceTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'measure:collection {number=1000}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $number = $this->argument('number');
        // Collection
        $collection = Collection::times($number);

        $this->startPerformance();
        $this->case1($collection);
        $this->endPerformance();

        $this->printPerformance();
    }
}
