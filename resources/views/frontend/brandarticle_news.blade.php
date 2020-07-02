@extends('frontend.frontend')
@section('title'){{$thisArticleInfos->title}}- {{config('app.indexname')}}@stop
@section('keywords'){{$thisArticleInfos->keywords}}@stop
@section('description'){{$thisArticleInfos->description}}@stop
@section('headlibs')
    <script src="/public/js/lanrenzhijia.js" type="text/javascript"></script>
    <script type="text/javascript" src="/public/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/public/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/public/js/MSClass.js"></script>
    <!--[if lte IE 6]>
    <script type="text/javascript" src="/public/js/DD_belatedPNG_0.0.7a.js"></script>
    <script>
        DD_belatedPNG.fix('.png_bg,.png_bg a:hover,.all_sort_all ul li a span');
    </script>
    <![endif]-->
@stop
@section('main')
<!--主体开始-->
<div class="main">
    <div class="bk weizhi" style="margin-top:4px;">
        <span><a href="/">{{config('app.indexname')}}</a>&gt;<a href="/{{$thisArticleTopTypeInfo->real_path}}/{{$thisArticleTypeInfo->id}}">{{$thisArticleTypeInfo->typename}}</a>&gt;<a href="/xm/{{$thisArticleInfos->id}}">{{$thisArticleInfos->brandname}}连锁</a>&gt;<a class="dq">新闻</a></span>
    </div>
    @include('frontend.brand_header')
    <div class="clearfix"></div>

    <div class="ny_l">
        <div class="ny_l-js">
            <ul class="ny-list">
                @foreach($brandnews as $brandnew)
                <li>
                    <div class="ny-list1"> <strong><a href="/news/{{$brandnew->id}}">{{$brandnew->title}}</a></strong>
                        <i>{{date('Y-m-d',strtotime($brandnew->created_at))}}</i>
                    </div>
                    <div class="ny-list2">
                        {{$brandnew->description}}
                    </div>
                    <div class="ny-list3">
                        <i><a href="/news/{{$brandnew->id}}">阅读全文</a></i>
                    </div>
                </li>
                @endforeach
                <div class="page clearfix">
                </div>
            </ul>
        </div>
        <!--主体结束-->
        <div class="clearfix"></div>
        @include('frontend.liuyan')
    </div>
    @include('frontend.brand_right')
</div>
@stop
