<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public $primaryKey = 'id';
    public $timestamps = true;

    //public function user(){
    //    return $this->belongsTo('App\User');
    //}
}
