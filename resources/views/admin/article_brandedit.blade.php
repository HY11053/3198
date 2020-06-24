@extends('admin.layouts.admin_app')
@section('title')品牌文档编辑@stop
@section('head')
    <link href="/adminlte/plugins/iCheck/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/adminlte//plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
    <link href="/adminlte/plugins/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet">
    <link href="/adminlte/plugins/select2/select2.min.css" rel="stylesheet">
    <style>
        .select2-container--default .select2-selection--single {
            border-radius: 0px;
        }
        .select2-container .select2-selection--single {
            height: 34px;
            border: 1px solid #d2d6de;
        }
        .select2-container .select2-selection--single .select2-selection__rendered {
            padding-left: 0px;
        }
    </style>
@stop
@section('content')
    <!-- row -->
    <div class="row">
        {{Form::model($articleinfos,array('route' =>array( 'brand_article_edit','id'=>$id),'method' => 'put','files' => true,'id'=>"formarticle"))}}
        <div class="col-md-12">
            <!-- The time line -->
            <ul class="timeline">
                <li class="time-label">
                  <span class="bg-red">
                     {{date("M j, Y")}}
                  </span>
                </li>
                <li>
                    <i class="fa fa-pencil-square bg-blue"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:i')}} {{$articleinfos->created_at}}</span>
                        <h3 class="timeline-header"><a href="#">文章基本信息|</a> 按需填写</h3>
                        <div class="timeline-body basic_info">
                            <div class="form-group col-md-12">
                                {{Form::label('title', '文章标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('title', null, array('class' => 'form-control','id'=>'title','placeholder'=>'文章标题','required'=>'required'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">自定义文档属性</label>
                                <div class="checkbox" style="margin-top: 0px;">
                                    <label>
                                        @if(strpos($articleinfos->flags, 'h') !== false)
                                        {{Form::checkbox('flags[]', 'h',true,array('class'=>'flat-red'))}} 头条
                                        @else
                                        {{Form::checkbox('flags[]', 'h',false,array('class'=>'flat-red'))}} 头条
                                        @endif
                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 'p') !== false)
                                        {{Form::checkbox('flags[]', 'p',true,array('class'=>'flat-red'))}} 图片
                                        @else
                                        {{Form::checkbox('flags[]', 'p',false,array('class'=>'flat-red'))}} 图片
                                        @endif
                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 'c') !== false)
                                            {{Form::checkbox('flags[]', 'c',true,array('class'=>'flat-red'))}}  推荐
                                        @else
                                            {{Form::checkbox('flags[]', 'c',false,array('class'=>'flat-red'))}}  推荐
                                        @endif

                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 'f') !== false)
                                            {{Form::checkbox('flags[]', 'f',true,array('class'=>'flat-red'))}}  幻灯
                                        @else
                                            {{Form::checkbox('flags[]', 'f',false,array('class'=>'flat-red'))}}  幻灯
                                        @endif
                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 's') !== false)
                                            {{Form::checkbox('flags[]', 's',true,array('class'=>'flat-red'))}}  滚动
                                        @else
                                            {{Form::checkbox('flags[]', 's',false,array('class'=>'flat-red'))}}  滚动
                                        @endif
                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 'a') !== false)
                                            {{Form::checkbox('flags[]', 'a',true,array('class'=>'flat-red'))}}  特荐
                                        @else
                                            {{Form::checkbox('flags[]', 'a',false,array('class'=>'flat-red'))}}  特荐
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                {{Form::label('keywords', '关键字', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('keywords',null, array('class' => 'form-control','id'=>'keywords','placeholder'=>'文档关键词'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                {{Form::label('topid', '品牌所属大类', array('class' => 'col-sm-2 control-label'))}}
                                <div class="col-md-4">
                                    {{Form::select('topid', $allnavinfos, null,array('class'=>'form-control select2' ,'id'=>'topid'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12 ">
                                {{Form::label('typeid', '品牌所属子类', array('class' => 'col-sm-2 control-label'))}}
                                <div class="col-md-4">
                                    {{Form::select('typeid', [], null,array('class'=>'form-control select2'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12 ">
                                {{Form::label('isedit', '修改状态', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="radio col-md-4 col-sm-9 col-xs-12">
                                    @if($articleinfos->isedit)
                                        {{Form::radio('isedit', '1', true,array('class'=>'flat-red','checked'=>'checked'))}} 已修改
                                        {{Form::radio('isedit', '0', false,array('class'=>'flat-red'))}}未修改
                                    @else
                                        {{Form::radio('isedit', '1', true,array('class'=>'flat-red','checked'=>'checked'))}} 已修改
                                        {{Form::radio('isedit', '0', false,array('class'=>'flat-red','checked'=>'checked'))}}未修改
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                {{Form::label('description', '文档描述', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::textarea('description',null, array('class' => 'form-control col-md-10','id'=>'desrciption','rows'=>3,'placeholder'=>'不填写将自动提取首段'))}}
                                </div>
                            </div>

                            @if(!$articleinfos->ismake || $articleinfos->published_at > \Carbon\Carbon::now())
                                <div class="form-group col-md-12 ">
                                    {{Form::label('ismake', '文章状态', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="radio col-md-4 col-sm-9 col-xs-12">
                                        @if($articleinfos->ismake)
                                            {{Form::radio('ismake', '1', true,array('class'=>'flat-red','checked'=>'checked'))}} 已审核
                                            {{Form::radio('ismake', '0', false,array('class'=>'flat-red'))}}未审核
                                        @else
                                            {{Form::radio('ismake', '1', true,array('class'=>'flat-red'))}} 已审核
                                            {{Form::radio('ismake', '0', false,array('class'=>'flat-red','checked'=>'checked'))}}未审核
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-12 has-warning">
                                    {{Form::label('xiongzhang', '资源提交', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="radio col-md-4 col-sm-9 col-xs-12">
                                        @if($articleinfos->xiongzhang==1)
                                            {{Form::radio('xiongzhang', '1', true,array('class'=>'flat-red','checked'=>'checked'))}} 快速收录
                                            {{Form::radio('xiongzhang', '2', false,array('class'=>'flat-red'))}}普通收录
                                        @else
                                            {{Form::radio('xiongzhang', '1', true,array('class'=>'flat-red'))}} 快速收录
                                            {{Form::radio('xiongzhang', '2', false,array('class'=>'flat-red','checked'=>'checked'))}}普通收录
                                        @endif
                                        <span class="help-block" ><i class="fa fa-bell-o"></i>  快速收录工具可以向百度搜索主动推送资源，缩短爬虫发现网站链接的时间，对于高实效性内容推荐使用快速收录工具，实时向搜索推送资源。普通收录接口，每天可提交最多500万条有价值内容。提交的内容会进入百度搜索统一管理，请耐心等待。</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 ">
                                    {{Form::label('published_at', '预选发布时间', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="input-group date  col-md-4 " style="padding-right: 15px; padding-left: 15px;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        {{Form::text('published_at', null, array('class' => 'form-control pull-right','id'=>'datepicker','placeholder'=>'点击选择时间',"autocomplete"=>"off"))}}
                                    </div>
                                </div>
                            @else
                                {{Form::hidden('ismake',1 , array('class' => 'form-control col-md-10','id'=>'ismake'))}}
                            @endif
                            <div class="form-group col-md-12">
                                {{Form::label('click', '排序权重', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('click',null, array('class' => 'form-control','id'=>'keywords','placeholder'=>'排序权重'))}}
                                    <span class="help-block" style="color: yellowgreen" ><i class="fa fa-bell-o"></i> 排序权重数据指数取自点击量click。如需对列表分页内容中品牌调用排序调整，请调整此数值，越大排序越靠前</span>
                                </div>
                            </div>
                            @if($articleinfos->pcshow)
                                <div class="form-group col-md-12 ">
                                    {{Form::label('pcshow', 'PC展示', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="radio col-md-4 col-sm-9 col-xs-12">
                                        {{Form::radio('pcshow', '1', true,array('class'=>'flat-red','checked'=>'checked'))}} 展示
                                        {{Form::radio('pcshow', '0', false,array('class'=>'flat-red'))}}不展示
                                    </div>
                                </div>
                            @else
                                <div class="form-group col-md-12 ">
                                    {{Form::label('pcshow', 'PC展示', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="radio col-md-4 col-sm-9 col-xs-12">
                                        {{Form::radio('pcshow', '1', true,array('class'=>'flat-red'))}} 展示
                                        {{Form::radio('pcshow', '0', false,array('class'=>'flat-red','checked'=>'checked'))}}不展示
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="timeline-footer" style="clear: both"></div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-photo bg-aqua"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('D M j')}}</span>
                        <h3 class="timeline-header no-border"><a href="#">缩略图处理</a> 图片上传</h3>
                        <div class="timeline-body">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <img src="{{ $articleinfos->litpic }}" class="img-rounded img-responsive"/>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                {{Form::file('image', array('class' => 'file col-md-10','id'=>'input-2','data-show-upload'=>"false",'data-show-caption'=>"true",'accept'=>'image/*'))}}
                                {{Form::hidden('litpic',null , array('class' => 'form-control col-md-10','id'=>'litpic'))}}
                            </div>
                            <div style="clear: both"></div>

                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <li>
                    <i class="fa fa-photo bg-aqua"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('D M j')}}</span>
                        <h3 class="timeline-header no-border"><a href="#">封面推荐缩略图</a> 图片上传</h3>
                        <div class="timeline-body">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <img src="{{ $articleinfos->indexpic }}" class="img-rounded img-responsive"/>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                {{Form::file('indexlitpic', array('class' => 'file col-md-10','id'=>'input-3','data-show-upload'=>"false",'data-show-caption'=>"true",'accept'=>'image/*'))}}
                                {{Form::hidden('indexpic',null , array('class' => 'form-control col-md-10','id'=>'litpic'))}}
                            </div>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-user bg-yellow"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                        <h3 class="timeline-header"><a href="#">产品信息</a> 产品信息描述</h3>
                        <div class="timeline-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::label('brandname', '品牌名称', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandname',null, array('class' => 'form-control col-md-10','id'=>'brandname','placeholder'=>'品牌名称','required'=>'required', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandtime', '成立时间', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandtime', null, array('class' => 'form-control col-md-10','id'=>'brandtime','placeholder'=>'1970-1-1', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('province_id', '区域分类/省', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::select('province_id', $provinces, null,array('class'=>'form-control select2'))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('city_id', '区域分类/市', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::select('city_id',[], null,array('class'=>'form-control select2'))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('genre', '公司性质', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::select('genre', ['民营企业'=>'民营企业','个体经营'=>'个体经营','股份制公司'=>'股份制公司','私营企业'], null,array('class'=>'form-control select2'))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    {{Form::label('acreage', '所需面积', array('class' => 'col-sm-2 control-label'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::select('acreage', $acreagements, null,array('class'=>'form-control select2'))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    {{Form::label('tzid', '店面投资', array('class' => 'col-sm-2 control-label'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::select('tzid', $investments, null,array('class'=>'form-control select2'))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandpay', '投资金额', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandpay', null, array('class' => 'form-control col-md-10','id'=>'brandpay','placeholder'=>'请填写实际投资金额区间', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandduty', '是否区域授权', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::select('brandduty', ['否','是'], null,array('class'=>'form-control select2'))}}
                                        {{Form::hidden('mid', '1', array('class' => 'form-control col-md-10','id'=>'mid'))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandnum', '门店总数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandnum', null, array('class' => 'form-control col-md-10','id'=>'brandnum','placeholder'=>'门店总数', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandarea', '加盟区域', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandarea', null, array('class' => 'form-control col-md-10','id'=>'brandarea','placeholder'=>'加盟区域', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandmap', '经营范围', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandmap', null, array('class' => 'form-control col-md-10','id'=>'brandmap','placeholder'=>'经营范围', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandperson', '加盟人群', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandperson', null, array('class' => 'form-control col-md-10','id'=>'brandmap','placeholder'=>'加盟人群', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandattch', '加盟意向人数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandattch', null, array('class' => 'form-control col-md-10','id'=>'brandattch','placeholder'=>'加盟意向人数', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandapply', '项目收藏人数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandapply', null, array('class' => 'form-control col-md-10','id'=>'brandapply','placeholder'=>'项目收藏人数', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandchat', '项目咨询人数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandchat', null, array('class' => 'form-control col-md-10','id'=>'brandchat','placeholder'=>'项目咨询人数', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandgroup', '公司名称', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandgroup', null, array('class' => 'form-control col-md-10','id'=>'brandgroup','placeholder'=>'公司名称', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    {{Form::label('brandaddr', '公司地址', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandaddr', null, array('class' => 'form-control col-md-10','id'=>'brandaddr','placeholder'=>'公司地址','required'=>'required', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('registeredcapital', '注册资金', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('registeredcapital', null, array('class' => 'form-control col-md-10','id'=>'registeredcapital','placeholder'=>'注册资金', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('texuid', '特许备案号', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('texuid', null, array('class' => 'form-control col-md-10','id'=>'texuid','placeholder'=>'特许备案号 如无可不填写', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('brandphone', '品牌电话', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('brandphone', null, array('class' => 'form-control col-md-10','id'=>'brandphone','placeholder'=>'如无特别指明，无需填写', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('url', '品牌官网', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        {{Form::text('url', null, array('class' => 'form-control col-md-10','id'=>'url','placeholder'=>'如无特别指明，无需填写', 'autocomplete'=>"off"))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-camera bg-purple"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('j, n,y')}}</span>
                        <h3 class="timeline-header"><a href="#">图集处理</a> 批量上传图集</h3>
                        <div class="timeline-body">
                            {{Form::file('image', array('name'=>'input-image','class' => 'file-loading','id'=>'input-image-1', 'multiple','accept'=>'image/*'))}}
                            <div id="kv-success-modal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">图片上传成功</h4>
                                        </div>
                                        <div id="kv-success-box" class="modal-body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{Form::hidden('imagepics', null,array('id'=>'imagepics'))}}
                        </div>
                    </div>
                </li>
                @include('admin.layouts.brand_summernote')
                <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                </li>
            </ul>

        </div>
        <!-- /.col -->
        {!! Form::close() !!}
    </div>
    @if(count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <!-- /.row -->
    </section>
@stop

@section('libs')
    <!-- iCheck -->
    <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="/adminlte/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js"></script>
    <script src="/adminlte/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
    <script src="/adminlte/plugins/bootstrap-fileinput/js/locales/zh.js"></script>
    <script src="/adminlte/plugins/select2/select2.full.min.js"></script>
    <script src="/adminlte/plugins/select2/i18n/zh-CN.js"></script>
    <script>
        $(function () {
            $('.select2').select2({language: "zh-CN"});
            $("#topid").select2().val({{$articleinfos->arctype->topid}}).trigger("change");
            getsonTypes("/admin/getsontypes",{"topid":$("#topid").select2("val")},"#typeid",{{$articleinfos->typeid}});
            getsonTypes("/admin/getareas",{"province_id":$("#province_id").select2("val")},"#city_id",{{$articleinfos->city_id}});
            $("#topid").on("change",function(){getsonTypes("/admin/getsontypes",{"topid":$("#topid").select2("val")},"#typeid")});
            $("#province_id").on("change",function(){getsonTypes("/admin/getareas",{"province_id":$("#province_id").select2("val")},"#city_id")});
            $('#datepicker').datepicker({ autoclose: true, language: 'zh-CN',todayHighlight: true});
            //Flat red color scheme for iCheck
            $('.basic_info input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({checkboxClass: 'icheckbox_flat-green',radioClass: 'iradio_flat-green'});
            $("#input-image-1").fileinput({
                theme: 'fa',
                uploadUrl: "/admin/upload/images",
                allowedFileExtensions: ["jpg", "png", "gif",'jpeg'],
                maxImageWidth: 1000,
                minFileCount: 1,
                maxFileCount: 6,
                language: 'zh',
                overwriteInitial: false,
                resizeImage: true,
                initialPreviewAsData: true,
                initialPreview: [
                    @foreach($pics as $pic)
                        "{{$pic}}",
                    @endforeach
                ],
                initialPreviewConfig: [
                        @foreach($pics as $indexnum=>$pic)
                    {caption: "{{$indexnum+1}}", url: "/admin/file-delete-batch", key: ['{{$pic}}']},
                    @endforeach
                ],
                purifyHtml: true, // this by default purifies HTML data for preview
            }).on('fileuploaded', function(e, params) {
                $('#kv-success-box').html('上传成功！');
                $('#kv-success-modal').modal('show');
                $('.kv-file-remove').hide();
                $("#imagepics").val($("#imagepics").val()+','+params.response.link+',');
                $("#imagepics").val($("#imagepics").val().replace(',,',','));
            }).on("filepredelete", function() {
                var abort = true;
                if (confirm("确定要删除此图片吗 此删除操作为异步操作,删除后图片不可恢复,删除后请及时提交")) {
                    abort = false;
                }
                return abort;
            }).on('filedeleted', function(event, key) {
                $("#imagepics").val($("#imagepics").val().replace(key,''));
                $("#imagepics").val($("#imagepics").val().replace(',,',','));
            });
        });
        $("#formarticle").submit(function () {
            $("#submitbutton").attr('disabled','disabled');
            $("#submitbutton").html('发布中 请稍后');
        });
    </script>
    <script>
        function getsonTypes(url,datas,element,value=0)
        {
            $.ajax(
                {type:"POST",url:url,data:datas,
                    datatype: "json",
                    success:function (response) {
                        var contents='';
                        for (type in response) {
                            contents += '<option value="' + type + '">' + response[type] + '</option>';
                        }
                        $(element).html(contents);
                        if (value!=0)
                        {
                            $(element).select2().val(value).trigger("change");
                        }
                    }
                });
        }
    </script>
@stop

