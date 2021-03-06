@extends('Admin.base.parent')


@section('content')

    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">admin</a>
            </li>

            <li>
                <a href="#">商品管理</a>
            </li>
            <li class="active">添加商品</li>
        </ul><!-- .breadcrumb -->
    </div>
    <div class="page-content">
        <div class="page-header">
            <h1>
                添加商品信息
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <form class="form-horizontal" role="form" action="{{ url('/admin/good') }}" method='post' name='myform' enctype='multipart/form-data'>
                <!-- <input type="hidden" name='s_id' value=0> -->
                    {{ csrf_field() }}
                     <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 选择分类 </label>
                        <div class="col-sm-9">
                            <select  id='sid' name='sort[]'>
                                <option  value="1">--请选择--</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 商品名 </label>
                        <div class="col-sm-9">
                            <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" required name='g_name'/>
                        </div>
                    </div>

                    <div class="space-4"></div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 产品序列号 </label>
                        <div class="col-sm-9">
                            <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" required name='g_series'/>
                        </div>
                    </div>

                    <div class="space-4"></div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 价格 </label>
                        <div class="col-sm-9">
                            <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" required name='g_price'/>
                        </div>
                    </div>

                    <div class="space-4"></div>
               
                     <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" required for="form-field-1"> 颜色 </label>
                        <div class="col-sm-9">
                            <select name='g_color'>
                                <option value='0'>手机</option>
                                <option value='1'>流光白</option>
                                <option value='2'>金色</option>
                                <option value='3'>玫瑰金</option>
                                <option value='4'>星空灰</option>
                                <option value='5'>香槟金</option>
                                <option value='6'>磨砂黑</option>
                                <option value='7'>X9磨砂黑</option>
                                <option value='8'>冠军蓝</option>
                                <option value='9'>配件</option>
                                <option value='10'>黑色</option>
                                <option value='11'>红色</option>
                                <option value='12'>白色</option>
                                <option value='13'>蓝色</option>
                                <option value='14'>深空灰</option>
                                <option value='15'>玫红色</option>
                                <option value='16'>天青蓝</option>
                                <option value='17'>透明</option>
                                <option value='18'>米白</option>
                                <option value='19'>蔷薇粉</option>
                            </select>
                        </div>
                    </div>     

                    <div class="space-4"></div>
                    <div><label class="col-sm-3 control-label no-padding-right" required for="form-field-1"></label><p>配件不填写容量和版本</p></div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" required for="form-field-1"> 容量 </label>
                        <div class="col-sm-9">
                            <input type="radio" name='g_capa' value="1"/>16G
                            <input type="radio" name='g_capa' value="2"/>32G
                            <input type="radio" name='g_capa' value="3"/>64G
                            <input type="radio" name='g_capa' value="4"/>128G
                        </div>
                    </div>     

                    <div class="space-4"></div>

                     <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" required for="form-field-1"> 版本 </label>
                        <div class="col-sm-9">
                            <input type="radio" name='g_ver' value="1"/>全网通
                            <input type="radio" name='g_ver' value="2"/>移动4G
                            <input type="radio" name='g_ver' value="3"/>联通4G
                            <input type="radio" name='g_ver' value="4"/>电信4G
                        </div>
                    </div> 
                  
                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"required for="form-field-1"> 主图片 </label>
                        <div class="col-sm-9">
                            <input type="file" name='g_image'/>
                        </div>
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" required for="form-field-1"> 列表图 </label>
                        <div class="col-sm-9">
                            <input type="file" name='g_imgs[]'/>
                            <input type="file" name='g_imgs[]'/>
                            <input type="file" name='g_imgs[]'/>
                            <input type="file" name='g_imgs[]'/>
                        </div>
                    </div>

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" required for="form-field-1"> 标题 </label>
                        <div class="col-sm-9">
                            <input type="text" name='g_title'/>
                        </div>
                    </div>     

                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"required for="form-field-1"> 描述 </label>
                        <div class="col-sm-9">
                            <textarea name='g_info' cols='50' rows='7'style='resize:none'></textarea>
                        </div>
                    </div>    

                    <div class="space-4"></div>
                        
                    
                     <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"required for="form-field-1"> 状态 </label>
                        <div class="col-sm-9">
                            <input type="radio" name='g_status' value="1"/>上架
                            <input type="radio" name='g_status' value="2"/>下架
                        </div>
                    </div> 

                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="icon-ok bigger-110"></i>
                                提交
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                重置
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src='{{ asset("js/jquery-1.8.3.min.js") }}'></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'{{ url("admin/ajax") }}',
            type:'get',
            async:true,
            data:{'s_upid':0},
            dataType:'json',

            success:function(data)
            {
                // console.log(data);
                //遍历从数据库查出来的数据，生成option选项追加到select里
                for (var i = 0; i < data.length; i++) {
                    $('#sid').append("<option value="+data[i].s_id+">"+data[i].s_name+"</option>");
                };
            },
            error:function()
            {
                alert('ajax请求失败');
            }
        });

        //给所有的select标签绑定change事件
       //给所有的select标签绑定change事件
        $('select').live("change",function(){
            //干掉当前你选择的select标签后面的select标签
            $(this).nextAll('select').remove();
            //判断你选择是不是--请选择--
            if($(this).val() != '--请选择--'){
                //因为在ajax的回调函数中需要使用当前对象，但是$(this)在ajax的回调函数中用不了
                var ob = $(this);
                $.ajax({
                    url:'{{ url("admin/ajax") }}',
                    type:'post',
                    async:true,
                    // ,'_token':"{{ csrf_token() }}"
                    data:{s_upid:$(this).val(),'_token':"{{ csrf_token() }}"},
                    dataType:'json',
                    success:function(data)
                    {
                        // var_dump(data);
                        // console.log(data);
                        //判断是不是最后一级城市，最后一级城市查数据库length==0
                        if(data.length>0){
                            //生成一个新的select标签
                            var select = $("<select name='sort[]'><option>--请选择--</option></select>");
                        //     //遍历从数据库查出来的数据，生成option选项追加到select里
                            for (var i = 0; i < data.length; i++) {
                                $(select).append("<option value="+data[i].s_id+">"+data[i].s_name+"</option>");
                            };
                        //     //外部插入到前一个select后面
                            ob.after(select);
                        }
                    },
                    error:function()
                    {
                        alert('ajax请求失败');
                    }
                });
            }
        });
     
    </script>
@endsection
