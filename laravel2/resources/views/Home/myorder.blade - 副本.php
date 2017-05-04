@extends('Home.parent')


@section('content')
    <link rel="shortcut icon" href="https://swsdl.vivo.com.cn/vivoshop/web/dist/img/favicon_7761e1f.ico">

    <link href="{{ asset('/Home/css/global_79a0974.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/Home/css/layout_3a0d4d9.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/Home/css/dialog_523c50b.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ asset('/Home/css/member-center_3bb3bfe.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/Home/css/dialog_523c50b.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/Home/css/buy-process_e40c238.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/Home/css/member-order_70818b2.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/Home/css/huiyi8.css') }}" rel="stylesheet" type="text/css">

<div class="wrapper">
<div class="crumbs">您的位置：<a href="https://shop.vivo.com.cn/index.html">首页</a><b></b><a href="https://shop.vivo.com.cn/my/">会员中心</a><b></b>我的订单</div>
</div>
<div class="wrapper">
<aside class="menu-bar">
    <ul class="portrait-box">
        <li>
            <a href="" title="编辑资料">
            <img src="" width="160">
            </a>
        </li>
        <li class="mem-name member-menu-nickName"><i class="icon-mem"></i>紫殇蝶舞</li>
        <li class="vcoin-info">我的V币：<a href=""><span class="red member-vcoin-number">0</span></a> V币</li>
    </ul>
    <dl id="j_MyCenterMenus" class="menu">
        <dt class="menu-title"><i class="icon-deal"></i>交易管理</dt>
        <dd class="menu-item on"><a href="">我的订单</a></dd>
        <dd class="menu-item"><a href="">退款/退货</a></dd>
        <dt class="menu-title"><i class="icon-evaluation"></i>评价管理</dt>
        <dd class="menu-item"><a href="">未评价商品</a></dd>
        <dd class="menu-item"><a href="">我的评论</a></dd>
        <dt class="menu-title"><i class="icon-account"></i>我的账户</dt>
        <dd class="menu-item"><a href="">个人资料</a></dd>
        <dd class="menu-item"><a href="">收货地址</a></dd>
    </dl>
