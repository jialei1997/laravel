@extends('Home.parent')

@section('content')
<div class="wrapper">
    <div class="buy-steps"></div>
</div>
<div class="container">
    <div class="wrapper">
            <div class="prod-list">
                <div class="no-result">
                	<img src="{{ asset('/Home/images/购物车.png') }}">
                    <p class="comment">亲，您的购物车里还没有物品哦，赶紧去<a href="{{ url('home/list') }}">逛逛</a>吧</p>
                </div>
            </div>
    </div>

</div>

<!-- <script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/jquery_003.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/jquery.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/jquery_004.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/jquery-placeholder_fb6154c.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/vivo-common_38aa2f0.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/dialog_6a2b3fb.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/vivo-stat_265b49b.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/login_confirm_485e7b4.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/region_a46b4bb.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/jquery_002.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/dialog_6a2b3fb.js"></script>
<script src="%E8%B4%AD%E7%89%A9%E8%BD%A6%E6%94%AF%E4%BB%98_files/view_1c5c771.js"></script> -->
<!-- 添加地址的隐藏显示 -->

@endsection
