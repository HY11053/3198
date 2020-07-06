<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" >
    <link href="/mobile/css/common.css" rel="stylesheet" type="text/css"/>
    <link href="/mobile/css/iconfont.css" rel="stylesheet" type="text/css"/>
    <link href="/mobile/css/swiper.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="clearfix anxjm-mtop84">
    <div class="search clearfix">
        <div class="logo fl">
            <a href="/"><img src="/mobile/images/logo.png" alt="3198创业致富网"/></a>
        </div>
        <div class="searchCon fl">
            <form action="/search" method="get">
                {{csrf_field()}}
                <div class="ipt-box"></div>
                <input class="ipt-placeholder" name="key" placeholder="输入您想找的项目" />
                <input type="hidden" name="type" value="1">
                <button type="submit" class="search_btn"></button>
            </form>
        </div>
        <div class="message fr">
            <b>项目分类</b>
        </div>
        <div class="d_nav">
            <ul>
                <li><a href="/" target="_self"><span>首页</span></a></li>
                <li><a href="/xm" target="_self"><span>项目大全</span></a></li>
                <li><a href="/cyms" target="_self"><span>餐饮</span></a></li>
                <li><a href="/fzxb" target="_self"><span>服装</span></a></li>
                <li><a href="/mrbj" target="_self"><span>美容</span></a></li>
                <li><a href="/shfw" target="_self"><span>服务</span></a></li>
                <li><a href="/jjyp/" target="_self"><span>家居</span></a></li>
                <li>热门行业</li>
                <li><a href="/jczs/" target="_self"><span>建材</span></a></li>
                <li><a href="/lpsp" target="_self"><span>礼品</span></a></li>
                <li><a href="/qcfw" target="_self"><span>汽车</span></a></li>
                <li><a href="/jywl" target="_self"><span>教育</span></a></li>
                <li><a href="/myyp" target="_self"><span>母婴</span></a></li>
                <li><a href="/shfw/179" target="_self"><span>干洗</span></a></li>
                <li><a href="/cyms" target="_self"><span>火锅</span></a></li>
                <li><a href="/fcyms/3" target="_self"><span>饮品</span></a></li>
                <li><a href="/cyms/204" target="_self"><span>烧烤</span></a></li>
                <li><a href="/cyms/2" target="_self"><span>小吃</span></a></li>
            </ul>
        </div>
    </div>
</div>

@yield('main_content')

<div class="clearfix">
    <div class="related-tit bg-fff mgt20 tabs-tit">
        <b>隐私保护</b>
        <div class="btn-one-more fr">
        </div>
    </div>
    <div class="tabs-ctn">
        <ul class="content1 cy-item ">
            <li><a href="javascript:;">
                    <p class="online-name1">1. 我方平台为信息发布平台，您的留言将在我方平台发布或提供给相应商家</p>
                    <p class="online-name1">2. 如不需要发布信息，请勿在本平台留言</p>
                    <p class="online-name1">3.
                        公司对与任何包含、经由、或链接、下载或从任何与本网站有关服务所获得的资讯、内容或广告，不声明或保证其内容的正确性、真实性或可靠性；并且，对于您透过本网广告、资讯或要约而展示、购买或取得的任何产品、资讯或资料，本网站亦不负品质保证的责任。您与此接受并承认信赖任何信息所产生之风险应自行承担，本网对任何使用或提供本网站信息的商业活动及其风险不承担任何责任。</p>
                    <p class="online-name1">4.
                        本网站若因线路及非本公司控制范围外的硬件故障或其它不可抗力，以及黑客政击、计算机病毒侵入或发而造成的个人资料泄露、丢失、被盗用或被篡改等，本网站亦不负任何责任。</p>
                    <p class="online-name1">5.
                        当本网站以链接形式推荐其他网站内容时，本网站并不对这些网站或资源的真实性、可用性、合法性负责，且不保证从这些网站获取的任何内容、产品、服务或其他材料的真实性、合法性，对于任何因使用或信赖从此类网站上获取的内容、产品、资源、服务或其他材料而造成的任何直接或间接的损失均由您自行承担，本网站均不承担任何责任。</p>
                </a></li>
        </ul>
    </div>
</div>
<footer>
    <div class="link-box ">
        <a href="https://www.anxjm.com/" class="foot-link">电脑版</a><span class="v-line">|</span>
        <a href="/search/" class="foot-link">品牌大全</a><span class="v-line">|</span>
        <a href="/newsPage/1602/" class="foot-link">加盟费用</a><span class="v-line">|</span>
        <a href="/newsPage/1604/" class="foot-link">选址筹备</a><span class="v-line">|</span>
        <a href="/newsPage/16010/" class="foot-link">品牌动态</a>
    </div>
    <p class="firm clearfix">
        <span class="foot-text mgr15">上海桥梓网络科技有限公司 	 版权所有</span>
    </p>
</footer>
<script type="text/javascript" src="/mobile/js/jquery.min.js"></script>
<script type="text/javascript" src="/mobile/js/swiper.min.js"></script>
<script type="text/javascript" src="/mobile/js/index.js"></script>
@yield('footer_libs')
</body>
</html>
