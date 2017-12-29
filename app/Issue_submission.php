<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue_submission extends Model
{

	
     protected $table='quote_comment_thread';
     protected $fillable = ['uid', 'user_name', 'quote_id','text','flag'];
     public $timestamps = True;

}
