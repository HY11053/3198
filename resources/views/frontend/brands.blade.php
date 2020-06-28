@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
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
                <span  class=dq ><a href="/cyms">全部</a></span>
                <ul>
                    <li ><a href="/cyms/2">小吃</a></li>
                    <li ><a href="/cyms/3">休闲饮品</a></li>
                    <li ><a href="/cyms/175">快餐</a></li>
                    <li ><a href="/cyms/188">甜品</a></li>
                    <li ><a href="/cyms/198">面食</a></li>
                    <li ><a href="/cyms/199">火锅</a></li>
                    <li ><a href="/cyms/201">熟食</a></li>
                    <li ><a href="/cyms/203">休闲食品</a></li>
                    <li ><a href="/cyms/204">烧烤</a></li>
                    <li ><a href="/cyms/210">西餐</a></li>
                    <li ><a href="/cyms/212">冰淇淋</a></li>
                    <li ><a href="/cyms/213">香锅</a></li>
                    <li ><a href="/cyms/214">小吃车</a></li>
                    <li ><a href="/cyms/215">砂锅</a></li>
                    <li ><a href="/cyms/216">茶叶</a></li>
                    <li ><a href="/cyms/217">干锅</a></li>
                    <li ><a href="/cyms/218">中餐</a></li>
                    <li ><a href="/cyms/219">进口食品</a></li>
                    <li ><a href="/cyms/220">调味品</a></li>
                    <li ><a href="/cyms/221">品牌餐饮</a></li>
                </ul>
            </div>

            <div class="xuanze clearfix">
                <div class="h3">投资金额：</div>
                <span class=dq><a href="http://www.3198.com/cyms">不限</a></span>
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
                <span class=dq><a href="http://www.3198.com/cyms">全部</a></span>
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
            <div class="dianping clearfix"><span class="fl1"></span><strong>小编点评：</strong>中国传承5000年的文化底蕴，餐饮美食是其重要的组成部分。传承至今，我国餐饮美食已衍生出小吃、休闲饮品、甜品、火锅、熟食、烧烤等多种多样的美食类别。21世纪，餐饮美食是一个朝阳产业，只要有中国人的地方，餐饮美食加盟就会是长期兴盛的市场。</div>
        </div>

    </div>
    <div class="box clearfix"  style="position:relative;">
        <div class="w720">
            <div class="zhonghe">
                <div class="zh_bt">餐饮美食不限金额项目共<i  style="color:red;">2275</i>个匹配商家</div>
                <div class="pailie">
                </div>
            </div>

            <div class="pinpai_list">
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7104" title="柳螺香" target="_blank"><img src="/uploads/images/2019/03-11/d2a86b6f252f.png" alt="柳螺香" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7104" title="柳螺香" target="_blank">柳螺香</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/2">小吃</a>]</div>
                        <span><em><strong>合作模式：</strong></em><strong>品牌总部：</strong>南宁</span>
                        <span><strong>运营机构：</strong>柳螺香加盟公司</span>
                        <p>经销培训业务，相继在广西、云南、湖南、山东、泰国等地已有90余家经销店。
                            公司宗旨&ldquo;为顾客创造价值，为经销商创造&rdquo;的经营理念，在更新产品种类的基础上狠抓卫生质量关，在消费者心目树立了良好的企业形象，为经销商创造了非常可观的效益。几年来，在社会各界的大力支持和公司员工共同努力下，&ldquo;柳螺香&rdquo;现以发展成为广西餐饮企业一个极具民族风味特色和有影响力的代理品牌。公司将在整顿巩固发展华南市场的同时，大力开拓国内外市场，力争将&ldquo;柳螺香&rdquo;打造成为一流的中式米粉代理品牌。...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>1~3万元</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>919</code>人</span>
                        <span><a href="/xm/7104#msg" title="柳螺香" >立即留言咨询</a></span>
                    </div>
                </div>
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7103" title="晏氏三千食" target="_blank"><img src="/uploads/images/2019/03-11/1cebaffc1997.jpg" alt="晏氏三千食" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7103" title="晏氏三千食" target="_blank">晏氏三千食</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/2">小吃</a>]</div>
                        <span><em><strong>合作模式：</strong></em><strong>品牌总部：</strong>成都</span>
                        <span><strong>运营机构：</strong>晏氏三千食加盟公司</span>
                        <p>营养的多种前卫独特的消费观念，因此而受到食客们的热捧。晏氏三千食，不同于传统的火锅营业模式，没有厨师，简单的底料、小料，各店面就地采购各种菜品，只需复制管理流程，便可享受&quot;百店如一&quot;的质量和速度，合作必赢!晏氏三千食热闹、热情的就餐环境，还有助于形成沟通交际的热烈气氛，长时间闲聊，火锅里菜也不会凉，非常适合喝酒用餐时间长的中国人。最重要的一点是，晏氏三千食在点菜、加菜以后都可以立即上桌，客人不必耐心等待。


                            ...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>1~3万元</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>605</code>人</span>
                        <span><a href="/xm/7103#msg" title="晏氏三千食" >立即留言咨询</a></span>
                    </div>
                </div>
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7102" title="咭味哆" target="_blank"><img src="/uploads/images/2019/03-11/f98164200017.jpg" alt="咭味哆" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7102" title="咭味哆" target="_blank">咭味哆</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/2">小吃</a>]</div>
                        <span><em><strong>合作模式：</strong></em><strong>品牌总部：</strong>绍兴</span>
                        <span><strong>运营机构：</strong>绍兴市咭味哆食品有限公司</span>
                        <p>它要招聘更多的加盟商。现如今，咭味哆目前已经拥有了完善的加盟体系，能够给加盟商们提供优质的加盟支持，对于初期创业的人士来说，抓住咭味哆品牌，就等于抓住了成功的机会。


                            ...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>1万元以下</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>716</code>人</span>
                        <span><a href="/xm/7102#msg" title="咭味哆" >立即留言咨询</a></span>
                    </div>
                </div>
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7101" title="糖纸甜品" target="_blank"><img src="" alt="糖纸甜品" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7101" title="糖纸甜品" target="_blank">糖纸甜品</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/188">甜品</a>]</div>
                        <span><em><strong>合作模式：</strong></em><strong>品牌总部：</strong>宁波</span>
                        <span><strong>运营机构：</strong>糖纸甜品加盟公司</span>
                        <p>是重要的，糖纸甜品具有这样的特点，每每种甜品都选择新鲜食 材制造，另外采取传统制作工艺保证味道地道，深受顾客喜爱和推崇。


                            ...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>1万元以下</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>128</code>人</span>
                        <span><a href="/xm/7101#msg" title="糖纸甜品" >立即留言咨询</a></span>
                    </div>
                </div>
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7100" title="安仔包" target="_blank"><img src="/uploads/images/2019/03-11/883c9eb0f594.jpg" alt="安仔包" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7100" title="安仔包" target="_blank">安仔包</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/2">小吃</a>]</div>
                        <span><em><strong>合作模式：</strong></em><strong>品牌总部：</strong>西安</span>
                        <span><strong>运营机构：</strong>中盛创业餐饮管理有限公司</span>
                        <p>使包子更符合现代人的口感，让消费者从安仔包子中找到新的感觉。
                            安仔包子属于中盛创业是国内先进的品牌餐饮小吃连锁孵化基地，总部坐落于西安巿高新科技产业园，成立于2007年，安仔包子前身是专业为企业提供营销策划、管理咨询、顾问辅导和企业实战经营管理培训的企业管理咨询机构，因此，公司高层团队均为资深的企业实战营销、管理专家。
                            安仔包子本着＂福慧双修，利乐众生，共同创业，感恩共赢＂的企业宗旨，以帮助创业者快速实现创业梦想和帮助区域代理商成为贵族企业家为己任。运营的项目均为投资小、风险小、有效快，利润可观的餐饮小吃，安仔包子，是当下无数小微创业者的优选。团队信奉＂诚心诚意、必成一事＂的信条，在团队的精耕细作、精益求精的运作下，帮助数百人实现了&ldquo;创业三年，有车有房&rdquo;的梦想。


                            ...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>1~3万元</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>742</code>人</span>
                        <span><a href="/xm/7100#msg" title="安仔包" >立即留言咨询</a></span>
                    </div>
                </div>
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7099" title="爱克汀咖啡" target="_blank"><img src="/uploads/images/2019/03-11/2215aadb8f73.jpg" alt="爱克汀咖啡" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7099" title="爱克汀咖啡" target="_blank">爱克汀咖啡</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/3">休闲饮品</a>]</div>
                        <span><em><strong>合作模式：</strong></em><strong>品牌总部：</strong>定西</span>
                        <span><strong>运营机构：</strong>爱克汀加盟公司</span>
                        <p>...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>3~5万元</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>927</code>人</span>
                        <span><a href="/xm/7099#msg" title="爱克汀咖啡" >立即留言咨询</a></span>
                    </div>
                </div>
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7098" title="柠檬王子" target="_blank"><img src="/uploads/images/2019/03-08/12d05bbcd98a.png" alt="柠檬王子" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7098" title="柠檬王子" target="_blank">柠檬王子</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/3">休闲饮品</a>]</div>
                        <span><em><strong>合作模式：</strong></em><strong>品牌总部：</strong>武汉</span>
                        <span><strong>运营机构：</strong>柠檬王子加盟公司</span>
                        <p>...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>3~5万元</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>960</code>人</span>
                        <span><a href="/xm/7098#msg" title="柠檬王子" >立即留言咨询</a></span>
                    </div>
                </div>
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7093" title="喵货炭烤鱼" target="_blank"><img src="/uploads/images/2017/11-03/2c0f6b8ef9d5.jpg" alt="喵货炭烤鱼" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7093" title="喵货炭烤鱼" target="_blank">喵货炭烤鱼烧烤</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/204">烧烤</a>]</div>
                        <span><em><strong>合作模式：</strong>加盟</em><strong>品牌总部：</strong>眉山</span>
                        <span><strong>运营机构：</strong>喵货炭烤鱼加盟总部</span>
                        <p>...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>5~10万元</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>711</code>人</span>
                        <span><a href="/xm/7093#msg" title="喵货炭烤鱼" >立即留言咨询</a></span>
                    </div>
                </div>
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7092" title="湄公烤鱼" target="_blank"><img src="/uploads/images/2017/11-03/9823dbb584fc.jpg" alt="湄公烤鱼" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7092" title="湄公烤鱼" target="_blank">湄公烤鱼烧烤</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/204">烧烤</a>]</div>
                        <span><em><strong>合作模式：</strong>加盟</em><strong>品牌总部：</strong>济南</span>
                        <span><strong>运营机构：</strong>济南餐驿餐饮有限公司</span>
                        <p>...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>5~10万元</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>643</code>人</span>
                        <span><a href="/xm/7092#msg" title="湄公烤鱼" >立即留言咨询</a></span>
                    </div>
                </div>
                <div class="pinpai_h">
                    <div class="pinpai_h_pic"><span><a href="/xm/7091" title="有鱼吃纸上烤鱼" target="_blank"><img src="/uploads/images/2017/11-03/d3466961c9a5.jpg" alt="有鱼吃纸上烤鱼" /></a></span></div>
                    <div class="pinpai_h_c">
                        <div class="pp_bt"><strong><a href="/xm/7091" title="有鱼吃纸上烤鱼" target="_blank">有鱼吃纸上烤鱼烧烤</a></strong>[<a href="/cyms">餐饮美食</a> > <a href="/cyms/204">烧烤</a>]</div>
                        <span><em><strong>合作模式：</strong>加盟</em><strong>品牌总部：</strong>南京</span>
                        <span><strong>运营机构：</strong>有鱼吃纸上烤鱼加盟总部</span>
                        <p>...</p>
                    </div>
                    <div class="pinpai_h_r">
                        <strong class="pp_pic1">投资金额：<em>1万元以下</em></strong>
                        <span class="pp_pic1">加盟费用：暂无</span>
                        <span class="pp_pic2">项目人气：<code>1028</code>人</span>
                        <span><a href="/xm/7091#msg" title="有鱼吃纸上烤鱼" >立即留言咨询</a></span>
                    </div>
                </div>

                <div class="page">
                    <ol class="pagination"><li class="disabled"><span>&laquo;</span></li> <li class="active"><span>1</span></li><li><a href="http://www.3198.com/cyms?page=2">2</a></li><li><a href="http://www.3198.com/cyms?page=3">3</a></li><li><a href="http://www.3198.com/cyms?page=4">4</a></li><li><a href="http://www.3198.com/cyms?page=5">5</a></li><li><a href="http://www.3198.com/cyms?page=6">6</a></li><li><a href="http://www.3198.com/cyms?page=7">7</a></li><li><a href="http://www.3198.com/cyms?page=8">8</a></li><li class="disabled"><span>...</span></li><li><a href="http://www.3198.com/cyms?page=227">227</a></li><li><a href="http://www.3198.com/cyms?page=228">228</a></li> <li><a href="http://www.3198.com/cyms?page=2" rel="next">&raquo;</a></li></ol>
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
