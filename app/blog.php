<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table ="Blog";
    public function Danhmucsanpham(){
    	return $this->belongTo('app\danhmucsanpham','loai','id');
    }
    
}
