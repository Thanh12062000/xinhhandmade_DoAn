<?php

namespace App\Http\Controllers;
use App\sanpham;
use App\admin;
use App\danhmucsanpham;
use App\giaodich;
use App\nguoidung;
use Illuminate\Http\Request;



class Admincontroller extends Controller
{
    public function getsanpham_list(){
        $sanpham=sanpham::all();
        return view('admin.sanpham.list',compact('sanpham'));
    }
    public function getsanpham_create(){
        $loaisp=danhmucsanpham::all();
        return view('admin.sanpham.create',compact('loaisp'));
    }
    public function postsanpham_create(Request $req){
        $this->validate($req,
        [
            'Name'=>'required|min:3|max:100'
        ],
        [
            'Name.required'=>'Bạn chưa nhập Tên sản phẩm',
            'Name.min'=>'Tên sản phẩm phải có độ dài từ 3 đến 100 kí tự',
            'Name.max'=>'Tên sản phẩm phải có độ dài từ 3 đến 100 kí tự'
        ]);
        $s=new sanpham();
        $s->tensp=$req->Name;
        $s->giagoc=$req->giagoc;
        $s->giakm=$req->giakm;
        $s->ImageLink=1;
        $s->iddanhmuc=$req->loai;
        $s->luotview=$req->view;
        $s->mausac=$req->mau;
        $s->mota=$req->mota;
       // $s->TgianKtao=$s->ktao;
        $s->save();
        return redirect('admin/sanpham/create')->with('thongbao','Thêm thành công');
    }
    
    public function getsanpham_edit($id){
        $sp=sanpham::find($id);
        return view('admin.sanpham.edit',compact('sp'));
    }
    public function postsanpham_edit(Request $req,$id){
        $s=sanpham::find($id);
        $this->validate($req,
        [
            'Name'=>'required|min:3|max:100'
        ],
        [
            'Name.required'=>'Bạn chưa nhập Tên sản phẩm',
            'Name.min'=>'Tên sản phẩm phải có độ dài từ 3 đến 100 kí tự',
            'Name.max'=>'Tên sản phẩm phải có độ dài từ 3 đến 100 kí tự'
        ]);
        $s->tensp=$req->Name;
        $s->giagoc=$req->giagoc;
        $s->giakm=$req->giakm;
        $s->ImageLink=1;
        $s->iddanhmuc=$req->loai;
        $s->luotview=$req->view;
        $s->mausac=$req->mau;
        $s->mota=$req->mota;
       // $s->TgianKtao=$s->ktao;
        $s->save();
       return redirect('admin/sanpham/edit/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getsanpham_delete($id){
        $s=sanpham::find($id);
        $s->delete();
       return redirect('admin/sanpham/list')->with('thongbao','Đã xóa thành công');
    }



    
    public function getloai_list(){
        $loai=danhmucsanpham::all();
        return view('admin.loaisp.list',compact('loai'));
    }
    public function getloai_create(){
        return view('admin.loaisp.create');
    }
    public function postloai_create(Request $req){
        $this->validate($req,
        [
            'Name'=>'required|min:3|max:100'
        ],
        [
            'Name.required'=>'Bạn chưa nhập Tên sản phẩm',
            'Name.min'=>'Tên danh mục phải có độ dài từ 3 đến 100 kí tự',
            'Name.max'=>'Tên danh mục phải có độ dài từ 3 đến 100 kí tự'
        ]);
        $s=new danhmucsanpham();
        $s->tendanhmuc=$req->Name;
        $s->danhmucsanpham=$req->danhmuc;
        $s->save();
        return redirect('admin/loaisp/create')->with('thongbao','Thêm thành công');
    }
    public function getloai_edit($id){
        $loai=danhmucsanpham::find($id);
        return view('admin.loaisp.edit',compact('loai'));
    }
    public function postloai_edit(Request $req,$id){
        $s=danhmucsanpham::find($id);
        $this->validate($req,
        [
            'Name'=>'required|min:3|max:100'
        ],
        [
            'Name.required'=>'Bạn chưa nhập Tên sản phẩm',
            'Name.min'=>'Tên sản phẩm phải có độ dài từ 3 đến 100 kí tự',
            'Name.max'=>'Tên sản phẩm phải có độ dài từ 3 đến 100 kí tự'
        ]);
        $s->tendanhmuc=$req->Name;
        $s->danhmucsanpham=$req->danhmuc;
        $s->save();
        return redirect('admin/loaisp/edit/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getloai_delete($id){
        $s=danhmucsanpham::find($id);
        $s->delete();
       return redirect('admin/loaisp/list')->with('thongbao','Đã xóa thành công');
    }



    public function getthongke_ngay(){
        return view('admin.thongke.ngay');
    }
    public function postthongke_ngay(Request $req){
        $this->validate($req,
        [
            'ngay'=>'required|integer',
            'thang'=>'required|integer',
            'nam'=>'required|integer'
        ],
        [
            'ngay.required'=>'Bạn chưa nhập Ngày',
            'thang.required'=>'Dữ liệu Tháng không được trống',
            'nam.required'=>'Năm không thể trống',
            'ngay.integer'=>'Bạn phải nhập 1 số',
            'thang.integer'=>'Bạn phải nhập 1 số',
            'nam.integer'=>'Bạn phải nhập 1 số',
        ]);

       
        $d=$req->ngay;
        $m=$req->thang;
        $y=$req->nam;
        $time=$y.'-'.$m.'-'.$d;
        $giaodich=giaodich::whereDate('created_at',$time)->get();
        $tong =$giaodich->sum('tongtien');
        return view('admin.thongke.listngay',compact('giaodich','d','m','y','tong'));
    }

    public function getthongke_thang(){
        return view('admin.thongke.thang');
    }
    public function postthongke_thang(Request $req){
        $this->validate($req,
        [
            
            'thang'=>'required|integer',
            'nam'=>'required|integer'
        ],
        [
            
            'thang.required'=>'Dữ liệu Tháng không được trống',
            'nam.required'=>'Năm không thể trống',
            
            'thang.integer'=>'Bạn phải nhập 1 số',
            'nam.integer'=>'Bạn phải nhập 1 số',
        ]);
        $m=$req->thang;
        $y=$req->nam;
        $giaodich1 = giaodich::select('SELECT  date(created_at)as ngay, sum(tongtien) as tong, count(id) as sodonhang
                                FROM giaodich 
                                WHERE month(created_at)=7 and year(created_at)=2020
                                GROUP by date(created_at)');

        // $giaodich=xinhhandmade::table('giaodich')->select(giaodich::raw('date(created_at) as ngay'), giaodich::raw('sum(tongtien) as tong'),giaodich::raw('count(id) as sodonhang') )
        //                                 ->where( giaodich::raw('month(created_at)'),$m .'and'.  giaodich::raw('year(created_at)'),$y)
        //                                 ->groupby(giaodich::raw('date(created_at)as ngay'))
        //                                 ->get();
       ///$tong =$giaodich->sum('tong');
        return view('admin.thongke.listthang',compact('giaodich1','m','y'));
    }

    public function getnguoidung(){
        $nd=nguoidung::all();
        return view('admin.user.listnguoidung', compact('nd'));
    }
    public function getadmin(){
        $ad=admin::all();
        return view('admin.user.listadmin', compact('ad'));
    }

}
