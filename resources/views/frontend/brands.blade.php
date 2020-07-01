@extends('frontend.frontend')
@section('title'){{$thisTypeinfos->title}}@stop
@section('keywords'){{$thisTypeinfos->keywords}}@stop
@section('description'){{$thisTypeinfos->description}}@stop
@section('headlibs')
    <meta property="article:author" content="3198创业致富网" />
    <link href="/public/css/list.css" rel="stylesheet" type="text/css" />
    <script src="/public/js/lanrenzhijia.js" type="text/javascript"></script>
    <!--[if lte IE 6]>
    <script type="text/javascript" src="/public/js/DD_belatedPNG_0.0.7a.js"></script>
    <script>
        DD_belatedPNG.fix('.png_bg,.png_bg a:hover,.all_sort_all ul li a span');
    </script>
    <![endif]-->
@stop

@section('main')
    <div class="box">
        <div class="bk weizhi" style="margin-top:4px;"><span><a href="/">3198创业致富网</a>&gt;<a class="dq">餐饮美食</a></span></div>
        <div class="search_k">
            <div class="xuanze clearfix">
                <div class="h3">加盟行业：</div>
                <span  class=dq ><a href="/{{$thisTypeinfos->real_path}}">全部</a></span>
                <ul>
                    @foreach($thisTypeSonsInfos as $thisTypeSonsInfo)
                    <li ><a href="/{{$thisTypeinfos->real_path}}/{{$thisTypeSonsInfo->id}}">{{$thisTypeSonsInfo->typename}}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="xuanze clearfix">
                <div class="h3">投资金额：</div>
                <span  class=dq ><a href="/{{$thisTypeinfos->real_path}}">不限</a></span>
                <ul>
                    <li ><a href="http://www.3198.com/cyms?level=1">1万元以下</a></li>
                    <li ><a href="http://www.3198.com/cyms?level=2">1~3万元</a></li>
                    <li ><a href="http://www.3198.com/cyms?level=3">3~5万元</a></li>
                    <li ><a href="http://www.3198.com/cyms?level=4">5~10万元</a></li>
                    <li ><a href="http://www.3198.com/cyms?level=5">10~20万元</a></li>
                    <li ><a href="http://www.3198.com/cyms?level=6">20万元以上</a></li>
                </ul>
            </div>


            <div class="xuanzea clearfix">
                <div class="h3">加盟地区：</div>
                <span  class=dq ><a href="/{{$thisTypeinfos->real_path}}">全部</a></span>
                <ul>
                    <li ><a href="http://www.3198.com/cyms?province=2">北京</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=3">安徽</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=4">福建</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=5">甘肃</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=6">广东</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=7">广西</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=8">贵州</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=9">海南</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=10">河北</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=11">河南</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=12">黑龙江</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=13">湖北</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=14">湖南</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=15">吉林</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=16">江苏</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=17">江西</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=18">辽宁</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=19">内蒙古</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=20">宁夏</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=21">青海</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=22">山东</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=23">山西</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=24">陕西</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=25">上海</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=26">四川</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=27">天津</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=28">西藏</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=29">新疆</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=30">云南</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=31">浙江</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=32">重庆</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=33">香港</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=34">澳门</a></li>
                    <li ><a href="http://www.3198.com/cyms?province=35">台湾</a></li>
                </ul>
                <div class="more"><a style="cursor:pointer;">更多</a></div>
                <script type="text/javascript">
                    $(function(){
                        $('div.more a','.xuanzea').click(function(e){
                            e.preventDefault();
                            if($(this).text()=='更多'){
                                $(this).addClass('more1').text('收起');
                                $(this).parents('.xuanzea').height('auto').find('ul').height('auto');
                            }else{
                                $(this).removeClass('more1').text('更多');
                                $(this).parents('.xuanzea').height('32px').find('ul').height('32px');
                            }
                        })
                    });
                </script>
            </div>
            <div class="dianping clearfix"><span class="fl1"></span><strong>小编点评：</strong>{{$thisTypeinfos->dianping}}</div>
        </div>

    </div>
    <div class="box clearfix"  style="position:relative;">
        <div class="w720">
            <div class="zhonghe">
                <div class="zh_bt">{{$thisTypeinfos->typename}}不限金额项目共<i  style="color:red;">{{$brands->total()}}</i>个匹配商家</div>
                <div class="pailie">
                </div>
            </div>

            <div class="pinpai_list">
                @foreach($brands as $brand)
                    <div class="pinpai_h">
                        <div class="pinpai_h_pic"><span><a href="/xm/{{$brand->id}}" title="{{$brand->brandname}}" target="_blank"><img src="{{$brand->litpic}}" alt="{{$brand->brandname}}" /></a></span></div>
                        <div class="pinpai_h_c">
                            <div class="pp_bt"><strong><a href="/xm/{{$brand->id}}" title="{{$brand->brandname}}" target="_blank">{{$brand->brandname}}</a></strong>[<a href="/{{$thisTypeinfos->real_path}}">{{$thisTypeinfos->typename}}</a> > <a href="/{{$thisTypeinfos->typename}}/{{$brand->arctype->id}}">{{$brand->arctype->typename}}</a>]</div>
                            <span><em><strong>合作模式：{{$brand->brandmoshi}}</strong></em><strong>品牌总部：</strong>{{$brand->brandorigin}}</span>
                            <span><strong>运营机构：</strong>{{$brand->brandgroup}}</span>
                            <p>{{$brand->description}}...</p>
                        </div>
                        <div class="pinpai_h_r">
                            <strong class="pp_pic1">投资金额：<em>1~3万元</em></strong>
                            <span class="pp_pic1">加盟费用：{{$brand->brandpay}}</span>
                            <span class="pp_pic2">项目人气：<code>{{$brand->num}}</code>人</span>
                            <span><a href="/xm/{{$brand->id}}#msg" title="{{$brand->brandname}}" >立即留言咨询</a></span>
                        </div>
                    </div>
                @endforeach

                <div class="page">
                    {{$brands->links()}}
                </div>

            </div>
            <script>
                $(function(){
                    $('.pagination').addClass('am-pagination')
                })
                var jingguo = $('.pinpai_h');
                jingguo.bind('mouseover', function (){
                    $(this).addClass('jg');
                });
                jingguo.bind('mouseout', function (){
                    $(this).removeClass('jg');
                });
            </script>

        </div>

        <div class="w270">

            <div class="bk r_ullb1">
                <div class="h2"><a href=/zhishi/cyms >餐饮加盟知识</a></div>
                <ul>
                    <li><a href="/zhishi/1531" title="小吃车加盟前景好不好？做好小吃车加盟从了解小吃车加盟前景开始" target="_blank">小吃车加盟前景好不好？做好小吃车加盟从了解小吃车加盟前景开始</a></li>
                    <li><a href="/zhishi/5421" title="王婆烤鱼加盟有哪些优势？四大优势加盟支持！" target="_blank">王婆烤鱼加盟有哪些优势？四大优势加盟支持！</a></li>
                    <li><a href="/zhishi/5420" title="超爽酸菜鱼粉加盟有条件是什么？详细条件加盟更有利！" target="_blank">超爽酸菜鱼粉加盟有条件是什么？详细条件加盟更有利！</a></li>
                    <li><a href="/zhishi/5419" title="胖锅轩加盟费要多少钱？14.78万元投资开店" target="_blank">胖锅轩加盟费要多少钱？14.78万元投资开店</a></li>
                    <li><a href="/zhishi/5418" title="煮茶世家饮品加盟总投资是多少?小本经营投资17.22万元" target="_blank">煮茶世家饮品加盟总投资是多少?小本经营投资17.22万元</a></li>
                    <li><a href="/zhishi/5417" title="聚宝渔港总投资多少和加盟条件?" target="_blank">聚宝渔港总投资多少和加盟条件?</a></li>
                </ul>
            </div>

            <div class="bk r_ullb1">
                <div class="h2">
                    <a href=/news/cyms >餐饮加盟资讯</a>
                </div>
                <ul>
                    <li><a href="/news/54650" title="现在致富0元创业商机_优质免费创业商机" target="_blank">现在致富0元创业商机_优质免费创业商机</a></li>
                    <li><a href="/news/56697" title="云鼎汇砂加盟加盟费用要多少钱？只需要12.08万元" target="_blank">云鼎汇砂加盟加盟费用要多少钱？只需要12.08万元</a></li>
                    <li><a href="/news/52756" title="一路飘香小吃车骗局是真的吗？" target="_blank">一路飘香小吃车骗局是真的吗？</a></li>
                    <li><a href="/news/52083" title="15年做啥生意比较致富" target="_blank">15年做啥生意比较致富</a></li>
                    <li><a href="/news/2674" title="香辣虾火锅怎么做？香辣虾火锅制作难不难？" target="_blank">香辣虾火锅怎么做？香辣虾火锅制作难不难？</a></li>
                    <li><a href="/news/53430" title="云味馆官过桥米线加盟骗局揭秘 千万别再上当了" target="_blank">云味馆官过桥米线加盟骗局揭秘 千万别再上当了</a></li>
                </ul>
            </div>

            <div class="bk r_ullb2">
                <div class="h2">餐饮美食最新入住</div>
                <ul class="clearfix">
                    <li>
                        <span><a href="/xm/7104" title="柳螺香" target="_blank"><img alt="柳螺香" src="/uploads/images/2019/03-11/d2a86b6f252f.png"></a></span>
                        <strong><a href="/xm/7104 " title="柳螺香" target="_blank">柳螺香</a></strong>
                    </li>
                    <li>
                        <span><a href="/xm/7103" title="晏氏三千食" target="_blank"><img alt="晏氏三千食" src="/uploads/images/2019/03-11/1cebaffc1997.jpg"></a></span>
                        <strong><a href="/xm/7103 " title="晏氏三千食" target="_blank">晏氏三千食</a></strong>
                    </li>
                    <li>
                        <span><a href="/xm/7102" title="咭味哆" target="_blank"><img alt="咭味哆" src="/uploads/images/2019/03-11/f98164200017.jpg"></a></span>
                        <strong><a href="/xm/7102 " title="咭味哆" target="_blank">咭味哆</a></strong>
                    </li>
                    <li>
                        <span><a href="/xm/7101" title="糖纸甜品" target="_blank"><img alt="糖纸甜品" src=""></a></span>
                        <strong><a href="/xm/7101 " title="糖纸甜品" target="_blank">糖纸甜品</a></strong>
                    </li>
                    <li>
                        <span><a href="/xm/7100" title="安仔包" target="_blank"><img alt="安仔包" src="/uploads/images/2019/03-11/883c9eb0f594.jpg"></a></span>
                        <strong><a href="/xm/7100 " title="安仔包" target="_blank">安仔包</a></strong>
                    </li>
                    <li>
                        <span><a href="/xm/7099" title="爱克汀咖啡" target="_blank"><img alt="爱克汀咖啡" src="/uploads/images/2019/03-11/2215aadb8f73.jpg"></a></span>
                        <strong><a href="/xm/7099 " title="爱克汀咖啡" target="_blank">爱克汀咖啡</a></strong>
                    </li>
                </ul>
            </div>


            <div class="bk r_paihang">
                <div class="h2">餐饮美食同类型品牌排行</div>
                <ul class="zc_text1">
                    <li>
                        <strong>1</strong>
                        <p class="on">
                            <em>4359</em>好煎道生煎</p>
                        <dl class="case1">
                            <dt><a href="/xm/2669" title="好煎道生煎" target="_blank"><img src="/uploads/images/2019/08-05/aa490710cf30.jpg" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/2669" title="好煎道生煎" target="_blank">好煎道生煎</a></div>
                                <span>投资金额：3~5万元</span>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>2</strong>
                        <p class="on">
                            <em>3627</em>星巴克冰淇淋</p>
                        <dl class="case1">
                            <dt><a href="/xm/252" title="星巴克冰淇淋" target="_blank"><img src="/uploads/images/2015/08-27/e45f2d5e68ae.jpg" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/252" title="星巴克冰淇淋" target="_blank">星巴克冰淇淋</a></div>
                                <span>投资金额：5~10万元</span>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>3</strong>
                        <p class="on">
                            <em>3020</em>珍奇茗</p>
                        <dl class="case1">
                            <dt><a href="/xm/6165" title="珍奇茗" target="_blank"><img src="/uploads/images/2016/11-03/26199d925dcd.jpg" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/6165" title="珍奇茗" target="_blank">珍奇茗</a></div>
                                <span>投资金额：20万元以上</span>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>4</strong>
                        <p class="on">
                            <em>2830</em>潘师傅红烧肉</p>
                        <dl class="case1">
                            <dt><a href="/xm/27" title="潘师傅红烧肉" target="_blank"><img src="/uploads/images/2016/10-27/ee19dad785cb.jpg" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/27" title="潘师傅红烧肉" target="_blank">潘师傅红烧肉</a></div>
                                <span>投资金额：5~10万元</span>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>5</strong>
                        <p class="on">
                            <em>2768</em>汉堡小子</p>
                        <dl class="case1">
                            <dt><a href="/xm/6060" title="汉堡小子" target="_blank"><img src="/uploads/images/2016/10-27/fcbdc5ef8734.png" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/6060" title="汉堡小子" target="_blank">汉堡小子</a></div>
                                <span>投资金额：20万元以上</span>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>6</strong>
                        <p class="on">
                            <em>2746</em>胖哥俩肉蟹煲</p>
                        <dl class="case1">
                            <dt><a href="/xm/3086" title="胖哥俩肉蟹煲" target="_blank"><img src="/uploads/images/2016/04-08/ef441780d429.jpg" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/3086" title="胖哥俩肉蟹煲" target="_blank">胖哥俩肉蟹煲</a></div>
                                <span>投资金额：20万元以上</span>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>7</strong>
                        <p class="on">
                            <em>2684</em>三和乌龙茶叶</p>
                        <dl class="case1">
                            <dt><a href="/xm/1905" title="三和乌龙茶叶" target="_blank"><img src="/uploads/images/2015/12-25/63a3b065112f.jpg" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/1905" title="三和乌龙茶叶" target="_blank">三和乌龙茶叶</a></div>
                                <span>投资金额：1万元以下</span>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>8</strong>
                        <p class="on">
                            <em>2671</em>福宇记黄焖鸡米饭 </p>
                        <dl class="case1">
                            <dt><a href="/xm/6947" title="福宇记黄焖鸡米饭 " target="_blank"><img src="/uploads/images/2017/04-14/69c0e9e09099.jpg" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/6947" title="福宇记黄焖鸡米饭 " target="_blank">福宇记黄焖鸡米饭 </a></div>
                                <span>投资金额：5~10万元</span>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>9</strong>
                        <p class="on">
                            <em>2647</em>宫悦贡茶</p>
                        <dl class="case1">
                            <dt><a href="/xm/6930" title="宫悦贡茶" target="_blank"><img src="/uploads/images/2017/04-13/6e4e8eadda16.jpg" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/6930" title="宫悦贡茶" target="_blank">宫悦贡茶</a></div>
                                <span>投资金额：3~5万元</span>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>10</strong>
                        <p class="on">
                            <em>2643</em>9068香辣虾</p>
                        <dl class="case1">
                            <dt><a href="/xm/264" title="9068香辣虾" target="_blank"><img src="/uploads/images/2015/08-27/57821c197146.jpg" /></a></dt>
                            <dd>
                                <div class="h3"><a href="/xm/264" title="9068香辣虾" target="_blank">9068香辣虾</a></div>
                                <span>投资金额：5~10万元</span>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop
