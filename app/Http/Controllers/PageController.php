<?php

namespace App\Http\Controllers;
use App\sanpham;
use App\danhmucsanpham;
use App\slide;
use App\blog;
use App\Cart;
use Session;
//use App\Http\Request;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide=slide::all();
        $sp=sanpham::all();
    	$vt=sanpham::where('iddanhmuc',1)->get();
        $th=sanpham::where('iddanhmuc',2)->get();
        $len=sanpham::where('iddanhmuc',3)->get();
        $dc=sanpham::where('iddanhmuc',4)->get();
        $blog=blog::take(3)->get();
    	return view('page.trangchu',compact ('slide','sp','vt','th','len','dc','blog'));
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
        $linkimage=$sanpham->ImageLink.'.jpg';
    	return view('page.chitietsp',compact ('sanpham','linkimage'));
    }
    public function getBlog(){
        $blog=blog::take(3)->get();
        $vt=blog::where('loai',1)->get();
        $th=blog::where('loai',2)->get();
        $len=blog::where('loai',3)->get();
        $dc=blog::where('loai',4)->get();
        
    	return view('page.blog',compact ('blog','vt','th','len','dc'));
    }

    public function getChitietblog($id){
        $blog=blog::where('id',$id)->first();
        $linkimage=$blog->ImageLink;
    	return view('page.chitietblog',compact ('blog','linkimage'));
    }
    public function getSearchblog(Request $req){
        $blog= blog::where('tieude','like','%'.$req->keyyy.'%')
                                ->orwhere('tacgia','like','%'.$req->keyyy.'%')
                                ->get();
        return view('page.searchblog',compact('blog'));

    }


    public function getAddtoCart(Request $req,$id){
        $product =sanpham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getGiohang(){
       
        return view('page.giohang');
    }
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }


}
