@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <script src="/public/js/lanrenzhijia.js" type="text/javascript"></script>
    <script type="text/javascript" src="/public/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/public/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/public/js/index.js"></script>
    <script type="text/javascript" src="/public/js/MSClass.js"></script>
    <link href="/public/css/news1.css" rel="stylesheet" type="text/css" />
    <link href="/public/css/vote.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 6]>
    <script type="text/javascript" src="/public/js/DD_belatedPNG_0.0.7a.js"></script>
    <script>
        DD_belatedPNG.fix('.png_bg,.png_bg a:hover,.all_sort_all ul li a span');
    </script>
    <![endif]-->
@stop
@section('main')
    <style>
        .shangxiapian{
            font-size: 12px;
        }
        .xiugai a:visited{color: #551A8B;}
        .xiugai a:link{color: #0000EE;}
    </style>
    <!--主体开始-->
    <div class="main">
        <div class="weizhi1"><span><a href="/">{{config('app.indexname')}}</a>&gt;<a href="/{{$path}}">加盟资讯</a>&gt;@if($thisArticleTopTypeInfo) <a href="/news/{{$thisArticleTopTypeInfo->real_path}}">{{$thisArticleTopTypeInfo->typename}}</a> &gt; <a href="/{{$path}}/{{$thisArticleTopTypeInfo->real_path}}/{{$thisArticleTypeInfo->id}}">{{$thisArticleTypeInfo->typename}}</a> @endif &gt;<a>正文</a></span></div>
        @if($thisBrandArticleInfos)
            <div class="ny-yop">
            <div class="ny-yop-l">
                <a href="/xm/{{$thisBrandArticleInfos->id}}"><img
                        src="{{$thisBrandArticleInfos->litpic}}"
                        alt="{{$thisBrandArticleInfos->brandname}}"/></a><a href="/xm/{{$thisBrandArticleInfos->id}}">
                    <strong>
                        <h1>{{$thisBrandArticleInfos->brandname}}连锁</h1>
                    </strong>
                </a>
                <p>
                    项目官方：　{{$thisBrandArticleInfos->brandgroup}}
                    <br/>
                    投资金额：{{$investmentlists[$thisBrandArticleInfos->tzid]}}
                </p>
            </div>
            <div class="ny-yop-r">
                <ul>
                    <li>
                        <a href="#msg">
                            <img src="/public/images/ny_ic1.jpg" alt="立即留言"/>
                            <p>立即留言</p>
                        </a>
                    </li>
                    <li>
                        <a href="#msg">
                            <img src="/public/images/ny_ic2.jpg" alt="联系电话"/>
                            <p>联系电话</p>
                        </a>
                    </li>
                    <li>
                        <a onClick="AddFavorite('http://www.3198.com/news/{{$thisArticleInfos->id}}','3198创业致富网')" href="javascript:void(0)">
                            <img src="/public/images/ny_ic3.jpg" alt="我要收藏"/>
                            <p>我要收藏</p>
                        </a>
                    </li>
                </ul>
            </div>
            <script>
                function AddFavorite(sURL, sTitle) {

                    sURL = encodeURI(sURL);

                    try {

                        window.external.addFavorite(sURL, sTitle);

                    } catch (e) {

                        try {

                            window.sidebar.addPanel(sTitle, sURL, "");

                        } catch (e) {

                            alert("加入收藏失败,请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");

                        }

                    }

                }
            </script>
            <div class="clearfix"></div>
            <div class="ny-nav ">
                <ul class="ce">
                    <li>
                        <a href="/xm/{{$thisBrandArticleInfos->id}}"
                        >品牌主页</a>
                    </li>
                    <li>
                        <a id="navon1"
                           href="/xm/{{$thisBrandArticleInfos->id}}#huibao"
                        >投资回报</a>
                    </li>
                    <li>
                        <a href="/xm/{{$thisBrandArticleInfos->id}}/news"
                           target="_blank">品牌新闻</a>
                    </li>
                    <li>
                        <a href="/xm/{{$thisBrandArticleInfos->id}}/wenda"
                           class="xz"
                           target="_blank">品牌问答</a>
                    </li>
                    <li>
                        <a id="navon6"
                           href="/xm/{{$thisBrandArticleInfos->id}}#xiangqing"
                        >条件流程</a>
                    </li>
                    <li>
                        <a id="navon4"
                           href="/xm/{{$thisBrandArticleInfos->id}}#chanpin"
                        >产品展示</a>
                    </li>
                    <li>
                        <a id="navon5" href="#msg">在线留言</a>
                    </li>
                </ul>
            </div>
        </div>
        @endif
        <div class="ny_l">
            <div class="ny_l-js">
                <div class="content_bt">
                    <h1>{{$thisArticleInfos->title}}</h1>
                    <div class="content_ly">
                        时间：{{$thisArticleInfos->created_at}}&nbsp;|&nbsp; 来源：{{config('app.indexname')}}&nbsp;|&nbsp;责任编辑：本站编辑&nbsp;|&nbsp;关注度：{{$thisArticleInfos->click}}
                    </div>
                </div>
                <div class="clearfix  nyxj-bady">
                    {!! $thisArticleInfos->body !!}
                    <div class="dingcai clearfix">
                        <a class="news_ding" href="javascript:void(0);">
                            <strong>顶</strong>
                            <span class="ding">0</span>
                        </a>
                        <a class="news_cai" href="javascript:void(0);">
                            <strong>顶</strong>
                            <span class="cai">0</span>
                        </a>
                    </div>
                    @include('frontend.liuyan2')
                </div>
            </div>

            <link href="/public/css/vote.css" rel="stylesheet" type="text/css" />
            <div class="clear"></div>
            @include('frontend.liuyan3')

        </div>
        @if(!empty($thisBrandArticleInfos))
            @include('frontend.brand_right')
        @else
            @include('frontend.article_right')
        @endif

    </div>
    <div class="clearfix"></div>
    <script>
        function check() {
            var truename = document.getElementById("truename").value;
            var telephone = document.getElementById("telephone").value;
            var content = document.getElementById("content").value;
            if(truename.length
                < 2) {
                alert('请填写姓名');
                document.getElementById("truename").focus();
                return false;
            }
            if(telephone.length < 7) {
                alert('请填写联系电话');
                document.getElementById("telephone").focus();
                return false;
            }
            var f;
        }
    </script>
@stop

