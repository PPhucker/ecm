<?php

namespace App\Console;

use App\Logging\Logger;
use App\Synchronization\ContractorSync;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('queue:work --tries=3 --stop-when-empty')
            ->everyMinute();

        $schedule->call(function () {
            (new ContractorSync())->sync();
        })
            ->daily();

        $schedule->call(function () {
            (new Logger())->delete();
        })
            ->daily();

        $schedule->command('backup:clean')
            ->daily()
            ->at('00:00');
        $schedule->command('backup:run')
            ->daily()
            ->at('00:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
