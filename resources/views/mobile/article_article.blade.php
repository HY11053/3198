@extends('mobile.mobile')
@section('title'){{$thisArticleInfos->title}} - {{config('app.indexname')}}@stop
@section('keywords'){{$thisArticleInfos->keywords}}@stop
@section('description'){{$thisArticleInfos->description}}@stop
@section('main_content')
    <div class="weizhi"><span><a href="/"><i class="iconfont icon-dingwei"></i>   首页</a> &gt;<a href="/{{$path}}">加盟资讯</a>&gt;@if($thisArticleTopTypeInfo) <a href="/news/{{$thisArticleTopTypeInfo->real_path}}">{{$thisArticleTopTypeInfo->typename}}</a> &gt; <a href="/{{$path}}/{{$thisArticleTopTypeInfo->real_path}}/{{$thisArticleTypeInfo->id}}">{{$thisArticleTypeInfo->typename}}</a> @endif </span> </div>
    <div class="list_middle">
        <div class="a_content_brand">
            <div class="a_content  padding-bottom0">
                <h1>{{$thisArticleInfos->title}}</h1>
                <small>时间：{{$thisArticleInfos->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;浏览量:{{$thisArticleInfos->click}}</small>
            </div>
        </div>
        @if($thisBrandArticleInfos)
            <div class="brand-headerinfo margin-bottom0">
                <div class="brand-top">
                    <div class="brand-logo">
                        <img src="{{$thisBrandArticleInfos->litpic}}" alt="{{$thisBrandArticleInfos->brandname}}">
                    </div>
                    <div class="brandmiddle">
                        <h2><a href="/xm/{{$thisBrandArticleInfos->id}}">{{$thisBrandArticleInfos->brandname}}</a></h2>
                        <div class="brandpay">
                            基本投资:    <em>{{$investmentlists[$thisBrandArticleInfos->tzid]}}</em>
                        </div>
                        <div class="brandtypes">
                            <em>所属分类:</em><span><a href="/{{$thisArticleTopTypeInfo->real_path}}">{{$thisArticleTopTypeInfo->typename}}</a></span> <span><a href="{{$thisArticleTopTypeInfo->real_path}}/{{$thisArticleTypeInfo->id}}">{{$thisArticleTypeInfo->typename}}</a></span>
                        </div>
                        <div class="brandothers">
                            <span>所属公司:</span><span>{{$thisBrandArticleInfos->brandgroup}}</span>
                        </div>
                    </div>
                </div>
                <button rel="nofollow" class="kd-btn fr ml10 btn-marklog  js_popup">开店方案</button>
            </div>
        @endif
        <div class="a_content">
         {!! $thisArticleInfos->body !!}
        </div>
    </div>
    @include('mobile.liuyan')
    <div id="newslist-model">
        <div class="newslist-modelbox clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="newslist-modelcontent">
                @foreach($thisarticlelatestnewslists as $thisarticlelatestnewslist)
                <div class="newslist-modellist">
                    <a href="/news/{{$thisarticlelatestnewslist->id}}">
                        <div class="left fl">
                            <div class="lefttitle">{{$thisarticlelatestnewslist->title}}</div>
                            <div class="text">
                                <div class="message">来源：{{config('app.indexname')}}</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="{{$thisarticlelatestnewslist->litpic}}">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="brandlist-model">
        <div class="brandlist-modelbox clearfix">
            <i></i>
            <div class="title">猜你喜欢</div>
            <div class="brandlist-modelcontent">
                @foreach($tongleibrands as $tongleibrand)
                    <div class="brandlist-modellist  @if($loop->iteration %2==0) fl @else fr @endif ">
                        <a href="/xm/{{$tongleibrand->id}}">
                            <img src="{{$tongleibrand->litpic}}" alt="{{$tongleibrand->brandname}}">
                            <div class="brandlist-modellistcontent">
                                <div class="listtitle">{{$tongleibrand->brandname}}</div>
                                <div class="listtext">
                                    <p></p>
                                </div>
                                <div class="textleft fl">¥{{$investmentlists[$tongleibrand->tzid]}}</div>
                                <div class="textright fr">
                                    07-03
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop

