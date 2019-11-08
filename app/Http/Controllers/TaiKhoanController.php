<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\TaiKhoan;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $taikhoan=DB::table('tai_khoans')->whereNull('deleted_at')->get();
        return view('dangnhap',compact('taikhoan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('them-moi-tai-khoan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $tai_khoan=new TaiKhoan();
        $tai_khoan->cau_hoi=$request->cau_hoi;
        $tai_khoan->dap_an_a=$request->dap_an_a;
        $tai_khoan->dap_an_b=$request->dap_an_b;
        $tai_khoan->dap_an_c=$request->dap_an_c;
        $tai_khoan->dap_an_d=$request->dap_an_d;
          $tai_khoan->dap_an_dung=$request->dap_an_dung;
            $tai_khoan->linh_vuc=$request->linh_vuc;
        $tai_khoan->save();
        return redirect('/cau-hoi')->with('success','thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $taikhoan=TaiKhoan::find($id);
         $taikhoan->cau_hoi;
          $tai_khoan->dap_an_a;
           $tai_khoan->dap_an_b;
            $tai_khoan->dap_an_c;
             $tai_khoan->dap_an_d;
              $tai_khoan->dap_an_dung;
               $tai_khoan->linh_vuc;
         return view('update-cau-hoi',compact('cau_hoi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $taikhoan=TaiKhoan::find($id);
         $taikhoan->cau_hoi=$request->cau_hoi;
         $taikhoan->dap_an_a=$request->dap_an_a;
         $taikhoan->dap_an_b=$request->dap_an_b;
         $taikhoan->dap_an_c=$request->dap_an_c;
         $taikhoan->dap_an_d=$request->dap_an_d;
         $taikhoan->dap_an_dung=$request->dap_an_dung;
         $taikhoan->linh_vuc=$request->linh_vuc;
         $taikhoan->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taikhoan=TaiKhoan::find($id);
        $taikhoan->delete();
         return redirect('/tai-khoan')->with('success','xóa thành công');
    }
     public function thungrac()
    {
          $taikhoan=TaiKhoan::onlyTrashed()->get();
        return view('thung-rac-tai-thoan',compact('taikhoan'));

    }

    public function phuchoi($id)
    {   
        $taikhoan=TaiKhoan::onlyTrashed($id)->restore();
      
 return redirect('/tai-khoan')->with('success','phục hồi thành công');
    }

    public function KTtai_khoan($id,Request $request){
         $taikhoan=TaiKhoan::find($id);
   @foreach($tai_khoan as $tai_khoan)
   if($tai_khoan->ten_dang_nhap==$request->ten_dang_nhap&&$tai_khoan->mat_khau==$request->mat_khau)
   {
     return redirect('/')->with('success','Đăng nhập thành công');
   }
   else{
    echo "ten dang nhap hoac mat khau sai";
   }
}
