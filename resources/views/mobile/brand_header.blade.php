<div class="brand-headerinfo">
    <div class="brand-top">
        <div class="brand-logo">
            <img src="{{$thisArticleInfos->litpic}}" alt="{{$thisArticleInfos->brandname}}">
        </div>
        <div class="brandmiddle">
            <h1>{{$thisArticleInfos->brandname}}连锁</h1>
            <div class="brandpay">
                基本投资:    <em>{{$investmentlists[$thisArticleInfos->tzid]}}</em>
            </div>
            <div class="brandtypes">
                <em>所属分类:</em><span><a href="/{{$thisArticleTopTypeInfo->real_path}}">{{$thisArticleTopTypeInfo->typename}}</a></span> <span><a href="/{{$thisArticleTopTypeInfo->real_path}}/{{$thisArticleTypeInfo->id}}">{{$thisArticleTypeInfo->typename}}</a></span>
            </div>
            <div class="brandothers">
                <span>所属公司:</span><span>{{$thisArticleInfos->brandgroup}}</span>
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
