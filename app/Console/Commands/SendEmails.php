<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendmail:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will be delete ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

      date_default_timezone_set('Asia/Kolkata');
      $qu=DB::table('firecal_quote_master')->select('datetime_created','is_approve','mail_status','quote_id')->where('is_approve','=','1')->get();
foreach ($qu as $key => $value) {

  if($value->is_approve==1 && $value->mail_status==1){
 
      $time_ago = strtotime($value->datetime_created);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

                 if($minutes>2 ){
                   DB::table('firecal_quote_master')
                    ->where('quote_id',$value->quote_id)
                    ->update(['mail_status' =>0,'datetime_created'=>date('Y-m-d H:i:s')]);

               }
         }
    
  }


}



}