</aside>    
<article class="content">
<form action='/home/mo' methos='get'>
{{ csrf_field() }}
</form>>
<dl id="member-order-list">
    <dt class="module-title">我的订单</dt>
    <dd class="module-item">
        <ul class="statistic-tags"  id='tags'>
            <li class="active">全部</li>
            <li >待付款(1)</li>
            <li>待收货(0)</li>
            <li>已完成(0)</li>
            <li>已关闭(0)</li>
        </ul>
     
        <div class="list-caption">
            <div class="col col0">商品</div>
            <div class="col col1">数量</div>
            <div class="col col2">价格</div>
            <div class="col col3">状态</div>
            <div class="col col4">操作</div>
        </div>


            <script src="{{ asset('Home/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
            
            <script>
            $(document).ready(function(){
                $("#tags li").click(function(){
                    // alert(123);
                   // var lis = document.getElementById("tags").getElementsByTagName("li");
                   // var tables = document.getElementById("tab").getElementsByTagName("table");

                   // alert(tables.length);
                   // 获取tags中 li的集合
                    var lis=$("#tags li");
                    // alert(lis.length);
                    // 获取tab 下的table 集合
                    // var tables=$("#tab table");
                    // alert(tables);
                   // alert(tables.length);
                   // 确定点击第几个li
                    var count=$(this).index();
                  // alert(count)
                   // $("#tab").css("display","");
                  switch(count){
                    case 0:
                        $("#tab > div").css("display","block");
                    break;
                    case 1:
                        $("#tab #table1").css("display","block").siblings().css("display","none");
                    break;
                    case 2:
                        $("#tab #table2").css("display","block").siblings().css("display","none");
                    break;
                    case 3:
                        $("#tab #table3").css("display","block").siblings().css("display","none");
                    break;
                  }
                   
                          // tables.eq(count).css("display","block");
                          // tables.eq(count).siblings().css("display","none");

                })
            })
       
            </script>
        <div id='tab'>
          <!--  <div>
                 @foreach($list as $a)   
                <table class="order-table" >
                    <colgroup>
                        <col width="155">
                        <col>
                        <col class="col1">
                        <col class="col2">
                        <col class="col3">
                        <col class="col4">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th colspan="6" class="order-title">
                            <ul>
                                <li class="order-number">订单号：<a href="">17041146676857311454</a>
                                </li>
                                <li class="order-time">成交时间:
                                    2017-04-11 12:57:56
                                </li>
                            </ul>
                        </th>
                    </tr>
                    </tbody>

                    <tbody>
                    <tr class="order-line">
                        <td colspan="4">
                            <table class="order-sub-table">
                                <colgroup>
                                    <col width="155">
                                    <col>
                                    <col class="col1">
                                    <col class="col2">
                                </colgroup>
                                <tr class="prod-line">
                                    <td class="prod-pic">
                                        <a class="figure" href="" target="_blank"><img src="/Admin/uploads/logo.png" alt=""></a>
                                    </td>
                                    <td colspan="3">
                                        <table class="prods-info-table">
                                            <colgroup>
                                                <col width="80">
                                                <col>
                                                <col width="66">
                                                <col width="108">
                                            </colgroup>
                                            <tr class="prod-info">
                                                <td class="prod-name" colspan="2">
                                                    <a href="" target="_blank" title="Xplay6 全网通【旗舰精品】">Xplay6 全网通【旗舰精品】</a> <br><br>
                                                </td>
                                                <td>1</td>
                                                <td>
                                                        4498.00
                                                </td>
                                            </tr>
                                                <tr class="empty-line">
                                                    
                                                </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        @if($a->o_manage  == 0)
                            <td class="status">交易完成</td>                
                        @elseif($a->o_manage  == 1)
                            <td class="status">待付款</td>
                        @elseif($a->o_manage  == 2)
                            <td class="status">待发货</td>
                        @elseif($a->o_manage  == 3)
                            <td class="status">已发货</td>
                        @endif
                        <td class="operation">
                            <ul>
                                <li><a href="">查看订单</a></li>
                                <li><a class="link-cancel btn-href" operation="cancel" ordertype="01">取消订单</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="operation-line">
                        <td colspan="6">
                            总计：<span class="red">
                                <dfn>¥</dfn>4498.00
                               </span>
                            (含运费：<dfn>¥</dfn>0.00
                            优惠：
                            <dfn>¥</dfn>0.00
                            )
                            <button type="button" class="btn btn-confirm btn-highlight" id="order-button" operation="settle"  ordertype="01">去结算</button>
                        </td>
                    </tr>
                    </tbody>
                </table>     
                @endforeach
           </div> -->
            <div id='table1'>
            111111111111
                @foreach($list1 as $v1)   
                <table class="order-table" >
                    <colgroup>
                        <col width="155">
                        <col>
                        <col class="col1">
                        <col class="col2">
                        <col class="col3">
                        <col class="col4">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th colspan="6" class="order-title">
                            <ul>
                                <li class="order-number">订单号：<a href="">{{ $v1->o_number }}</a>
                                </li>
                                <li class="order-time">成交时间:
                                    2017-04-11 12:57:56
                                </li>
                            </ul>
                        </th>
                    </tr>
                    </tbody>

                    <tbody>
                    <tr class="order-line">
                        <td colspan="4">
                            <table class="order-sub-table">
                                <colgroup>
                                    <col width="155">
                                    <col>
                                    <col class="col1">
                                    <col class="col2">
                                </colgroup>
                                <tr class="prod-line">
                                    <td class="prod-pic">
                                        <a class="figure" href="" target="_blank"><img src="/Admin/uploads/logo.png" alt=""></a>
                                    </td>
                                    <td colspan="3">
                                        <table class="prods-info-table">
                                            <colgroup>
                                                <col width="80">
                                                <col>
                                                <col width="66">
                                                <col width="108">
                                            </colgroup>
                                            <tr class="prod-info">
                                                <td class="prod-name" colspan="2">
                                                    <a href="" target="_blank" title="Xplay6 全网通【旗舰精品】">{{ $v1->o_title }}</a> <br><br>
                                                </td>
                                                <td>1</td>
                                                <td>
                                                        4498.00
                                                </td>
                                            </tr>
                                                <tr class="empty-line">
                                                    
                                                </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="status">待付款</td>
                        <td class="operation">
                            <ul>
                                <li><a href="">查看订单</a></li>
                                <li><a class="link-cancel btn-href" operation="cancel" ordertype="01">取消订单</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="operation-line">
                        <td colspan="6">
                            总计：<span class="red">
                                <dfn>¥</dfn>4498.00
                               </span>
                            (含运费：<dfn>¥</dfn>0.00
                            优惠：
                            <dfn>¥</dfn>0.00
                            )
                            <button type="button" class="btn btn-confirm btn-highlight" id="order-button" operation="settle"  ordertype="01">去结算</button>
                        </td>
                    </tr>
                    }
                    

                    </tbody>
                </table>
                @endforeach
            </div>

            <div id='table2'>
            222222222222
                @foreach($list2 as $v2)   
                <table class="order-table" >
                    <colgroup>
                        <col width="155">
                        <col>
                        <col class="col1">
                        <col class="col2">
                        <col class="col3">
                        <col class="col4">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th colspan="6" class="order-title">
                            <ul>
                                <li class="order-number">订单号：<a href="">{{ $v2->o_number }}</a>
                                </li>
                                <li class="order-time">成交时间:
                                    2017-04-11 12:57:56
                                </li>
                            </ul>
                        </th>
                    </tr>
                    </tbody>

                    <tbody>
                    <tr class="order-line">
                        <td colspan="4">
                            <table class="order-sub-table">
                                <colgroup>
                                    <col width="155">
                                    <col>
                                    <col class="col1">
                                    <col class="col2">
                                </colgroup>
                                <tr class="prod-line">
                                    <td class="prod-pic">
                                        <a class="figure" href="" target="_blank"><img src="/Admin/uploads/logo.png" alt=""></a>
                                    </td>
                                    <td colspan="3">
                                        <table class="prods-info-table">
                                            <colgroup>
                                                <col width="80">
                                                <col>
                                                <col width="66">
                                                <col width="108">
                                            </colgroup>
                                            <tr class="prod-info">
                                                <td class="prod-name" colspan="2">
                                                    <a href="" target="_blank" title="Xplay6 全网通【旗舰精品】">{{ $v2->o_title }}</a> <br><br>
                                                </td>
                                                <td>1</td>
                                                <td>
                                                        4498.00
                                                </td>
                                            </tr>
                                                <tr class="empty-line">
                                                    
                                                </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="status">待付款</td>
                        <td class="operation">
                            <ul>
                                <li><a href="">查看订单</a></li>
                                <li><a class="link-cancel btn-href" operation="cancel" ordertype="01">取消订单</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="operation-line">
                        <td colspan="6">
                            总计：<span class="red">
                                <dfn>¥</dfn>4498.00
                               </span>
                            (含运费：<dfn>¥</dfn>0.00
                            优惠：
                            <dfn>¥</dfn>0.00
                            )
                            <button type="button" class="btn btn-confirm btn-highlight" id="order-button" operation="settle"  ordertype="01">去结算</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                @endforeach
            </div>

            <div id='table3'>
                 @foreach($list0 as $v0)   
                <table class="order-table" >
                    <colgroup>
                        <col width="155">
                        <col>
                        <col class="col1">
                        <col class="col2">
                        <col class="col3">
                        <col class="col4">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th colspan="6" class="order-title">
                            <ul>
                                <li class="order-number">订单号：<a href="">{{ $v0->o_number }}</a>
                                </li>
                                <li class="order-time">成交时间:
                                    2017-04-11 12:57:56
                                </li>
                            </ul>
                        </th>
                    </tr>
                    </tbody>

                    <tbody>
                    <tr class="order-line">
                        <td colspan="4">
                            <table class="order-sub-table">
                                <colgroup>
                                    <col width="155">
                                    <col>
                                    <col class="col1">
                                    <col class="col2">
                                </colgroup>
                                <tr class="prod-line">
                                    <td class="prod-pic">
                                        <a class="figure" href="" target="_blank"><img src="/Admin/uploads/logo.png" alt=""></a>
                                    </td>
                                    <td colspan="3">
                                        <table class="prods-info-table">
                                            <colgroup>
                                                <col width="80">
                                                <col>
                                                <col width="66">
                                                <col width="108">
                                            </colgroup>
                                            <tr class="prod-info">
                                                <td class="prod-name" colspan="2">
                                                    <a href="" target="_blank" title="Xplay6 全网通【旗舰精品】">{{ $v0->o_title }}</a> <br><br>
                                                </td>
                                                <td>1</td>
                                                <td>
                                                        4498.00
                                                </td>
                                            </tr>
                                                <tr class="empty-line">
                                                    
                                                </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="status">待付款</td>
                        <td class="operation">
                            <ul>
                                <li><a href="">查看订单</a></li>
                                <li><a class="link-cancel btn-href" operation="cancel" ordertype="01">取消订单</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="operation-line">
                        <td colspan="6">
                            总计：<span class="red">
                                <dfn>¥</dfn>4498.00
                               </span>
                            (含运费：<dfn>¥</dfn>0.00
                            优惠：
                            <dfn>¥</dfn>0.00
                            )
                            <button type="button" class="btn btn-confirm btn-highlight" id="order-button" operation="settle"  ordertype="01">去结算</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                @endforeach
            </div>
             <div id='table3'>
                 @foreach($list3 as $v3)   
                <table class="order-table" >
                    <colgroup>
                        <col width="155">
                        <col>
                        <col class="col1">
                        <col class="col2">
                        <col class="col3">
                        <col class="col4">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th colspan="6" class="order-title">
                            <ul>
                                <li class="order-number">订单号：<a href="">{{ $v3->o_number }}</a>
                                </li>
                                <li class="order-time">成交时间:
                                    2017-04-11 12:57:56
                                </li>
                            </ul>
                        </th>
                    </tr>
                    </tbody>

                    <tbody>
                    <tr class="order-line">
                        <td colspan="4">
                            <table class="order-sub-table">
                                <colgroup>
                                    <col width="155">
                                    <col>
                                    <col class="col1">
                                    <col class="col2">
                                </colgroup>
                                <tr class="prod-line">
                                    <td class="prod-pic">
                                        <a class="figure" href="" target="_blank"><img src="/Admin/uploads/logo.png" alt=""></a>
                                    </td>
                                    <td colspan="3">
                                        <table class="prods-info-table">
                                            <colgroup>
                                                <col width="80">
                                                <col>
                                                <col width="66">
                                                <col width="108">
                                            </colgroup>
                                            <tr class="prod-info">
                                                <td class="prod-name" colspan="2">
                                                    <a href="" target="_blank" title="Xplay6 全网通【旗舰精品】">{{ $v3->o_title }}</a> <br><br>
                                                </td>
                                                <td>1</td>
                                                <td>
                                                        4498.00
                                                </td>
                                            </tr>
                                                <tr class="empty-line">
                                                    
                                                </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="status">待付款</td>
                        <td class="operation">
                            <ul>
                                <li><a href="">查看订单</a></li>
                                <li><a class="link-cancel btn-href" operation="cancel" ordertype="01">取消订单</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="operation-line">
                        <td colspan="6">
                            总计：<span class="red">
                                <dfn>¥</dfn>4498.00
                               </span>
                            (含运费：<dfn>¥</dfn>0.00
                            优惠：
                            <dfn>¥</dfn>0.00
                            )
                            <button type="button" class="btn btn-confirm btn-highlight" id="order-button" operation="settle"  ordertype="01">去结算</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                @endforeach
            </div>




        </div>
       
       
      
    </dd>
