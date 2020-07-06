@extends('mobile.mobile')
@section('title'){{$thisArticleInfos->brandname}}新闻- {{config('app.indexname')}}@stop
@section('keywords'){{$thisArticleInfos->brandname}}新闻@stop
@section('description'){{$thisArticleInfos->brandname}}新闻提供最新{{$thisArticleInfos->brandname}}动态信息。@stop
@section('main_content')
    <div class="weizhi">
        <span> <a href="/"><i class="iconfont icon-dingwei"></i>   首页</a>&gt;<a href="/{{$thisArticleTopTypeInfo->real_path}}/{{$thisArticleTypeInfo->id}}">{{$thisArticleTypeInfo->typename}}</a> &gt;<a class="dq">{{$thisArticleInfos->brandname}}连锁</span>
    </div>
    @include('mobile.brand_header')
    <div class="list_middle">
        <div class="text_centre">
            <ul>
                @foreach($brandnews as $brandnew)
                    <li>
                        <a href="/news/{{$brandnew->id}}">
                            <div class="img_show"><img src="{{$brandnew->litpic}}" class="img_list"></div>
                            <div class="cont">
                                <p class="tit_1">{{$brandnew->title}}</p>
                                <p class="info">{{$brandnew->description}}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @include('mobile.liuyan')
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
    @if(count($brandnews))
        <div id="newslist-model">
            <div class="newslist-modelbox clearfix">
                <i></i>
                <div class="title">项目资讯</div>
                <div class="newslist-modelcontent">
                    @foreach($brandnews as $brandnew)
                        <div class="newslist-modellist">
                            <a href="/news/{{$brandnew->id}}">
                                <div class="left fl">
                                    <div class="lefttitle">{{$brandnew->title}}</div>
                                    <div class="text">
                                        <div class="message">来源：{{config('app.indexname')}}</div>
                                    </div>
                                </div>
                                <div class="right fr">
                                    <img src="{{$brandnew->litpic}}">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@stop
