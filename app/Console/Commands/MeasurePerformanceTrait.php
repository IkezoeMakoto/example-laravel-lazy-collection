<?php
namespace App\Console\Commands;

trait MeasurePerformanceTrait
{
    protected $times;
    protected $memories;

    public function startPerformance()
    {
        $this->times['start'] = hrtime(true);
        $this->memories['start'] = memory_get_usage();
    }

    public function endPerformance()
    {
        $this->times['end'] = hrtime(true);
        $this->memories['end'] = memory_get_usage();
    }

    public function printPerformance()
    {
        $time = $this->times['end'] - $this->times['start'];
        $memory = $this->memories['end'] - $this->memories['start'];
        $this->info('Time(ms): ' . $time/1e+6);
        $this->info('Memory: ' . $this->convert($memory));
        $this->info('Peak Memory: ' . $this->convert(memory_get_peak_usage()));
    }

    public function convert($size)
    {
        $unit = array('b','kb','mb','gb','tb','pb');
        return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
    }

    public function case1($collection)
    {
        $counter = 0;
        $collection = $collection
            ->filter(function ($i) {
                return $i % 2 === 0;
            })
            ->values()
            ->map(function ($i) {
                return $i * 3;
            })
            ->chunk(3)
            ->each(function () use (&$counter) {
                $counter++;
            })
            ->take(10)
            ->collect();
        $this->info("each呼び出し回数: $counter");
        return $collection;
    }

    public function case2($collection)
    {
        $counter = 0;
        $collection = $collection
            ->filter(function ($i) {
                return $i % 2 === 0;
            })
            ->values()
            ->map(function ($i) {
                return $i * 3;
            })
            ->chunk(3)
            ->tapEach(function () use (&$counter) {
                $counter++;
            })
            ->take(10)
            ->collect();
        $this->info("each呼び出し回数: $counter");
        return $collection;
    }
}
