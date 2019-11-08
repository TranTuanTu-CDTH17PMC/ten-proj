<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CauHoi;
use App\LinhVuc;

class CauHoiController extends Controller
{
   
    public function index()
    {
         $linhvuc = LinhVuc::all();
         $cauhoi=DB::table('cau_hois')->whereNull('deleted_at')->get();
        return view('ds-cau-hoi',compact('cauhoi','linhvuc'));
    }

   
    public function create()
    {
      $linhvuc = LinhVuc::all();
         return view('them-moi-cau-hoi',compact('linhvuc'));
     }
       

    
    public function store(Request $request)
    {
        $linhvuc = LinhVuc::all();
        $cau_hoi=new CauHoi();
        $cau_hoi->cau_hoi=$request->cau_hoi;
        $cau_hoi->dap_an_a=$request->dap_an_a;
        $cau_hoi->dap_an_b=$request->dap_an_b;
        $cau_hoi->dap_an_c=$request->dap_an_c;
        $cau_hoi->dap_an_d=$request->dap_an_d;
        $cau_hoi->dap_an_dung=$request->dap_an_dung;
        $cau_hoi->linh_vuc_id=$request->linh_vuc_id;
        $cau_hoi->save();
        return view('ds-cau-hoi',compact('linhvuc','cau_hoi'));
    }
    

  
    public function edit($id)
    {
        $cau_hoi=CauHoi::find($id);
         $cau_hoi->cau_hoi;
          $cau_hoi->dap_an_a;
           $cau_hoi->dap_an_b;
            $cau_hoi->dap_an_c;
             $cau_hoi->dap_an_d;
              $cau_hoi->dap_an_dung;
               $cau_hoi->linh_vuc;
         return view('update-cau-hoi',compact('cau_hoi'));
    }

    public function update(Request $request, $id)
    {
         $cauhoi=CauHoi::find($id);
         $cauhoi->cau_hoi=$request->cau_hoi;
         $cauhoi->dap_an_a=$request->dap_an_a;
         $cauhoi->dap_an_b=$request->dap_an_b;
         $cauhoi->dap_an_c=$request->dap_an_c;
         $cauhoi->dap_an_d=$request->dap_an_d;
         $cauhoi->dap_an_dung=$request->dap_an_dung;
         $cauhoi->linh_vuc=$request->linh_vuc;
         $cauhoi->save();
      
       
       return redirect('/cau-hoi')->with('success','cập nhật thành công');
    }

   
    public function destroy($id)
    {
        $cauhoi=CauHoi::find($id);
        $cauhoi->delete();
         return redirect('/cau-hoi')->with('success','xóa thành công');
    }
     public function thungrac()
    {
          $cauhoi=CauHoi::onlyTrashed()->get();
        return view('thung-rac-cau-hoi',compact('cauhoi'));

    }

    public function phuchoi($id)
    {   
        //$cauhoi=LinhVuc::onlyTrashed($id)->restore();

          CauHoi::withTrashed()->where('id',$id)->restore();
      
 return redirect('/cau-hoi')->with('success','phục hồi thành công');
    }
}
