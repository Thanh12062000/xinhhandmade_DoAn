<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table ="Sanpham";
    public function Danhmucsanpham(){
    	return $this->belongTo('app\danhmucsanpham','id-danhmuc','id');
    }
    public function Donhang(){
    	return $this->hasmany('app\donhang','id-sp','id');
    }
   
    
}
