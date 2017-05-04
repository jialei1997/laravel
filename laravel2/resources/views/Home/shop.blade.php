@extends('Home.parent')

@section('content')


<div id="j_HomeBanner" class="home-banner">
    <ul class="container">
        @foreach($list as $v)
        <li class="banner-item"  >
            <a class="banner-link" target="_blank" href="">&nbsp;</a>
            <div class="structure-module full">
                <div class="sm-wrapper">
                    <img class="j_bgImage" name='i_image' data-ratio="1.92" src="/Admin/uploads/{{ $v->i_image }}" usemap="#Mmodule_1491788834191">  
                    </div>
            </div>          
        </li>
        @endforeach
    </ul>
    <div id="j_bannerIndicator" class="indicator"></div>
</div>

<div class="home-content-wrapper">
    <div class="structure-module full">
        <div class="sm-wrapper">
            <img class="j_bgImage" data-ratio="1.92" src="/Admin/uploads/20170409212708894403_original.jpg" usemap="#Mmodule_1491744429568">
            
        </div>
    </div>
    <div class="structure-module full">
        <div class="sm-wrapper">
            <img class="j_bgImage" data-ratio="1.92" src="/Admin/uploads/20170408181631287518_original.jpg" usemap="#Mmodule_1491646634638">
            <map class="j_map" name="Mmodule_1491646634638"><area class="j_link" data-coords="239,68,486,383" coords="458.88,130.56,933.12,735.36" href="https://shop.vivo.com.cn/product/10008" target="_blank"><area class="j_link" data-coords="503,180,588,222" coords="965.76,345.59999999999997,1128.96,426.24" activity-id="39" href="javascript:void(0);"><area class="j_link" data-coords="591,176,691,226" coords="1134.72,337.91999999999996,1326.72,433.91999999999996" href="https://shop.vivo.com.cn/product/10008" target="_blank"></map>
        </div>
    </div>
    <div class="structure-module full">
        <div class="sm-wrapper">
            <img class="j_bgImage" data-ratio="1.92" src="/Admin/uploads/2017040815471435783_original.jpg" usemap="#Mmodule_1491637635879">
            
        </div>
    </div>
    <div class="structure-module full">
        <div class="sm-wrapper">
            <img class="j_bgImage" data-ratio="1.92" src="/Admin/uploads/20170408154727664309_original.jpg" usemap="#Mmodule_1491637649121">
            <map class="j_map" name="Mmodule_1491637649121"><area class="j_link" data-coords="192,52,504,194" coords="368.64,99.84,967.68,372.47999999999996" href="https://shop.vivo.com.cn/lottery?uuid=d92d17d0-4341-4b2f-a342-1adab264474c" target="_blank"></map>
        </div>
    </div>
    <div class="structure-module full">
        <div class="sm-wrapper">
            <img class="j_bgImage" data-ratio="1.92" src="/Admin/uploads/2017040815474145383_original.jpg" usemap="#Mmodule_1491637663170">
            <map class="j_map" name="Mmodule_1491637663170"><area class="j_link" data-coords="527,172,627,222" coords="1011.8399999999999,330.24,1203.84,426.24" href="https://shop.vivo.com.cn/product/9948" target="_blank"><area class="j_link" data-coords="635,173,735,223" coords="1219.2,332.15999999999997,1411.2,428.15999999999997" href="https://shop.vivo.com.cn/product/9957" target="_blank"><area class="j_link" data-coords="204,62,508,311" coords="391.68,119.03999999999999,975.36,597.12" href="https://shop.vivo.com.cn/product/9948" target="_blank"></map>
        </div>
    </div><div class="structure-module full">
        <div class="sm-wrapper">
            <img class="j_bgImage" data-ratio="2.17" src="/Admin/uploads/20170408154754913846_original.jpg" usemap="#Mmodule_1491637753769">
            <map class="j_map" name="Mmodule_1491637753769"><area class="j_link" data-coords="209,11,696,234" coords="453.53,23.869999999999997,1510.32,507.78" href="https://shop.vivo.com.cn/product/9966" target="_blank"><area class="j_link" data-coords="203,259,686,468" coords="440.51,562.03,1488.62,1015.56" href="https://shop.vivo.com.cn/product/9958" target="_blank"></map>
        </div>
    </div>
    <div class="structure-module full">
        <div class="sm-wrapper">
            <img class="j_bgImage" data-ratio="2.59" src="/Admin/uploads/20170408154933420479_original.jpg" usemap="#Mmodule_1491637774768">
            <map class="j_map" name="Mmodule_1491637774768"><area class="j_link" data-coords="382,67,581,260" coords="989.38,173.53,1504.79,673.4" href="https://shop.vivo.com.cn/product/9967" target="_blank"><area class="j_link" data-coords="176,262,580,472" coords="455.84,678.5799999999999,1502.1999999999998,1222.48" href="https://shop.vivo.com.cn/product/9964" target="_blank"><area class="j_link" data-coords="183,145,260,183" coords="473.96999999999997,375.54999999999995,673.4,473.96999999999997" href="https://shop.vivo.com.cn/product/9938" target="_blank"><area class="j_link" data-coords="271,146,343,186" coords="701.89,378.14,888.37,481.73999999999995" href="https://shop.vivo.com.cn/product/9967" target="_blank"></map>
        </div>
    </div>
    <div class="structure-module full">
        <div class="sm-wrapper">
            <img class="j_bgImage" data-ratio="1.92" src="/Admin/uploads/20170408154946874968_original.jpg" usemap="#Mmodule_1491637808181">
            <map class="j_map" name="Mmodule_1491637808181"><area class="j_link" data-coords="172,88,498,335" coords="330.24,168.95999999999998,956.16,643.1999999999999" href="https://shop.vivo.com.cn/product/9937" target="_blank"><area class="j_link" data-coords="514,93,817,342" coords="986.88,178.56,1568.6399999999999,656.64" href="https://shop.vivo.com.cn/product/125" target="_blank"></map>
        </div>
    </div>
    <div class="structure-module full">
        <div class="sm-wrapper">
            <img class="j_bgImage" data-ratio="1.95" src="/Admin/uploads/2017040815540010711_original.jpg" usemap="#Mmodule_1491638041457">
            <map class="j_map" name="Mmodule_1491638041457"><area class="j_link" data-coords="205,65,350,241" coords="399.75,126.75,682.5,469.95" href="https://shop.vivo.com.cn/product/9962" target="_blank"><area class="j_link" data-coords="204,245,355,418" coords="397.8,477.75,692.25,815.1" href="https://shop.vivo.com.cn/product/249" target="_blank"><area class="j_link" data-coords="353,67,489,239" coords="688.35,130.65,953.55,466.05" href="https://shop.vivo.com.cn/product/9990" target="_blank"><area class="j_link" data-coords="492,69,634,241" coords="959.4,134.54999999999998,1236.3,469.95" href="https://shop.vivo.com.cn/product/9943" target="_blank"><area class="j_link" data-coords="640,72,783,241" coords="1248,140.4,1526.85,469.95" href="https://shop.vivo.com.cn/product/172" target="_blank"><area class="j_link" data-coords="359,245,490,421" coords="700.05,477.75,955.5,820.9499999999999" href="https://shop.vivo.com.cn/product/208" target="_blank"><area class="j_link" data-coords="495,246,638,423" coords="965.25,479.7,1244.1,824.85" href="https://shop.vivo.com.cn/product/9989" target="_blank"><area class="j_link" data-coords="643,248,788,427" coords="1253.85,483.59999999999997,1536.6,832.65" href="https://shop.vivo.com.cn/product/111" target="_blank"><area class="j_link" data-coords="390,439,594,489" coords="760.5,856.05,1158.3,953.55" href="https://shop.vivo.com.cn/product/parts" target="_blank"></map>
        </div>
    </div>
    <div class="structure-module full">
            <div class="sm-wrapper">
                <img class="j_bgImage" data-ratio="1.92" src="/Admin/uploads/20170409213005730275_original.jpg" usemap="#Mmodule_1491744606749">
                
            </div>
        </div>
    
</div>
<script src="{{ asset('./Home/js/shop/jquery.min_6163309.js') }}"></script>
<script src="{{ asset('./Home/js/shop/jquery.cookie_a5283b2.js') }}"></script>
<script src="{{ asset('./Home/js/shop/jquery.lazyload_546c1da.js') }}"></script>
<script src="{{ asset('./Home/js/shop/jquery-placeholder_fb6154c.js') }}"></script>
<script src="{{ asset('./Home/js/shop/vivo-common_38aa2f0.js') }}"></script>
<script src="{{ asset('./Home/js/shop/dialog_6a2b3fb.js') }}"></script>
<script src="{{ asset('./Home/js/shop/vivo-stat_265b49b.js') }}"></script>
<script src="{{ asset('./Home/js/shop/login_confirm_485e7b4.js') }}"></script>
<script src="{{ asset('./Home/js/shop/dialog_6a2b3fb.js') }}"></script>
<script src="{{ asset('./Home/js/shop/jquery.validate.min_76c74f2.js') }}"></script>
<script src="{{ asset('./Home/js/shop/index_0f7e03e.js') }}"></script>
<script src="{{ asset('./Home/js/shop/index_e1bfc47.js') }}"></script>
@endsection