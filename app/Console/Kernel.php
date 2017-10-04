<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\SendEmails::class,
              
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
 
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

         $schedule->command('sendmail:command')->everyMinute();


 
                 $schedule->exec('echo "Hello World....."' )
               ->everyMinute()
              ->appendOutputTo(storage_path('logs/examplecommand.log'));


            //  $schedule->call(function () {
            // DB::table('firecal_quote_master')->where('is_approve',0)->delete();
            //   })->everyMinute();
            
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
