<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
    	'body', 'sender_id', 'resever_id', 'sent', 'deleverd', 'seen',
    ];
}
