@extends('mobile.mobile')
@section('title'){{$thisArticleInfos->title}}- {{config('app.indexname')}}@stop
@section('keywords'){{$thisArticleInfos->keywords}}@stop
@section('description'){{$thisArticleInfos->description}}@stop
@section('main_content')
    <div class="weizhi">
        <span> <a href="/"><i class="iconfont icon-dingwei"></i>   首页</a>&gt;<a href="https://m.anxjm.com/ms/">餐饮美食</a>&gt;<a href="https://m.anxjm.com/179/">酸菜鱼</a> &gt; 小鱼儿酸菜鱼加盟</span>
    </div>
    <div class="brand-headerinfo">
        <div class="brand-top">
            <div class="brand-logo">
                <img src="/storage/uploads/2020/07/03/794995f8bd1411eab75402420a7b0004.png" alt="小鱼儿酸菜鱼加盟">
            </div>
            <div class="brandmiddle">
                <h1>小鱼儿酸菜鱼加盟</h1>
                <div class="brandpay">
                    基本投资:    <em>10-20万</em>
                </div>
                <div class="brandtypes">
                    <em>所属分类:</em><span><a href="/ms/">餐饮美食加盟</a></span> <span><a href="/179/">酸菜鱼加盟</a></span>
                </div>
                <div class="brandothers">
                    <span>所属公司:</span><span>北京小鱼儿餐饮管理有限公司</span>
                </div>
            </div>
        </div>
        <div class="layout">
            <div class="jm-info">
                <div><i><em>170</em>家</i><span>门店数</span></div>
                <div><i><em>548</em>人</i><span>意向加盟</span></div>
                <div><i><em>152</em>人</i><span>申请加盟</span></div>
                <div><i><em>878</em>人</i><span>项目咨询</span></div>
            </div>
        </div>
        <button rel="nofollow" class="kd-btn fr ml10 btn-marklog js_popup">开店方案</button>
    </div>
    <div id="focus" class="focus imgaepics">
        <h2><i class="iconfont icon-mendian"></i> 项目门店&产品图片</h2>
        <div class="swiper-container" id="height3rem">
            <div class="swiper-wrapper">
                @foreach(explode(',',$thisArticleInfos->imagepics) as $pic)
                <li class="swiper-slide"><img src="{{$pic}}"></li>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
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
                <div class="brandlist-modellist  fr ">
                    <a href="/busInfo/43779.html">
                        <img src="/storage/uploads/2020/07/03/4e77cfeabd1211ea934302420a7b0004.png" alt="姜师兄酸菜鱼加盟">
                        <div class="brandlist-modellistcontent">
                            <div class="listtitle">姜师兄酸菜鱼加盟</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">
                                ¥5-10万元                                    </div>
                            <div class="textright fr">
                                07-03
                            </div>
                        </div>
                    </a>
                </div>
                <div class="brandlist-modellist  fl ">
                    <a href="/busInfo/43780.html">
                        <img src="/storage/uploads/2020/07/03/6cca93d8bd1211ea8e3302420a7b0004.jpg" alt="美腩子烧汁虾酸菜鱼加盟">
                        <div class="brandlist-modellistcontent">
                            <div class="listtitle">美腩子烧汁虾酸菜鱼加盟</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">
                                ¥10~15万                                    </div>
                            <div class="textright fr">
                                07-03
                            </div>
                        </div>
                    </a>
                </div>
                <div class="brandlist-modellist  fr ">
                    <a href="/busInfo/43781.html">
                        <img src="/storage/uploads/2020/07/03/8cfc43a4bd1211ea9ce002420a7b0004.png" alt="凯荟不止酸菜鱼加盟">
                        <div class="brandlist-modellistcontent">
                            <div class="listtitle">凯荟不止酸菜鱼加盟</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">
                                ¥5-10万元                                    </div>
                            <div class="textright fr">
                                07-03
                            </div>
                        </div>
                    </a>
                </div>
                <div class="brandlist-modellist  fl ">
                    <a href="/busInfo/43782.html">
                        <img src="/storage/uploads/2020/07/03/f7ca815abd1211eab7df02420a7b0004.png" alt="蜀家酸菜鱼加盟">
                        <div class="brandlist-modellistcontent">
                            <div class="listtitle">蜀家酸菜鱼加盟</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">
                                ¥5-10万元                                    </div>
                            <div class="textright fr">
                                07-03
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
