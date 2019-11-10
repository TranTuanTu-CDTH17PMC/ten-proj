<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function DangNhap()
    {
    	return view('dang-nhap');
    }

    public function XuLyDangNhap(Request $request)
    {
    	$ten_dang_nhap = $request->ten_dang_nhap;
    	$mat_khau = $request->mat_khau;
$Admin=Admin::where('ten_dang_nhap',$ten_dang_nhap)->first();
if($Admin==null){
    return "sai ten dang nhap";
}
if(!Hash::check($mat_khau,$Admin->mat_khau)){
    return "sai ten mat khau";
}
else{
    	  return redirect('/')->with('success','cập nhật thành công');



    }
}
}
