@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}/" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}/" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}/" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}/" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}/"/>
@stop
@section('main')
    <div class="main">
        <div class="index_l fl">
            <div id="js_bnn" class="bnn">
                <div class="hd">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="bdd">
                    <ul>
                        <li> <a target="_blank" href="/xm/3080"><img src="/uploads/images/2016/04-12/ea207c9800be.jpg" alt="上臣地板加盟"/></a></li>
                        <li><a target="_blank" href="/xm/3067"><img src="/uploads/images/2016/04-12/c70320578956.jpg" alt="帽牌货冒菜加盟"/></a></li>
                        <li><a target="_blank" href="/xm/3088"> <img src="/uploads/images/2016/04-12/fe4d60a22d50.png" alt="禾禾面吧加盟"/></a></li>
                        <li><a target="_blank" href="/xm/3100"><img src="/uploads/images/2016/04-12/22d0cfdd5694.jpg" alt="鱼乐贝贝加盟"/></a></li>
                    </ul>
                </div>
            </div>
            <div class="index_jm" id="js_index_jm">
                <div class="index_jm_tab">
                    <ul>
                        <li class="on"><a href="/news" target="_blank">商机资讯</a></li>
                        <li><a href="/xm" target="_blank">加盟品牌</a></li>
                    </ul>
                </div>
                <div class="index_jm_cont">
                    <div class="index_jm_list">
                        <ul>
                            @foreach($latestnewslists as $latestnewslist)
                                <li><a href="/news/{{$latestnewslist->id}}" target="_blank">{{$latestnewslist->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="index_jm_list">
                        <ul>
                            @foreach($latestbrandlists as $latestbrandlist)
                            <li><a href="/xm/{{$latestbrandlist->id}}" target="_blank">{{$latestbrandlist->brandname}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="index_r fr">
            <div class="index_r_jiameng"><span class="ic1"><strong><i>精品商机项目</i></strong><em>35167</em>个</span>
                <span><strong><i>创业知识</i></strong><em>189150</em>条</span></div>
            <div class="index_r_pinming">
                <ul>
                    @foreach($asklists as $asklist)
                    <li @if($loop->iteration<4) class="top" @endif>
                        <i class="num">{{$loop->iteration}}</i><a href="/wenda/{{$asklist->id}}"target="_blank" title="{{$asklist->title}}">{{str_limit($asklist->title,30,'...')}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="index-title"><strong><em>诚信</em>项目推荐</strong><i>诚信项目要求三证齐全，至少有两家开业一年以上的加盟店； 严苛的审核机制，保障您的创业梦想！</i></div>
        <div class="index-chuanye">
            <div class="index-chuanye-1010">
                @foreach($latestbrandlist2s as $latestbrandlist2)
                    @if($loop->iteration<7)
                    <div class="fl index-chuanye-img">
                        <a href="/xm/{{$latestbrandlist2->id}}" title="{{$latestbrandlist2->brandname}}" target="_blank"><img src="{{$latestbrandlist2->litpic}}" alt="{{$latestbrandlist2->brandname}}"   title="{{$latestbrandlist2->brandname}}"/></a>
                    </div>
                    @else
                        @break
                    @endif
                @endforeach
                <ul class="cb">
                    @foreach($latestbrandlist2s as $latestbrandlist2)
                        @if($loop->iteration>6 && $loop->iteration<55 )
                            <li class=""><a href="/xm/{{$latestbrandlist2->id}}" target="_blank" title="{{$latestbrandlist2->brandname}}">{{$latestbrandlist2->brandname}}</a> </li>
                        @endif
                    @endforeach
                </ul>
                    @foreach($latestbrandlist2s as $latestbrandlist2)
                        @if($loop->iteration>54 && $loop->iteration<61 )
                            <div class="fl index-chuanye-img">
                                <a href="/xm/{{$latestbrandlist2->id}}" title="{{$latestbrandlist2->brandname}}" target="_blank"><img src="{{$latestbrandlist2->litpic}}" alt="{{$latestbrandlist2->brandname}}"   title="{{$latestbrandlist2->brandname}}"/></a>
                            </div>
                        @endif
                    @endforeach

                <ul class="cb">
                    @foreach($latestbrandlist2s as $latestbrandlist2)
                        @if($loop->iteration>60)
                            <li class=""><a href="/xm/{{$latestbrandlist2->id}}" target="_blank" title="{{$latestbrandlist2->brandname}}">{{$latestbrandlist2->brandname}}</a> </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="guanggao">
            <a href="/xm/199" target="_blank"><img title="" alt="" src="/public/images/index_34.jpg"> </a>
        </div>
        <div class="clearfix"></div>
        <div class="index-title"><strong><em>创业</em>商机汇</strong><i>以下是12个特色商机板块，等待您的开拓！ 也可直接搜索您需要的商机</i></div>
        <div class="index-sjh">
            <div class="index-sjh-l fl">
                <div class="column lm1">
                    <div class="column_bt"><strong><a href="/cyms" target="_blank">餐饮美食</a></strong><span><a href="/cyms" target="_blank">餐饮美食 轻松赚钱</a></span></div>
                    <p>
                        <a href="/cyms/3" target="_blank">休闲饮品</a>
                        <a href="/cyms/175" target="_blank">快餐</a>
                        <a href="/cyms/2" target="_blank">小吃</a>
                        <a href="/cyms/203" target="_blank">休闲食品</a>
                        <a href="/cyms/204" target="_blank">烧烤</a>
                        <a href="/cyms/188" target="_blank">甜品</a>
                        <a href="/cyms/198" target="_blank">面食</a>
                        <a href="/cyms/199" target="_blank">火锅</a>
                        <a href="/cyms/201" target="_blank">熟食</a>
                        <a href="/cyms/210" target="_blank">西餐</a>
                        <a href="/cyms/212" target="_blank">冰淇淋</a>
                        <a href="/cyms/213" target="_blank">香锅</a>
                        <a href="/cyms/214" target="_blank">小吃车</a>
                        <a href="/cyms/215" target="_blank">砂锅</a>
                        <a href="/cyms/216" target="_blank">茶叶</a>
                        <a href="/cyms/217" target="_blank">干锅</a>
                        <a href="/cyms/218" target="_blank">中餐</a>
                        <a href="/cyms/219" target="_blank">进口食品</a>
                        <a href="/cyms/220" target="_blank">调味品</a>
                        <a href="/cyms/221" target="_blank">品牌餐饮</a>
                    </p>
                </div>
                <div class="column lm2">
                    <div class="column_bt"><strong><a href="/fzxb" target="_blank">服装鞋包</a></strong><span><a href="/fzxb" target="_blank">服装鞋包 轻松赚钱</a></span></div>
                    <p>
                        <a href="/fzxb/176" target="_blank">内衣</a>
                        <a href="/fzxb/23" target="_blank">女装</a>
                        <a href="/fzxb/24" target="_blank">童装</a>
                        <a href="/fzxb/189" target="_blank">男装</a>
                        <a href="/fzxb/234" target="_blank">箱包</a>
                        <a href="/fzxb/235" target="_blank">运动</a>
                        <a href="/fzxb/236" target="_blank">品牌鞋</a>
                        <a href="/fzxb/237" target="_blank">孕妇装</a>
                        <a href="/fzxb/238" target="_blank">童鞋</a>
                        <a href="/fzxb/239" target="_blank">配饰</a>
                        <a href="/fzxb/240" target="_blank">牛仔</a>
                        <a href="/fzxb/241" target="_blank">家居服饰</a>
                        <a href="/fzxb/242" target="_blank">品牌服装</a>
                    </p>
                </div>
                <div class="column lm3">
                    <div class="column_bt"><strong><a href="/mrbj" target="_blank">美容保健</a></strong><span><a href="/mrbj" target="_blank">美容保健 轻松赚钱</a></span></div>
                    <p>
                        <a href="/mrbj/50" target="_blank">美体</a>
                        <a href="/mrbj/49" target="_blank">美容美发</a>
                        <a href="/mrbj/177" target="_blank">化妆品</a>
                        <a href="/mrbj/178" target="_blank">汗蒸房</a>
                        <a href="/mrbj/250" target="_blank">足浴</a>
                        <a href="/mrbj/251" target="_blank">美甲</a>
                        <a href="/mrbj/252" target="_blank">产后恢复</a>
                        <a href="/mrbj/253" target="_blank">养生保健品</a>
                        <a href="/mrbj/254" target="_blank">健身器材</a>
                        <a href="/mrbj/255" target="_blank">眼镜店</a>
                        <a href="/mrbj/256" target="_blank">中草药</a>
                        <a href="/mrbj/257" target="_blank">视保健</a>
                        <a href="/mrbj/258" target="_blank">医疗设备</a>
                        <a href="/mrbj/259" target="_blank">品牌美容</a>
                        <a href="/mrbj/262" target="_blank">养生馆</a>
                    </p>
                </div>
                <div class="column lm4">
                    <div class="column_bt"><strong><a href="/shfw" target="_blank">生活服务</a></strong><span><a href="/shfw" target="_blank">生活服务 轻松赚钱</a></span></div>
                    <p>
                        <a href="/shfw/69" target="_blank">婚庆</a>
                        <a href="/shfw/70" target="_blank">超市</a>
                        <a href="/shfw/179" target="_blank">干洗</a>
                        <a href="/shfw/192" target="_blank">物流</a>
                        <a href="/shfw/279" target="_blank">酒店</a>
                        <a href="/shfw/280" target="_blank">影像</a>
                        <a href="/shfw/281" target="_blank">家政</a>
                        <a href="/shfw/282" target="_blank">零售</a>
                        <a href="/shfw/283" target="_blank">娱乐项目</a>
                        <a href="/shfw/284" target="_blank">通讯</a>
                        <a href="/shfw/285" target="_blank">地产</a>
                        <a href="/shfw/287" target="_blank">安防</a>
                        <a href="/shfw/288" target="_blank">品牌生活</a>
                        <a href="/shfw/304" target="_blank">花店</a>
                        <a href="/shfw/306" target="_blank">宠物</a>
                    </p>
                </div>
                <div class="column lm5">
                    <div class="column_bt"><strong><a href="/jjyp" target="_blank">家居用品</a></strong><span><a href="/jjyp" target="_blank">家居用品 轻松赚钱</a></span></div>
                    <p>
                        <a href="/jjyp/82" target="_blank">橱柜</a>
                        <a href="/jjyp/83" target="_blank">家纺布艺</a>
                        <a href="/jjyp/180" target="_blank">家具</a>
                        <a href="/jjyp/190" target="_blank">灯饰</a>
                        <a href="/jjyp/293" target="_blank">品牌家居</a>
                        <a href="/jjyp/294" target="_blank">家用电器</a>
                        <a href="/jjyp/295" target="_blank">卫浴</a>
                        <a href="/jjyp/296" target="_blank">床上用品</a>
                        <a href="/jjyp/297" target="_blank">日用</a>
                        <a href="/jjyp/298" target="_blank">餐具</a>
                        <a href="/jjyp/299" target="_blank">生活馆</a>
                        <a href="/jjyp/300" target="_blank">全景画</a>
                        <a href="/jjyp/301" target="_blank">装饰</a>
                    </p>
                </div>
                <div class="column lm6">
                    <div class="column_bt"><strong><a href="/jczs" target="_blank">建材装饰</a></strong><span><a href="/jczs" target="_blank">建材装饰 轻松赚钱</a></span></div>
                    <p>
                        <a href="/jczs/96" target="_blank">地板</a>
                        <a href="/jczs/99" target="_blank">油漆</a>
                        <a href="/jczs/181" target="_blank">装饰装修</a>
                        <a href="/jczs/193" target="_blank">墙艺</a>
                        <a href="/jczs/274" target="_blank">门窗</a>
                        <a href="/jczs/275" target="_blank">吊顶</a>
                        <a href="/jczs/276" target="_blank">瓷砖</a>
                        <a href="/jczs/277" target="_blank">品牌建材</a>
                        <a href="/jczs/278" target="_blank">楼梯</a>
                        <a href="/jczs/289" target="_blank">五金配件</a>
                        <a href="/jczs/290" target="_blank">水晶建材</a>
                        <a href="/jczs/291" target="_blank">建筑贴膜</a>
                        <a href="/jczs/292" target="_blank">采暖</a>
                    </p>
                </div>
                <div class="column lm7">
                    <div class="column_bt"><strong><a href="/lpsp" target="_blank">礼品饰品</a></strong><span><a href="/lpsp" target="_blank">礼品饰品 轻松赚钱</a></span></div>
                    <p>
                        <a href="/lpsp/112" target="_blank">个性饰品</a>
                        <a href="/lpsp/114" target="_blank">创意礼品</a>
                        <a href="/lpsp/182" target="_blank">节庆礼品</a>
                        <a href="/lpsp/191" target="_blank">钟表</a>
                        <a href="/lpsp/200" target="_blank">银饰</a>
                        <a href="/lpsp/202" target="_blank">小饰品</a>
                        <a href="/lpsp/205" target="_blank">工艺品</a>
                        <a href="/lpsp/206" target="_blank">翡翠玉石</a>
                        <a href="/lpsp/207" target="_blank">水晶琥珀</a>
                        <a href="/lpsp/208" target="_blank">钻石珠宝</a>
                        <a href="/lpsp/209" target="_blank">品牌礼品</a>
                        <a href="/lpsp/305" target="_blank">动漫</a>
                        <a href="/lpsp/303" target="_blank">佛教用品</a>
                    </p>
                </div>
                <div class="column lm8">
                    <div class="column_bt"><strong><a href="/qcfw" target="_blank">汽车服务</a></strong><span><a  href="/qcfw" target="_blank">汽车服务 轻松赚钱</a></span></div>
                    <p>
                        <a href="/qcfw/122" target="_blank">汽车美容</a>
                        <a href="/qcfw/124" target="_blank">汽车用品</a>
                        <a href="/qcfw/183" target="_blank">电动车</a>
                        <a href="/qcfw/196" target="_blank">洗车</a>
                        <a href="/qcfw/211" target="_blank">品牌汽车</a>
                        <a href="/qcfw/226" target="_blank">汽修</a>
                        <a href="/qcfw/227" target="_blank">车饰</a>
                        <a href="/qcfw/228" target="_blank">导航</a>
                        <a href="/qcfw/229" target="_blank">平衡车</a>
                    </p>
                </div>
                <div class="column lm9">
                    <div class="column_bt"><strong><a href="/jywl" target="_blank">教育网络</a></strong><span><a href="/jywl" target="_blank">教育网络 轻松赚钱</a></span></div>
                    <p>
                        <a href="/jywl/131" target="_blank">少儿教育</a>
                        <a href="/jywl/132" target="_blank">学习辅导</a>
                        <a href="/jywl/184" target="_blank">学生用品</a>
                        <a href="/jywl/194" target="_blank">外语培训</a>
                        <a href="/jywl/222" target="_blank">品牌教育</a>
                        <a href="/jywl/230" target="_blank">孕婴教育</a>
                        <a href="/jywl/231" target="_blank">数码产品</a>
                        <a href="/jywl/232" target="_blank">远程教育</a>
                        <a href="/jywl/233" target="_blank">认证考试</a>
                        <a href="/jywl/243" target="_blank">网络创业</a>
                    </p>
                </div>
                <div class="column lm10">
                    <div class="column_bt"><strong><a href="/myyp" target="_blank">母婴生活</a></strong><span><a href="/myyp" target="_blank">母婴生活 轻松赚钱</a></span></div>
                    <p>
                        <a href="/myyp/142" target="_blank">婴儿用品</a>
                        <a href="/myyp/149" target="_blank">婴童家具</a>
                        <a href="/myyp/187" target="_blank">奶粉</a>
                        <a href="/myyp/197" target="_blank">儿童乐园</a>
                        <a href="/myyp/223" target="_blank">品牌母婴</a>
                        <a href="/myyp/244" target="_blank">婴儿游泳馆</a>
                        <a href="/myyp/245" target="_blank">儿童玩具</a>
                        <a href="/myyp/246" target="_blank">妈妈用品</a>
                        <a href="/myyp/247" target="_blank">营养品</a>
                        <a href="/myyp/248" target="_blank">婴儿护理</a>
                    </p>
                </div>
                <div class="column lm11">
                    <div class="column_bt"><strong><a href="/hbjx" target="_blank">环保机械</a></strong><span><a  href="/hbjx" target="_blank">环保机械 轻松赚钱</a></span></div>
                    <p>
                        <a href="/hbjx/162" target="_blank">环保材料</a>
                        <a href="/hbjx/163" target="_blank">电池修复</a>
                        <a href="/hbjx/186" target="_blank">太阳能</a>
                        <a href="/hbjx/195" target="_blank">空气净化</a>
                        <a href="/hbjx/224" target="_blank">品牌环保</a>
                        <a href="/hbjx/249" target="_blank">食品机械</a>
                        <a href="/hbjx/263" target="_blank">节能设备</a>
                        <a href="/hbjx/264" target="_blank">水净化</a>
                        <a href="/hbjx/265" target="_blank">环卫用品</a>
                        <a href="/hbjx/266" target="_blank">机械设备</a>
                        <a href="/hbjx/267" target="_blank">原水处理</a>
                        <a href="/hbjx/268" target="_blank">环保包装</a>
                    </p>
                </div>
                <div class="column lm12">
                    <div class="column_bt"><strong><a href="/jsyl" target="_blank">酒水饮料</a></strong><span><a href="/jsyl" target="_blank">酒水饮料 轻松赚钱</a></span></div>
                    <p>
                        <a href="/jsyl/225" target="_blank">品牌酒水</a>
                        <a href="/jsyl/166" target="_blank">白酒</a>
                        <a href="/jsyl/172" target="_blank">黄酒</a>
                        <a href="/jsyl/185" target="_blank">啤酒</a>
                        <a href="/jsyl/269" target="_blank">纯净水</a>
                        <a href="/jsyl/270" target="_blank">饮料</a>
                        <a href="/jsyl/271" target="_blank">葡萄酒</a>
                        <a href="/jsyl/272" target="_blank">保健酒</a>
                        <a href="/jsyl/273" target="_blank">洋酒</a>
                    </p>
                </div>
            </div>

            <div class="index-sjh-r fr">
                <ul>
                    @foreach($paihangbangs as $paihangbang)
                        <li>
                            <a href="/xm/{{$paihangbang->id}}"><img src="{{$paihangbang->litpic}}" alt="{{$paihangbang->brandname}}" title="{{$paihangbang->brandname}}"/>{{str_limit($paihangbang->brandname,10,'')}} </a>
                        </li>
                    @endforeach
                </ul>
                <p><a class=" blue "href="/xm/2669">好煎道生煎</a></p>
                <p><a class=""href="/xm/79">金玉良缘婚庆</a></p>
                <p><a class="blue" href="/xm">更多商机>></a></p>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="index_brand4">
            <div class="tit"></div>
            <ul>
                @foreach($latestbrandlist3s as $latestbrandlist3)
                <li>
                    <a target="_blank" href="/xm/{{$latestbrandlist3->id}}"><img title="{{$latestbrandlist3->brandname}}" alt="{{$latestbrandlist3->brandname}}" src="{{$latestbrandlist3->litpic}}"></a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="clearfix"></div>
        <div class="index-xwzx">
            <div class="index-xwzx-zs">
                <div class="index-xwzx-zs-t">
                    <strong>创业知识</strong><span><a href="/zhishi" target="_blank">更多&gt;&gt;</a></span></div>
                <div class="clearfix"></div>
                <div class="index-xwzx-zs-c">
                    <ul>
                        @foreach($zhishilists as $zhishilist)
                            <li><strong><a href="/zhishi/{{$zhishilist->arctype->real_path}}/{{$zhishilist->arctype->id}}"> [{{$zhishilist->arctype->typename}}]</a></strong><a href="/zhishi/{{$zhishilist->id}}">{{$zhishilist->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="index-xwzx-zs">
                <div class="index-xwzx-zs-t">
                    <strong>商机资讯</strong><span><a href="/news" target="_blank">更多&gt;&gt;</a></span></div>
                <div class="clearfix"></div>
                <div class="index-xwzx-zs-c">
                    <ul>
                        @foreach($newslist2s as $newslist2)
                            <li><strong><a href="/news/{{$newslist2->arctype->real_path}}/{{$newslist2->arctype->id}}"> [{{$newslist2->arctype->typename}}]</a></strong><a href="/news/{{$newslist2->id}}">{{$newslist2->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="guanggao"><img title="" alt="" src="/public/images/index_35.png"></div>
        <div class="index-yqlj">
            <span>友情链接</span>
            <ul class="clearfix">
                <li><a target="_blank" href="http://www.3198.com/">3198创业致富</a></li>
                <li><a target="_blank" href="http://www.meilele.com/category-ertongfang/">儿童房家具</a></li>
                <li><a target="_blank" href="http://www.35838.com/">猪价格网</a></li>
                <li><a target="_blank" href="http://cyyl.91cy.cn/">赚钱项目</a></li>
                <li><a target="_blank" href="http://www.tzcy37.com/">餐饮加盟</a></li>
                <li><a target="_blank" href="http://bj.qizuang.com/">北京装修网</a></li>
                <li><a target="_blank" href="http://www.kufang365.com/">库房365网</a></li>
                <li><a target="_blank" href="http://wenda.hao315.com/">问答平台</a></li>
                <li><a target="_blank" href="http://yinshi.jiameng.com/">银饰代理</a></li>
                <li><a target="_blank" href="http://dan-gao-gui.com/">蛋糕冷藏柜</a></li>
                <li><a target="_blank" href="http://shaokao.qudao.com/">烧烤加盟</a></li>
                <li><a target="_blank" href="http://www.shang.cn/">广州商机速配</a></li>
                <li><a target="_blank" href="http://www.auak.com/">爱客商务网</a></li>
                <li><a target="_blank" href="http://www.ccalu.com/">中医养生馆加盟</a></li>
                <li><a target="_blank" href="http://www.youlebaba.com/">中国游乐设备网</a></li>
                <li><a target="_blank" href="http://www.really.cn/">东方瑞丽</a></li>
                <li><a target="_blank" href="https://www.jjedu.com.cn/">教育招商网</a></li>
            </ul>
    </div>
@stop
