<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\LazyCollection;

class ExampleLazyCollection extends Command
{
    use MeasurePerformanceTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'measure:lazy-collection {number=1000}';

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
        // Lazy Collection
        $collection = LazyCollection::times($number);

        $this->startPerformance();
//        $this->case1($collection);
        $this->case2($collection);
        $this->endPerformance();

        $this->printPerformance();
    }
}
