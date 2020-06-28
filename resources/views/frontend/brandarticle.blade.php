@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <script src="/public/js/lanrenzhijia.js" type="text/javascript"></script>
    <script type="text/javascript" src="/public/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/public/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/public/js/MSClass.js"></script>
    <!--[if lte IE 6]>
    <script type="text/javascript" src="/public/js/DD_belatedPNG_0.0.7a.js"></script>
    <script>
        DD_belatedPNG.fix('.png_bg,.png_bg a:hover,.all_sort_all ul li a span');
    </script>
    <![endif]-->
@stop
@section('main')
    <div class="main">
        <div class="bk weizhi" style="margin-top:4px;">
		<span>
			<a href="/">3198创业致富网</a>
                                            &gt;<a href="/cyms/2">小吃</a>
                &gt;<a class="dq">柳螺香加盟连锁</a>

        </span>
        </div>
        <div class="ny-yop">
            <div class="ny-yop-l">
                <a href="/xm/7104"><img
                        src="/uploads/images/2019/03-11/d2a86b6f252f.png"
                        alt="柳螺香"/></a><a href="/xm/7104">
                    <strong>
                        <h1>柳螺香加盟连锁</h1>
                    </strong>
                </a>
                <p>
                    项目官方：柳螺香加盟公司
                    <br/>
                    投资金额：1~3万元
                </p>
            </div>
            <div class="ny-yop-r">
                <ul>
                    <li>
                        <a href="#msg">
                            <img src="/public/images/ny_ic1.jpg" alt="立即留言"/>
                            <p>立即留言</p>
                        </a>
                    </li>
                    <li>
                        <a href="#msg">
                            <img src="/public/images/ny_ic2.jpg" alt="联系电话"/>
                            <p>联系电话</p>
                        </a>
                    </li>
                    <li>
                        <a onClick="AddFavorite('http://www.3198.com/xm/7104','3198创业致富网')" href="javascript:void(0)">
                            <img src="/public/images/ny_ic3.jpg" alt="我要收藏"/>
                            <p>我要收藏</p>
                        </a>
                    </li>
                </ul>
            </div>
            <script>
                function AddFavorite(sURL, sTitle) {

                    sURL = encodeURI(sURL);

                    try {

                        window.external.addFavorite(sURL, sTitle);

                    } catch (e) {

                        try {

                            window.sidebar.addPanel(sTitle, sURL, "");

                        } catch (e) {

                            alert("加入收藏失败,请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");

                        }

                    }

                }
            </script>
            <div class="clearfix"></div>
            <div class="ny-nav ">
                <ul class="ce">
                    <li>
                        <a href="/xm/7104"
                           class="xz">品牌主页</a>
                    </li>
                    <li>
                        <a id="navon2"
                           href="javascript:void(0)" >加盟优势</a>
                    </li>
                    <li>
                        <a href="/xm/7104/news"
                           target="_blank">品牌新闻</a>
                    </li>
                    <li>
                        <a href="/xm/7104/wenda"
                           target="_blank">品牌问答</a>
                    </li>
                    <li>
                        <a id="navon6"
                           href="javascript:void(0)" >条件流程</a>
                    </li>
                    <li>
                        <a id="navon4"
                           href="javascript:void(0)" >产品展示</a>
                    </li>
                    <li>
                        <a id="navon5" href="#msg">在线留言</a>
                    </li>
                </ul>
            </div>
        </div>        <div class="ny_js">
            <!-- 幻灯片 Start -->
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="/uploads/images/2019/03-11/a326ed8a0c5e.png" alt="柳螺香" />
                        <span>柳螺香</span>
                    </li>
                </ul>
            </div>
            <script>
                $(function(){
                    $('.flexslider').flexslider({
                        directionNav: true,
                        pauseOnAction: false
                    });

                });
            </script>
            <!-- 幻灯片 End -->
            <ul class="ny-jsxq">
                <li>
                    <span>品牌名称：</span>
                    柳螺香
                </li>
                <li>
                    <span>行业分类：</span>
                    小吃
                </li>
                <li>
                    <span>加盟范围：</span>

                </li>
                <li>
                    <span>品牌发源：</span>
                    广西
                </li>
                <li>
                    <span>投资金额：</span>
                    1~3万元
                </li>
                <li>
                    <span>合作模式：</span>

                </li>
                <li class="ic1">
                    <span>主营产品：</span>
                    米线
                </li>
                <li class="ic1">
                    <span>运营机构：</span>
                    柳螺香加盟公司
                </li>
                <li class="ic1">
                    <span>标签：</span>
                </li>
            </ul>
            <ul class="ny-jsxq-zx">
                <li>
                    <a href="#msg">
                        <img src="/public/images/ny_zx1.jpg" alt="马上留言" />
                    </a>
                </li>
                <li>
                    <a href="#msg">
                        <img src="/public/images/ny_zx2.jpg" alt="免费通话" />
                    </a>
                </li>
                <li>
                    <a href="#msg">
                        <img src="/public/images/ny_zx3.jpg" alt="在线咨询" />
                    </a>
                </li>
            </ul>
        </div>

        <div class="clearfix"></div>
        <div class="ny_l">
            <div class="ny_l-js">
                <div class="ny_l-t"> <strong>项目介绍</strong>
                </div>
                <div class="ny_l-body">

                    　　柳螺香隶属于广西南宁市原野餐饮管理有限公司，公司成立于2008年8月，是一家独资的中式名特米粉企业，公司主要经营以“柳螺香”为品牌的螺蛳粉、桂林米粉为主，从米粉的生产，粉的调料制作，操作过程、“配方的传授”一条龙的配送服务，在市场上独占鳌头。<br />
                    公司致力于品牌发展，本着“让中国乃至世界的每一个人都能吃到健康、美味的名特米粉”的经营目标，遵循“以客户需求为核心，以客户的满意为目标”的品牌理念，于2006年8月向国家工商行政管理总局商标局申请注册了以“柳螺香”为名称的注册商标。公司面对全国开放，代理经营及经销培训业务，相继在广西、云南、湖南、山东、泰国等地已有90余家经销店。<br />
                    公司宗旨“为顾客创造价值，为经销商创造”的经营理念，在更新产品种类的基础上狠抓卫生质量关，在消费者心目树立了良好的企业形象，为经销商创造了非常可观的效益。几年来，在社会各界的大力支持和公司员工共同努力下，“柳螺香”现以发展成为广西餐饮企业一个极具民族风味特色和有影响力的代理品牌。公司将在整顿巩固发展华南市场的同时，大力开拓国内外市场，力争将“柳螺香”打造成为一流的中式米粉代理品牌。<br />
                </div>
            </div>

            <div class="ny_l-js">
                <a name="fangan"></a>
                <div class="ny_l-t" id="div2">
                    <strong>加盟优势</strong>
                </div>
                <div class="ny_l-body">
                    柳螺香加盟优势<br />
                    1.经销商可以降低创业风险，增加成功机会。<br />
                    2.经销商可以得到系统的管理训练和营业帮助。<br />
                    3.经销商可以集中进贷，降低成本保货源。<br />
                    4.经销商可以使用统一的商标和规范的服务。<br />
                    5.经销商可以减少广告投入宣传费用，达到良好的宣传效果<br />
                    6.经销商较易获得代理总部的铺货支持。<br />
                    7.经销商可以获得代理总部的经销区保护，以避免同商铺的恶性竟争，共同对付其他竟争者，保证双方的利益。<br />
                    8.经销商可以获得更广泛的信息来源。<br />
                    <div>
                        <br />
                    </div>
                </div>
            </div>


            <div class="ny_l-js">
                <a name="xiangqing"></a>
                <div class="ny_l-t" id="div6">
                    <strong>条件流程</strong>
                </div>
                <div class="ny_l-body">
                    柳螺香加盟条件<br />
                    1、热爱餐饮行业：要求加盟者热爱餐饮经营，真正愿意全身心投入到餐饮行业中，并热忠于发展民族饮食文化，具有良好的为顾客提供优质服务的意识。<br />
                    2、具备一定的餐饮行业知识：加盟者应了解食品行业的基本知识或有从事餐饮业工作的背景，具备一定的管理知识且愿意接受培训学习，并有使之在特定区域内扩大发展的能力。<br />
                    3、具有长期合作的意愿：加盟商应有积极向上的创业精神激情和期望拥有属于自己餐厅的强烈愿望，并愿意与柳螺香建立至少3年的合作关系。<br />
                    4、具备一定的财力：加盟商应至少具备柳螺香单店投资额一倍以上的能力。<br />
                    5、认可柳螺香包括柳螺香的企业文化。<br />
                    6、具有良好的信誉基础，出色的人格魅力及良好的社会关系和影响力。<br />
                    7、具有出色的组织意识，能主动维护和服从总部利于品牌发展的经营策略。<br />
                    8、所找店面要求50平方米以上。<br />
                    <div>
                        柳螺香加盟流程<br />
                        填写柳螺香加盟申请→经销咨询→选择地址→对店铺实地审核考核另寻合适店面→经销商落实店铺租赁→签定代理经营合同缴纳经销金和保证金→办理相关证照→人员招募和员工培训→店铺规划设计→开店试营及宣传推广告→隆重开业。<br />
                        <div>
                            <br />
                        </div>
                        <br />
                    </div>
                </div>
            </div>

            <div class="ny_l-js">
                <a name="chanpin"></a>
                <div class="ny_l-t" id="div4">
                    <strong>产品展示</strong>
                </div>
                <div class="ny_l-cpzs">
                    <ul>

                        <li>
                            <a>
                                <img src="/uploads/images/2019/03-11/f27433328103.png" alt="柳螺香" />
                                <p>柳螺香</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ny_l-js">
                <div class="ny_l-js-w326">
                    <div class="ny_l-t1">
                        <strong>企业动态</strong>
                        <span>
                            <a href="/xm/7104/news">更多>></a>
                        </span>
                    </div>
                    <ul class="ny_l-js-ul">
                    </ul>
                </div>
                <div class="ny_l-js-w326 ny_l-js-w326-wu">
                    <div class="ny_l-t1">
                        <strong>加盟问答</strong>
                        <span>
                            <a href="/xm/7104/wenda">更多>></a>
                        </span>
                    </div>
                    <ul class="ny_l-js-ul">
                    </ul>
                </div>

            </div>



            <!--主体结束-->
            <div class="clearfix"></div>

            <div class="clear"></div>
            <div class="ny-khly ny-khly-b" id="div5">
                <h3>客服留言</h3>
                <ul id="textUL">
                    <li><span class="data">06-26 07:24</span>巴彦淖尔盟的<span class="red">王先生&nbsp;&nbsp;180******33</span>对该项目产生意向：你们的总部在哪里？</li><li><span class="data">06-26 11:42</span>万宁的<span class="red">王女士&nbsp;&nbsp;181******88</span>对该项目产生意向：你们的总部在哪里？</li><li><span class="data">06-27 04:15</span>吐鲁番的<span class="red">罗先生&nbsp;&nbsp;181******53</span>对该项目产生意向：你们的总部在哪里？</li><li><span class="data">06-27 08:35</span>马鞍山的<span class="red">李女士&nbsp;&nbsp;138******78</span>对该项目产生意向：我想加盟，请联系我。</li><li><span class="data">06-27 12:55</span>巴中的<span class="red">张先生&nbsp;&nbsp;150******23</span>对该项目产生意向：我想加盟，请来电告知加盟细节。</li><li><span class="data">06-27 05:16</span>驻马店的<span class="red">侯女士&nbsp;&nbsp;177******23</span>对该项目产生意向：你们的总部在哪里？</li><li><span class="data">06-27 09:55</span>海南的<span class="red">王先生&nbsp;&nbsp;186******75</span>对该项目产生意向：你们的总部在哪里？</li><li><span class="data">06-28 02:29</span>揭阳的<span class="red">王先生&nbsp;&nbsp;138******40</span>对该项目产生意向：你好！我想加盟代理你们的品牌，请联系我。</li><li><span class="data">06-28 06:51</span>阜阳的<span class="red">张先生&nbsp;&nbsp;186******14</span>对该项目产生意向：我想加盟，请来电告知加盟细节。</li><li><span class="data">06-28 11:08</span>惠州的<span class="red">陆女士&nbsp;&nbsp;156******70</span>对该项目产生意向：你们的总部在哪里？</li>                </ul>

                <script>
                    var Marquee1=new Marquee("textUL");Marquee1.Step=1; Marquee1.Start();
                </script>
            </div>
            <div class="clear"></div>
            <div class="hy-mfdh">
                <a name="msg"></a>
                <h3>
                    如果您对该项目感兴趣，请使用 <em>免费电话咨询</em>
                    或者
                    <strong>留言</strong>
                </h3>
                <div class="leaveCon-left fl">
                    <div class="leaveCon-tit">3198企业在线</div>
                    <div class="leaveCon-list">
                        <ul>
                            <li>
                                <i class="icon-angle"></i>
                                <h5>口碑胜于一切</h5>
                                <p>3198网站成功收获财富</p>
                            </li>
                            <li>
                                <i class="icon-angle"></i>
                                <h5>诚信招商项目</h5>
                                <p>3198只推荐拥有合法资质与证件齐全的项目</p>
                            </li>
                            <li style="border-bottom: none;">
                                <i class="icon-angle"></i>
                                <h5>信息安全保护</h5>
                                <p>采取严格安全信息，保证您的个人信息安全</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hy-mfdh-r">
                    <form method="post" action="https://i.u88.com/store"  id="dform" onsubmit="return check();" >
                        <input type="hidden" name="realm" value="www.3198.com">
                        <input type="hidden" name="job" value="guestbook">
                        <input type="hidden" name="title" value="柳螺香"/>
                        <input type="hidden" name="cla" value="小吃"/>
                        <input type="hidden" name="combrand" value="柳螺香"/>
                        <input type="hidden" name="resolution" id="resolution"/>

                        <ul class="ull">
                            <li>
                                <span>
                                    <i>*</i>姓名：
                                </span>
                                <input id="truename" name="username" type="text" class="ny-xm" placeholder="您的真实姓名" value="" />
                            </li>
                            <li>
                                <span>
                                    <i>*</i>手机：
                                </span>
                                <input id="telephone" name="iphone" type="text" class="ny-xm" placeholder="电话是与您联系的重要方式" value="" />
                            </li>
                            <li>
                                <span>
                                    <i>*</i>金额：
                                </span>
                                <select name="jine" style="line-height:32px;height:32px;">
                                    <option value="0">请选择金额</option>
                                    <option value="1">1万元以下</option>
                                    <option value="2">1~5万元</option>
                                    <option value="3">5~10万元</option>
                                    <option value="4">10~20万元</option>
                                    <option value="5">20~50万元</option>
                                    <option value="6">50~100万元</option>
                                    <option value="7">100万以上</option>
                                </select>
                            </li>
                        </ul>
                        <div class="ullll">
                            <strong>留言：</strong>
                            <textarea id="content" class="ny-txt" name="content" cols="" rows="" placeholder="请输入您的留言内容或选择快捷留言" ></textarea>
                            <div class="clear"></div>
                            <div class="kuaijie" id="kuaijie">
                                <div class="kuaijie-title">您可以选择以下快捷留言</div>
                                <ul class="kuaijie-list">
                                    <li>我有意向，请问加盟费是多少？</li>
                                    <li>很想合作来电话细谈吧。</li>
                                    <li>请问具体的加盟流程是怎样的？</li>
                                    <li>请问贵公司哪里有样板店或直营店？</li>
                                    <li>请给我打电话并寄送加盟资料。</li>
                                </ul>
                            </div>
                            <script src="/public/js/js.js"></script>
                        </div>
                        <script>
                            $(function () {
                                $('.pinglun_list dl').on('mouseover mouseleave',function(e){
                                    e.type=='mouseover' ? $(this).addClass("jg") :
                                        $(this).removeClass("jg")
                                })
                            });
                        </script>
                        <input name="" type="submit" class="ny-ly-anniu" value="提交留言" />
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <script src="/public/js/main.js"></script>
        </div>
        <div class="ny_r">
            <div class="ny_r-rm">
                <div class="ny_l-t1">
                    <strong>热门品牌</strong>
                </div>
                <ul class="ny_r-rm-c">
                    <li>
                        <span>
                            <a href="/xm/226" target="_blank">
                                <img alt="天天快递" src="/uploads/images/2015/08-13/3cdbb85bbac6.jpg"></a>
                        </span>
                        <strong><a href="/xm/226" target="_blank">天天快递</a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/2227" target="_blank">
                                <img alt="娅丽达女裤" src="/uploads/images/2016/01-12/01aec1cf3f33.jpg"></a>
                        </span>
                        <strong><a href="/xm/2227" target="_blank">娅丽达女裤</a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/6958" target="_blank">
                                <img alt="浓妆淡抹" src="/uploads/images/2017/04-17/adeabc4b965a.jpg"></a>
                        </span>
                        <strong><a href="/xm/6958" target="_blank">浓妆淡抹</a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/199" target="_blank">
                                <img alt="UCC国际洗衣" src="/uploads/images/2015/07-22/273b41c0b7bd.jpg"></a>
                        </span>
                        <strong><a href="/xm/199" target="_blank">UCC国际洗衣</a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7032" target="_blank">
                                <img alt=" 小吴酸菜鱼" src="/uploads/images/2017/05-10/19084dffc063.jpg"></a>
                        </span>
                        <strong><a href="/xm/7032" target="_blank"> 小吴酸菜鱼</a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7033" target="_blank">
                                <img alt=" 保卫书店" src="/uploads/images/2017/05-10/4a0b00f1d5bc.jpg"></a>
                        </span>
                        <strong><a href="/xm/7033" target="_blank"> 保卫书店</a></strong>
                    </li>
                </ul>
            </div>
            <div class="ny_r-rm">
                <div class="ny_l-t1">
                    <strong>同类品牌推荐</strong>
                </div>
                <ul class="ny_r-rm-c">
                    <li>
                        <span>
                            <a href="/xm/2669" target="_blank">
                                <img alt="好煎道生煎" src="/uploads/images/2019/08-05/aa490710cf30.jpg"></a>
                        </span>
                        <strong><a href="/xm/2669" target="_blank">好煎道生煎</a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/6947" target="_blank">
                                <img alt="福宇记黄焖鸡米饭 " src="/uploads/images/2017/04-14/69c0e9e09099.jpg"></a>
                        </span>
                        <strong><a href="/xm/6947" target="_blank">福宇记黄焖鸡米饭 </a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/6857" target="_blank">
                                <img alt="布莱恩炸鸡" src="/uploads/images/2017/04-06/ebe1564bec22.jpg"></a>
                        </span>
                        <strong><a href="/xm/6857" target="_blank">布莱恩炸鸡</a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/6834" target="_blank">
                                <img alt="鸟叔炸鸡" src="/uploads/images/2017/02-17/141a1f3bc3b7.jpg"></a>
                        </span>
                        <strong><a href="/xm/6834" target="_blank">鸟叔炸鸡</a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/2792" target="_blank">
                                <img alt="大鼓米线" src="/uploads/images/2016/03-16/96da586a1bde.jpg"></a>
                        </span>
                        <strong><a href="/xm/2792" target="_blank">大鼓米线</a></strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/3269" target="_blank">
                                <img alt="岭南第一锅" src="/uploads/images/2016/05-04/18162bc6c3b3.jpg"></a>
                        </span>
                        <strong><a href="/xm/3269" target="_blank">岭南第一锅</a></strong>
                    </li>
                </ul>
            </div>
            <div class="ny_r-rm">
                <div class="ny_l-t1">
                    <strong>品牌排行榜</strong>

                </div>
                <div class="clearfix"></div>
                <ul class="zc_text1">
                    <li>
                        <strong>1</strong>
                        <p class="on"> <em>4359</em>
                            好煎道生煎
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/2669">
                                    <img src="/uploads/images/2019/08-05/aa490710cf30.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/2669"></a>
                                </div>
                                <span>投资金额：3~5万元</span>

                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>2</strong>
                        <p class="on"> <em>3985</em>
                            金玉良缘婚庆
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/79">
                                    <img src="/uploads/images/2016/01-21/af99c0277594.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/79"></a>
                                </div>
                                <span>投资金额：3~5万元</span>

                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>3</strong>
                        <p class="on"> <em>3776</em>
                            唐狮
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/675">
                                    <img src="/uploads/images/2015/10-27/07f6a5520f93.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/675"></a>
                                </div>
                                <span>投资金额：5~10万元</span>

                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>4</strong>
                        <p class="on"> <em>3739</em>
                            思加图（STACCATO)
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/617">
                                    <img src="/uploads/images/2015/10-23/4f061833aaac.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/617"></a>
                                </div>
                                <span>投资金额：1万元以下</span>

                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>5</strong>
                        <p class="on"> <em>3672</em>
                            新东方
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/1066">
                                    <img src="/uploads/images/2015/11-09/ad7914cf2915.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/1066"></a>
                                </div>
                                <span>投资金额：20万元以上</span>

                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>6</strong>
                        <p class="on"> <em>3644</em>
                            十月妈咪
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/275">
                                    <img src="/uploads/images/2015/08-28/ec4a2e574bfc.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/275"></a>
                                </div>
                                <span>投资金额：20万元以上</span>

                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>7</strong>
                        <p class="on"> <em>3640</em>
                            海澜之家
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/568">
                                    <img src="/uploads/images/2015/10-21/c0d3e6d8d744.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/568"></a>
                                </div>
                                <span>投资金额：20万元以上</span>

                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>8</strong>
                        <p class="on"> <em>3627</em>
                            星巴克冰淇淋
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/252">
                                    <img src="/uploads/images/2015/08-27/e45f2d5e68ae.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/252"></a>
                                </div>
                                <span>投资金额：5~10万元</span>

                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>9</strong>
                        <p class="on"> <em>3212</em>
                            香奈儿
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/2267">
                                    <img src="/uploads/images/2016/01-14/2b622ece2cb3.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/2267"></a>
                                </div>
                                <span>投资金额：20万元以上</span>

                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>10</strong>
                        <p class="on"> <em>3089</em>
                            GXG男装
                        </p>
                        <dl class="case1">
                            <dt>
                                <a href="/xm/551">
                                    <img src="/uploads/images/2015/10-16/3bb7c5bf4d25.jpg" />
                                </a>
                            </dt>
                            <dd>
                                <div class="h3">
                                    <a href="/xm/551"></a>
                                </div>
                                <span>投资金额：20万元以上</span>

                            </dd>
                        </dl>
                    </li>

                </ul>
            </div>

            <div class="ny_r-rm">
                <div class="ny_l-t1">
                    <strong>最新入住品牌</strong>
                </div>
                <ul class="ny_r-rm-c">
                    <li>
                        <span>
                            <a href="/xm/7109" target="_blank">
                                <img alt="瑞俪干洗店" src="/uploads/images/2019/04-24/4a2b611899e5.png"></a>
                        </span>
                        <strong>
                            <a href="/xm/7109" target="_blank">瑞俪干洗店</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7108" target="_blank">
                                <img alt="上海东方瑞丽" src="/uploads/images/2019/04-24/76a52dfc74f0.png"></a>
                        </span>
                        <strong>
                            <a href="/xm/7108" target="_blank">上海东方瑞丽</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7107" target="_blank">
                                <img alt="瑞丽干洗店" src="/uploads/images/2019/04-24/25f9d4d6931e.png"></a>
                        </span>
                        <strong>
                            <a href="/xm/7107" target="_blank">瑞丽干洗店</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7106" target="_blank">
                                <img alt="东方瑞俪洗衣" src="/uploads/images/2019/04-24/15120cdecad5.png"></a>
                        </span>
                        <strong>
                            <a href="/xm/7106" target="_blank">东方瑞俪洗衣</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7105" target="_blank">
                                <img alt="东方瑞俪" src="/uploads/images/2019/04-24/072660e1c282.png"></a>
                        </span>
                        <strong>
                            <a href="/xm/7105" target="_blank">东方瑞俪</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7104" target="_blank">
                                <img alt="柳螺香" src="/uploads/images/2019/03-11/d2a86b6f252f.png"></a>
                        </span>
                        <strong>
                            <a href="/xm/7104" target="_blank">柳螺香</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7103" target="_blank">
                                <img alt="晏氏三千食" src="/uploads/images/2019/03-11/1cebaffc1997.jpg"></a>
                        </span>
                        <strong>
                            <a href="/xm/7103" target="_blank">晏氏三千食</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7102" target="_blank">
                                <img alt="咭味哆" src="/uploads/images/2019/03-11/f98164200017.jpg"></a>
                        </span>
                        <strong>
                            <a href="/xm/7102" target="_blank">咭味哆</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7101" target="_blank">
                                <img alt="糖纸甜品" src=""></a>
                        </span>
                        <strong>
                            <a href="/xm/7101" target="_blank">糖纸甜品</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7100" target="_blank">
                                <img alt="安仔包" src="/uploads/images/2019/03-11/883c9eb0f594.jpg"></a>
                        </span>
                        <strong>
                            <a href="/xm/7100" target="_blank">安仔包</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7099" target="_blank">
                                <img alt="爱克汀咖啡" src="/uploads/images/2019/03-11/2215aadb8f73.jpg"></a>
                        </span>
                        <strong>
                            <a href="/xm/7099" target="_blank">爱克汀咖啡</a>
                        </strong>
                    </li>
                    <li>
                        <span>
                            <a href="/xm/7098" target="_blank">
                                <img alt="柠檬王子" src="/uploads/images/2019/03-08/12d05bbcd98a.png"></a>
                        </span>
                        <strong>
                            <a href="/xm/7098" target="_blank">柠檬王子</a>
                        </strong>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
    <script>
        function check() {
            var truename = document.getElementById("truename").value;
            var telephone = document.getElementById("telephone").value;
            var content = document.getElementById("content").value;
            if(truename.length< 2) {
                alert('请填写姓名');
                document.getElementById("truename").focus();
                return false;
            }
            if(telephone.length < 7) {
                alert('请填写联系电话');
                document.getElementById("telephone").focus();
                return false;
            }
            var f;
        }
    </script>
@stop
