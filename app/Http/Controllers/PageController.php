<?php

namespace App\Http\Controllers;
use App\sanpham;
use App\danhmucsanpham;
//use App\Http\Request;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $sp=sanpham::all();
    	$vt=sanpham::where('iddanhmuc',1)->get();
        $th=sanpham::where('iddanhmuc',2)->get();
        $len=sanpham::where('iddanhmuc',3)->get();
        $dc=sanpham::where('iddanhmuc',4)->get();
    	return view('page.trangchu',compact ('sp','vt','th','len','dc'));
    }
    public function getSanPham(){
        $sp=sanpham::all();
        $vt=sanpham::where('iddanhmuc',1)->paginate(4);
        $th=sanpham::where('iddanhmuc',2)->get();
        $len=sanpham::where('iddanhmuc',3)->get();
        $dc=sanpham::where('iddanhmuc',4)->get();
        
    	return view('page.SanPham',compact ('sp','vt','th','len','dc'));
    }
    public function getSearch(Request $req){

        $sanpham= sanpham::where('tensp','like','%'.$req->keyyy.'%')
                                ->orwhere('giakm',$req->keyyy)
                                ->get();
        return view('page.search',compact('sanpham'));

    }
    public function getChitiet($id){
        $sanpham=sanpham::where('id',$id)->first();
    	return view('page.chitietsp',compact ('sanpham'));
    }
    public function getURL(Request $req){
        return $req->path();
    }
    public function postform(Request $req){
        echo $req->HoTen;
    }
}
