<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //Table name
    protected $table = 'reports';
    //Primary key
    protected $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true;

    public function post(){
        return $this->belongsTo('App\User');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
