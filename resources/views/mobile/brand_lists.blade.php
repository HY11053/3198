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
    <div class="lunbo">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <li class="swiper-slide"><a href="/busInfo/31402.html"><img src="/mobile/images/dongfangruili.jpg" alt="东方瑞丽洗衣" /></a></li>
                <li class="swiper-slide"><a href="/busInfo/20582.html"><img src="/mobile/images/juneng.png" alt="聚能教育加盟" /></a></li>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="weizhi">
        <span><a href="/"><i class="iconfont icon-dingwei"></i>   首页</a> &gt;   <a href="https://m.anxjm.com/ms/">餐饮美食</a>&nbsp;&gt;&nbsp;列表：</span>
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
                            <li><i class="iconfont icon-jiamengfei"></i>投资金额: <strong> 5-10万元</strong></li>
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
            <div class="title">项目资讯</div>
            <div class="newslist-modelcontent">
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/232118.html">
                        <div class="left fl">
                            <div class="lefttitle">川西坝子红码头火锅加盟好不好？少花钱少出力，轻松开店</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/image/2020/06/10/01a35853caabbbd534872f03d9986631.jpg">
                        </div>
                    </a>
                </div>
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/232117.html">
                        <div class="left fl">
                            <div class="lefttitle">蒸煮名堂加盟怎么样？一站式服务，创业无担忧</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/image/2020/06/10/b6dbedd1e1ca243dc58c9ec7b1b3da22.jpg">
                        </div>
                    </a>
                </div>
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/232116.html">
                        <div class="left fl">
                            <div class="lefttitle">为什么要加盟生如夏花泰式海鲜火锅？日进斗金，营收硬实力</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/image/2020/06/10/db64347907095e7628aae1702e8c1083.jpg">
                        </div>
                    </a>
                </div>
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/232115.html">
                        <div class="left fl">
                            <div class="lefttitle">子墨豆浆加盟赚钱吗？门槛低收益高 共赢财富未来</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/image/2020/06/10/49ea56dfca0401814ca82207432476ce.jpg">
                        </div>
                    </a>
                </div>
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/232114.html">
                        <div class="left fl">
                            <div class="lefttitle">生如夏花泰式海鲜火锅加盟好不好？总部扶持，不怕走弯路</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/image/2020/06/10/7ec82965866c7cc491d563e834b44381.jpg">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
