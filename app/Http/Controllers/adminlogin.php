<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\admin;
class adminlogin extends Controller
{
    
    public function getdangnhap(){
        return view('admin.dangnhap');
    }
    public function postdangnhap(Request $req){
        
        $this->validate($req,
        [
            'name'=>'required|min:3|max:100',
            'pass'=>'required|min:3'
        ],
        [
            'name.required'=>'Bạn chưa nhập Tên sản phẩm',
            'name.min'=>'Tên sản phẩm phải có độ dài từ 3 đến 100 kí tự',
            'name.max'=>'Tên sản phẩm phải có độ dài từ 3 đến 100 kí tự',
            'pass.required'=>'Bạn chưa nhập password',
            'pass.min'=>'Tên sản phẩm phải có độ dài lớn hơn 3 kí tự',
            
        ]);
        if(Auth::attempt(['name'=>$req->email,'pass'=>$req->password]))
        {
            return redirect('admin/sanpham/list');
        }
        else
        {
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');

        }
        
    }
    

}
