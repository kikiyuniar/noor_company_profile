<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Msg_Controller extends Controller
{
    public function add_msg (Request $request){

         DB::table('contact')
         ->insert([
          'nama' => $request->nama,
          'email' => $request->email,
          'subject' => $request->subject,
          'msg' => $request->msg,
          'status' => 'Belum Terbaca',
          'waktu' => date('Y-m-d'),
         ]);

         return redirect()->back();

    }

    public function view_msg(){
        $view = DB::table('contact')->orderBy('id', 'DESC')->get();
        return view('page_layout.msg_client',['data' => $view]);
    }

    public function read_msg (Request $request){
       
        DB::table('contact')->where('id', $request->id)
         ->update([
          'status' => 'Terbaca',
         ]);

         $total_pesan = DB::table('contact')->where('status','Belum Terbaca')->count();

        session(['login_msg'=>$total_pesan]);

        return redirect()->back();
    }

    public function del_msg(Request $request){
        DB::table('contact')->where('id','=', $request->id)->delete();
        return redirect()->back();
    }
    
}