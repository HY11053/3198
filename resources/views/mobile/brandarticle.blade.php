@extends('mobile.mobile')
@section('title'){{$thisArticleInfos->title}}- {{config('app.indexname')}}@stop
@section('keywords'){{$thisArticleInfos->keywords}}@stop
@section('description'){{$thisArticleInfos->description}}@stop
@section('main_content')
    <div class="weizhi">
        <span> <a href="/"><i class="iconfont icon-dingwei"></i>   首页</a>&gt;<a href="/{{$thisArticleTopTypeInfo->real_path}}/{{$thisArticleTypeInfo->id}}">{{$thisArticleTypeInfo->typename}}</a> &gt;<a class="dq">{{$thisArticleInfos->brandname}}连锁</span>
    </div>
    @include('mobile.brand_header')
    <div class="content-main" id="b-info">
        <div class="jm_xq_con on linear-gradient">
            {!! $thisArticleInfos->body !!}
        </div>
        <div class="display" style="display: block;"><span>展开全文 <i class="iconfont icon-jiantou-xia"></i></span></div>
        <div class="hidden" style="display: none;"><span>收起全文 <i class="iconfont icon-jiantou-shang"></i></span></div>
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