</dl>

<div>
    <form id="orderPayform" method="post"></form>
</div>


<div class="span12 clearfix">

</div>
    </article>
</div>

@endsection



<!-- 
        @foreach($list as $a)   
        <table class="order-table" >
            <colgroup>
                <col width="155">
                <col>
                <col class="col1">
                <col class="col2">
                <col class="col3">
                <col class="col4">
            </colgroup>
            <tbody>
            <tr>
                <th colspan="6" class="order-title">
                    <ul>
                        <li class="order-number">订单号：<a href="">17041146676857311454</a>
                        </li>
                        <li class="order-time">成交时间:
                            2017-04-11 12:57:56
                        </li>
                    </ul>
                </th>
            </tr>
            </tbody>

            <tbody>
            <tr class="order-line">
                <td colspan="4">
                    <table class="order-sub-table">
                        <colgroup>
                            <col width="155">
                            <col>
                            <col class="col1">
                            <col class="col2">
                        </colgroup>
                        <tr class="prod-line">
                            <td class="prod-pic">
                                <a class="figure" href="" target="_blank"><img src="/Admin/uploads/logo.png" alt=""></a>
                            </td>
                            <td colspan="3">
                                <table class="prods-info-table">
                                    <colgroup>
                                        <col width="80">
                                        <col>
                                        <col width="66">
                                        <col width="108">
                                    </colgroup>
                                    <tr class="prod-info">
                                        <td class="prod-name" colspan="2">
                                            <a href="" target="_blank" title="Xplay6 全网通【旗舰精品】">Xplay6 全网通【旗舰精品】</a> <br><br>
                                        </td>
                                        <td>1</td>
                                        <td>
                                                4498.00
                                        </td>
                                    </tr>
                                        <tr class="empty-line">
                                            
                                        </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                @if($a->o_manage  == 0)
                    <td class="status">交易完成</td>                
                @elseif($a->o_manage  == 1)
                    <td class="status">待付款</td>
                @elseif($a->o_manage  == 2)
                    <td class="status">待发货</td>
                @elseif($a->o_manage  == 3)
                    <td class="status">已发货</td>
                @endif
                <td class="operation">
                    <ul>
                        <li><a href="">查看订单</a></li>
                        <li><a class="link-cancel btn-href" operation="cancel" ordertype="01">取消订单</a></li>
                    </ul>
                </td>
            </tr>
            <tr class="operation-line">
                <td colspan="6">
                    总计：<span class="red">
                        <dfn>¥</dfn>4498.00
                       </span>
                    (含运费：<dfn>¥</dfn>0.00
                    优惠：
                    <dfn>¥</dfn>0.00
                    )
                    <button type="button" class="btn btn-confirm btn-highlight" id="order-button" operation="settle"  ordertype="01">去结算</button>
                </td>
            </tr>
            </tbody>
        </table>     
        @endforeach

         @foreach($list as $a)   
        <table class="order-table" >
            <colgroup>
                <col width="155">
                <col>
                <col class="col1">
                <col class="col2">
                <col class="col3">
                <col class="col4">
            </colgroup>
            <tbody>
            <tr>
                <th colspan="6" class="order-title">
                    <ul>
                        <li class="order-number">订单号：<a href="">17041146676857311454</a>
                        </li>
                        <li class="order-time">成交时间:
                            2017-04-11 12:57:56
                        </li>
                    </ul>
                </th>
            </tr>
            </tbody>

            <tbody>
            <tr class="order-line">
                <td colspan="4">
                    <table class="order-sub-table">
                        <colgroup>
                            <col width="155">
                            <col>
                            <col class="col1">
                            <col class="col2">
                        </colgroup>
                        <tr class="prod-line">
                            <td class="prod-pic">
                                <a class="figure" href="" target="_blank"><img src="/Admin/uploads/logo.png" alt=""></a>
                            </td>
                            <td colspan="3">
                                <table class="prods-info-table">
                                    <colgroup>
                                        <col width="80">
                                        <col>
                                        <col width="66">
                                        <col width="108">
                                    </colgroup>
                                    <tr class="prod-info">
                                        <td class="prod-name" colspan="2">
                                            <a href="" target="_blank" title="Xplay6 全网通【旗舰精品】">Xplay6 全网通【旗舰精品】</a> <br><br>
                                        </td>
                                        <td>1</td>
                                        <td>
                                                4498.00
                                        </td>
                                    </tr>
                                        <tr class="empty-line">
                                            
                                        </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                @if($a->o_manage  == 0)
                    <td class="status">交易完成</td>                
                @elseif($a->o_manage  == 1)
                    <td class="status">待付款</td>
                @elseif($a->o_manage  == 2)
                    <td class="status">待发货</td>
                @elseif($a->o_manage  == 3)
                    <td class="status">已发货</td>
                @endif
                <td class="operation">
                    <ul>
                        <li><a href="">查看订单</a></li>
                        <li><a class="link-cancel btn-href" operation="cancel" ordertype="01">取消订单</a></li>
                    </ul>
                </td>
            </tr>
            <tr class="operation-line">
                <td colspan="6">
                    总计：<span class="red">
                        <dfn>¥</dfn>4498.00
                       </span>
                    (含运费：<dfn>¥</dfn>0.00
                    优惠：
                    <dfn>¥</dfn>0.00
                    )
                    <button type="button" class="btn btn-confirm btn-highlight" id="order-button" operation="settle"  ordertype="01">去结算</button>
                </td>
            </tr>
            </tbody>
        </table>
        @endforeach

        @foreach($list1 as $b)   
        <table class="order-table" >
            <colgroup>
                <col width="155">
                <col>
                <col class="col1">
                <col class="col2">
                <col class="col3">
                <col class="col4">
            </colgroup>
            <tbody>
            <tr>
                <th colspan="6" class="order-title">
                    <ul>
                        <li class="order-number">订单号：<a href="">17041146676857311454</a>
                        </li>
                        <li class="order-time">成交时间:
                            2017-04-11 12:57:56
                        </li>
                    </ul>
                </th>
            </tr>
            </tbody>

            <tbody>
            <tr class="order-line">
                <td colspan="4">
                    <table class="order-sub-table">
                        <colgroup>
                            <col width="155">
                            <col>
                            <col class="col1">
                            <col class="col2">
                        </colgroup>
                        <tr class="prod-line">
                            <td class="prod-pic">
                                <a class="figure" href="" target="_blank"><img src="/Admin/uploads/logo.png" alt=""></a>
                            </td>
                            <td colspan="3">
                                <table class="prods-info-table">
                                    <colgroup>
                                        <col width="80">
                                        <col>
                                        <col width="66">
                                        <col width="108">
                                    </colgroup>
                                    <tr class="prod-info">
                                        <td class="prod-name" colspan="2">
                                            <a href="" target="_blank" title="Xplay6 全网通【旗舰精品】">Xplay6 全网通【旗舰精品】</a> <br><br>
                                        </td>
                                        <td>1</td>
                                        <td>
                                                4498.00
                                        </td>
                                    </tr>
                                        <tr class="empty-line">
                                            
                                        </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td class="status">待付款</td>
                <td class="operation">
                    <ul>
                        <li><a href="">查看订单</a></li>
                        <li><a class="link-cancel btn-href" operation="cancel" ordertype="01">取消订单</a></li>
                    </ul>
                </td>
            </tr>
            <tr class="operation-line">
                <td colspan="6">
                    总计：<span class="red">
                        <dfn>¥</dfn>4498.00
                       </span>
                    (含运费：<dfn>¥</dfn>0.00
                    优惠：
                    <dfn>¥</dfn>0.00
                    )
                    <button type="button" class="btn btn-confirm btn-highlight" id="order-button" operation="settle"  ordertype="01">去结算</button>
                </td>
            </tr>
            </tbody>
        </table>
        @endforeach
         