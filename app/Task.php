<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function adminid(){
      return $this->belongsTo('App\User', 'admin_id');
    }




}
