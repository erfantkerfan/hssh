<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $tables = ['educationals', 'messages', 'news', 'preregisters', 'sliders', 'teachers', 'videos', 'users'];
            foreach ($tables as $table) {
                $query = 'delete from ' . $table . ' where deleted_at IS NOT NULL';
                DB::delete($query);
            }
        })->everyTenMinutes()->timezone('Asia/Tehran');
        $schedule->command('backup:mysql-dump hsshohada')
            ->everyTenMinutes('2:00')->timezone('Asia/Tehran');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected
    function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
