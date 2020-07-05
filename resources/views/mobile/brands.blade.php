@extends('mobile.mobile')
@if(empty($province) && empty($level))
@section('title'){{$thisTypeinfos->title}} - {{config('app.indexname')}}@stop
@section('keywords'){{$thisTypeinfos->keywords}}@stop
@section('description'){{$thisTypeinfos->description}}@stop
@elseif(!empty($level) && empty($province))
@section('title'){{$level}}{{$thisTypeinfos->typename}}项目_开{{$level}}{{$thisTypeinfos->typename}}店好项目 - {{config('app.indexname')}}@stop
@section('keywords'){{$thisTypeinfos->keywords}}@stop
@section('description'){{$level}}{{$thisTypeinfos->typename}}好项目大全，{{$level}}资金开{{$thisTypeinfos->typename}}店优秀项目推荐！致富好项目不容错过，机会就在3198商机网！@stop
@else
@section('title'){{$province}}{{$level}}{{$thisTypeinfos->typename}}好项目_{{$province}}{{str_replace('加盟','',$thisTypeinfos->typename)}}致富项目 - {{config('app.indexname')}}@stop
@section('keywords'){{$thisTypeinfos->keywords}}@stop
@section('description'){{$province}}{{$level}}{{$thisTypeinfos->typename}}好项目大全，在{{$province}}{{$level}}开{{$thisTypeinfos->typename}}店优秀项目推荐！致富好项目不容错过，机会就在3198商机网！@stop
@endif
@section('main_content')
@include('mobile.lunbo')
    <div class="weizhi">
        <span><a href="/"><i class="iconfont icon-dingwei"></i>   首页</a> &gt;   <a href="/{{$thisTypeinfos->real_path}}">{{$thisTypeinfos->typename}}</a></span>
    </div>
    <div class="brand_list">
        @foreach($brands as $brand)
        <div class="brandlists">
            <dl class="branditem">
                <dt class="brand-topinfo">
                    <div class="brandlist-logo">
                        <img src="{{$brand->litpic}}" alt="{{$brand->brandname}}">
                    </div>
                    <div class="brand-typeinfo">
                        <h2><a href="/xm/{{$brand->id}}">{{$brand->brandname}}</a></h2>
                        <ul>
                            <li><i class="iconfont icon-jiamengfei"></i>投资金额: <strong> {{$investmentlists[$brand->tzid]}}</strong></li>
                            <li><i class="iconfont icon-mendian"></i>门店总数: {{$brand->brandnum}}家</li>
                            <li><i class="iconfont icon-chanp"></i>品牌分类:{{$thisTypeinfos->typename}}</li>
                        </ul>
                    </div>
                </dt>
                <dd class="brand-msginfo">
                    {{$brand->description}}
                 </dd>
                <div class="brnad-confirm">
                    <i class="iconfont icon-yirenzheng"></i>
                </div>
            </dl>
        </div>
        @endforeach
        <div class="page">
        {{$brands->links()}}
        </div>
    </div>
    <div id="newslist-model">
        <div class="newslist-modelbox clearfix">
            <i></i>
            <div class="title">{{$thisTypeinfos->typename}}资讯</div>
            <div class="newslist-modelcontent">
                @foreach($thisTypeNews as $thisTypeNew)
                <div class="newslist-modellist">
                    <a href="/news/{{$thisTypeNew->id}}">
                        <div class="left fl">
                            <div class="lefttitle">{{$thisTypeNew->title}}</div>
                            <div class="text">
                                <div class="message">来源：{{config('app.indexname')}}</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="{{$thisTypeNew->litpic}}">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
<div id="newslist-model">
    <div class="newslist-modelbox clearfix">
        <i></i>
        <div class="title">{{$thisTypeinfos->typename}}知识</div>
        <div class="newslist-modelcontent">
            @foreach($thisTypeKnowledges as $thisTypeKnowledge)
                <div class="newslist-modellist">
                    <a href="/zhishi/{{$thisTypeKnowledge->id}}">
                        <div class="left fl">
                            <div class="lefttitle">{{$thisTypeKnowledge->title}}</div>
                            <div class="text">
                                <div class="message">来源：{{config('app.indexname')}}</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="{{$thisTypeKnowledge->litpic}}">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@stop
