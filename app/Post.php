<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';
    //Primary key
    protected $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    //search the product name 
    public function scopeSearch($query, $search_product){
        
        $result = $query->where('title', 'like', '%' .$search_product. '%');
        return $result;
    }

    //search the product category (not functional)
    public function scopeCategory($query, $search_category){

        // $search_category = Input::get('search_category'); 
        $result = $query->where('category', 'like', '%' .$search_category. '%');
        return $result;
    }
}
