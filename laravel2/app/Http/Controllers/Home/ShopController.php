<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(234);
        // $a = session('u_power');
        // dd($a);
        // dd(11);
        $ob = DB::table('image')->where('i_address','商城首页')->get();
        // dd($ob);
        $con = DB::table('config')->where('name',2)->first();
  // dd($con);

        return view('Home.shop',['list'=>$ob,'con'=>$con]);
    }

}