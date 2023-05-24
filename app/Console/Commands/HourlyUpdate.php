<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;
class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hour:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an hourly email to all the users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        Log::info('success');
        return Command::SUCCESS;
    }
}
