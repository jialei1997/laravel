<?php

namespace App\Http\Controllers\Admin;

use App\Model\Sort;
use App\Model\Good;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use DB;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(123);
         //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('good');
        //判断是否有搜索条件
        if($request->has('g_name')){
            //获取搜索的条件
            $name = $request->input('g_name');
            //添加到将要携带到分页中的数组中
            $where['g_name'] = $name;
            //给查询添加where条件
            $ob->where('g_name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(5);

        return view('Admin.Good.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

  
    public function doget(Request $request)
    {
        // echo 23;
       // echo $request->input('s_upid');
        $list = DB::table('sort')->where('s_upid',$request->input('s_upid'))->get();
        echo json_encode($list);
    }
    public function dopost(Request $request)
    {
      
        $list = DB::table('sort')->where('s_upid',$request->input('s_upid'))->get();
        // echo ($list);
        echo json_encode($list);
    }

        public function create()
    {
        //
        $list = DB::table('sort')->where('s_upid','0')->get();
        return view('Admin.Good.add',['list'=>$list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $good = new Good();
        $data = $request->except('_token');
// dd($data);
        // 单传
        $dat = $request->file('g_image');
        // dd($dat);
        if($dat){
           
                 $ext = $dat->getClientOriginalExtension();
                $fileu_name = time().rand('1000','9999').'.'.$ext; 
                $dat->move('./admin/uploads',$fileu_name);
                $data['g_image'] = $fileu_name;
        }
            // 多传
        $dat = $request->file('g_imgs');
           if($dat){
            foreach ($dat as $k => $v) {
                if($v)
                {
                        $ext = $v->getClientOriginalExtension();
                        // 设成图片数组，每次一张添加到数组
                        $filename[] = time().rand('1000','9999').'.'.$ext;
                        $v->move('./admin/uploads',$filename[$k]);
                } 
            }  
            // dd($filename);         
        $imgs = implode(',',$filename);
        $data['g_imgs'] = $imgs;
           }
            
        $upid = $data['sort'][0];
        $sid = $data['sort'][1];

        $data['s_upid'] = $upid;
        $data['s_id'] = $sid;
        unset($data['sort']);
        // dd($data);
        $id = DB::table('good')->insertGetId($data);
        if($id>0){
            return redirect("admin/good")->with('msg','添加成功');          
        }else{
            return back()->with('error','添加失败');
        }

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


        $data = DB::table('good')->where('g_id',$id)->first();

        $imgs = explode(',',$data->g_imgs);
      // dd($imgs);

        $sort = DB::table('sort')->where('s_upid',0)->get();
       // dd($data);
        return view('Admin.Good.edit',['ob'=>$data,'sort'=>$sort,'imgs'=>$imgs]);

         
        // $cates = Cate::where('pid','0')->get();
        // return view('admin.goods.update',['good'=>$good,'cates'=>$cates,'title'=>'修改详情']);
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
        //
        // $ob = DB::table('good')->where('g_color',$id)->get();
        // dd($ob);
        $dat = $request->file('g_image');
        if($dat){
            $ext = $dat->getClientOriginalExtension();
            $fileu_name = time().rand('1000','9999').'.'.$ext; // dd($fileu_name);
            $dat->move('./admin/uploads',$fileu_name);
            $data = $request->except('_token','_method');
            $data['g_image'] = $fileu_name;
        }else{
            $data = $request->except('_token','_method');
        }

             // 多传

       // 含多图为二维数组
        $data = $request->except('_token','_method');
        // 要修改的图片是一维数组
        $dat = $request->file('g_imgs');
        // dd($dat);
        //  dd($data);
        if($dat){
            foreach ($dat as $k => $v) {
                // 获取要修改图片数组中一个图片 即$v
                if($v)
                {
                    $ext = $v->getClientOriginalExtension();
                    // 设成图片数组，每次一张添加到数组
                    $filename[] = time().rand('1000','9999').'.'.$ext;
                    
                    $v->move('./admin/uploads',$filename[$i]);
                } 
            }  
            $data = $request->except('_token','_method');
                    
            $imgs = implode(',',$filename);
            dd($data);
            $data['g_imgs'] = $imgs;
       }

        $row = DB::table('good')->where('g_id',$id)->update($data);
        if($row>0){
            return redirect('admin/good')->with('msg','修改成功');
        }else{
            return redirect('admin/good')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $row = DB::table('good')->where('g_id',$id)->delete();
        if($row>0){
            return redirect('/admin/good')->with('msg','删除成功');
        }else{
            return redirect('/admin/good')->with('error','删除失败');
        }
    }

    // public function ajaxdemo()
    // {
    //     return view('demo');
    // }

    // public function ajax(Request $request)
    // {
    //     dd(123);
    //     echo $request->input('pid');
    // }
}
