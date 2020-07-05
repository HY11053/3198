@extends('mobile.mobile')
@section('title'){{$thisArticleInfos->title}} - {{config('app.indexname')}}@stop
@section('keywords'){{$thisArticleInfos->keywords}}@stop
@section('description'){{$thisArticleInfos->description}}@stop
@section('main_content')
    <div class="weizhi"><span><a href="/"><i class="iconfont icon-dingwei"></i>   首页</a> &gt; <a href="https://m.anxjm.com/newsPage/1607/">加盟优势</a> &gt;正文： </span> </div>
    <div class="list_middle">
        <div class="a_content_brand">
            <div class="a_content  padding-bottom0">
                <h1>{{$thisArticleInfos->title}}</h1>
                <small>时间：{{$thisArticleInfos->create}}&nbsp;&nbsp;&nbsp;&nbsp;浏览量:{{$thisArticleInfos->click}}</small>
            </div>
        </div>
        <div class="brand-headerinfo margin-bottom0">
            <div class="brand-top">
                <div class="brand-logo">
                    <img src="/storage/uploads/2020/07/03/464adbeabd1311ea8e9102420a7b0002.png" alt="金可酸菜鱼加盟">
                </div>
                <div class="brandmiddle">
                    <h2><a href="/busInfo/43785.html">金可酸菜鱼加盟</a></h2>
                    <div class="brandpay">
                        基本投资:    <em>10-20万</em>
                    </div>
                    <div class="brandtypes">
                        <em>所属分类:</em><span><a href="/ms/">餐饮美食加盟</a></span> <span><a href="/179/">酸菜鱼加盟</a></span>
                    </div>
                    <div class="brandothers">
                        <span>所属公司:</span><span>金可酸菜鱼餐饮有限公司</span>
                    </div>
                </div>
            </div>
            <button rel="nofollow" class="kd-btn fr ml10 btn-marklog  js_popup">开店方案</button>
        </div>
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
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/234761.html">
                        <div class="left fl">
                            <div class="lefttitle">金可酸菜鱼加盟费多少钱?小本运营，立业无后顾之忧</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/2020/07/03/cd6e445ebd1311ea9c3402420a7b0002.png">
                        </div>
                    </a>
                </div>
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/234758.html">
                        <div class="left fl">
                            <div class="lefttitle">留步酸菜鱼加盟怎么样？强力品牌，轻松创业</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/2020/07/03/657218c2bd1211ea801602420a7b0002.png">
                        </div>
                    </a>
                </div>
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/234757.html">
                        <div class="left fl">
                            <div class="lefttitle">留步酸菜鱼加盟费多少钱?投入资金可自由选择，无资金担心</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/2020/07/03/3c851978bd1211eab2cc02420a7b0002.png">
                        </div>
                    </a>
                </div>
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/234755.html">
                        <div class="left fl">
                            <div class="lefttitle">钱氏酸菜鱼加盟怎么样?多项优势，成就您的各利双收</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/2020/07/03/288dc998bd1111eabbf302420a7b0002.png">
                        </div>
                    </a>
                </div>
                <div class="newslist-modellist">
                    <a href="https://m.anxjm.com/news/234753.html">
                        <div class="left fl">
                            <div class="lefttitle">钱氏酸菜鱼加盟费多少钱?启动资金不多，立业无后顾之忧</div>
                            <div class="text">
                                <div class="message">来源：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <img src="https://www.anxjm.com/storage/uploads/2020/07/03/f8495ac2bd1011ea8dd502420a7b0002.png">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="brandlist-model">
        <div class="brandlist-modelbox clearfix">
            <i></i>
            <div class="title">猜你喜欢</div>
            <div class="brandlist-modelcontent">
                <div class="brandlist-modellist  fr ">
                    <a href="/busInfo/43775.html">
                        <img src="/storage/uploads/2020/07/03/d6d0828ebd1111eab38d02420a7b0004.jpg" alt="涵小姐酸菜鱼加盟">
                        <div class="brandlist-modellistcontent">
                            <div class="listtitle">涵小姐酸菜鱼加盟</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">¥10~15万                                    </div>
                            <div class="textright fr">
                                07-03
                            </div>
                        </div>
                    </a>
                </div>
                <div class="brandlist-modellist  fl ">
                    <a href="/busInfo/43776.html">
                        <img src="/storage/uploads/2020/07/03/b2738ea4bd1111ea974502420a7b0002.png" alt="留步酸菜鱼加盟">
                        <div class="brandlist-modellistcontent">
                            <div class="listtitle">留步酸菜鱼加盟</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">¥10-20万元                                    </div>
                            <div class="textright fr">
                                07-03
                            </div>
                        </div>
                    </a>
                </div>
                <div class="brandlist-modellist  fr ">
                    <a href="/busInfo/43777.html">
                        <img src="/storage/uploads/2020/07/03/19c29a50bd1211eab24802420a7b0004.jpg" alt="学子居大盘鸡酸菜鱼加盟">
                        <div class="brandlist-modellistcontent">
                            <div class="listtitle">学子居大盘鸡酸菜鱼加盟</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">¥10~15万                                    </div>
                            <div class="textright fr">
                                07-03
                            </div>
                        </div>
                    </a>
                </div>
                <div class="brandlist-modellist  fl ">
                    <a href="/busInfo/43778.html">
                        <img src="/storage/uploads/2020/07/03/28f10822bd1211eab51802420a7b0004.png" alt="千家邻酸菜鱼加盟">
                        <div class="brandlist-modellistcontent">
                            <div class="listtitle">千家邻酸菜鱼加盟</div>
                            <div class="listtext">
                                <p></p>
                            </div>
                            <div class="textleft fl">¥5-10万元                                    </div>
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

