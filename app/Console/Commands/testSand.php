<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class testSand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sand';

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
        $this->info('Test SAND');
        $this->info('finished');
    }
}
