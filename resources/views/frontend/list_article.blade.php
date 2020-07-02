@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <script src="/public/js/lanrenzhijia.js" type="text/javascript"></script>
    <script type="text/javascript" src="/public/js/index.js"></script>
    <link href="/public/css/news1.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 6]>
    <script type="text/javascript" src="/public/js/DD_belatedPNG_0.0.7a.js"></script>
    <script>
        DD_belatedPNG.fix('.png_bg,.png_bg a:hover,.all_sort_all ul li a span');
    </script>
    <![endif]-->
@stop
@section('main')
    <div class="box clearfix" style="position:relative;">
        <div class="weizhi1">
	<span>
		<a href="/">{{config('app.indexname')}}</a>&gt;
		<a href="/{{$catepath}}">加盟资讯</a>&gt;
		<a href="/{{$catepath}}/{{$thisTypeTopInfo->real_path}}">{{$thisTypeTopInfo->typename}}</a>&gt;
		<a>{{$thisTypeinfos->typename}}</a>
	</span></div>
        <div class="w720" style="overflow:hidden;">
            <div class="zixun_bt"><h1>{{$thisTypeinfos->typename}}</h1></div>
            <div class="zixun_list">
                <ul>
                    @foreach($listarticles as $listarticle)
                        <li><em>{{date('Y-m-d',strtotime($listarticle->created_at))}}</em><a href="/{{$catepath}}/{{$listarticle->id}}">{{$listarticle->title}}</a></li>
                        @if($loop->iteration%5==0)<li class="fg"></li>@endif
                    @endforeach
                </ul>

                <div class="page">
                    {{$listarticles->links()}}
                </div>
            </div>
        </div>

        <div class="w260">
            <div class="rbk r_biaoqian">
                <div class="h2">相关推荐</div>
                <div class="rbka">
                    <div class="bqgao">
                        <ul class="clearfix" oriheight="210" style="height: 90px;">
                            @foreach($thisTypeSonsInfos as $thisTypeSonsInfo)
                                <li><a href="/{{$thisTypeTopInfo->real_path}}/{{$thisTypeSonsInfo->id}}">{{$thisTypeSonsInfo->typename}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="more22"><span>更多</span></div>

                    <script type="text/javascript">

                        $(function(){

                            $('.bqgao ul').each(function(){
                                if($(this).height() > 90){
                                    $(this).attr('oriheight',$(this).height())
                                    $(this).animate({height:"90px"})
                                    $(this).parent().next('.more22').show()
                                }else{
                                    $(this).parent().next('.more22').hide()
                                }

                            })

                            $('.more22 span').on('click',function(e){
                                // alert($(this).prev().children('.bqgao').height() )
                                var target = $(this).parent().prev('div').children('ul')
                                if($(this).parent().prev('div').children('ul').height() > 90){
                                    $(this).parent().removeClass('morea22').children('span').html('查看详情')
                                    target.animate({height:"90"})
                                }else{
                                    $(this).parent().addClass('morea22').children('span').html('收起内容')
                                    target.animate({height:target.attr('oriheight')})
                                }

                            })
                        });
                    </script>

                </div>
            </div>

            <div class="rbk r_ullb1">
                <div class="h2"><em><a href="/zhishi/{{$thisTypeTopInfo->real_path}}/{{$thisTypeinfos->id}}">更多&gt;&gt;</a></em>{{$thisTypeinfos->typename}}加盟知识</div>
                <div class="rbka">
                    <ul class="clearfix">

                        @foreach($latestKnowledges as $latestKnowledge)
                            <li><a href="/zhishi/{{$latestKnowledge->id}}">{{$latestKnowledge->title}}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="rbk r_ullb2">
                <div class="h2">{{$thisTypeinfos->typename}}最新入住商家</div>
                <div class="rbka">
                    <ul class="clearfix">
                        @foreach($latestBrands as $latestBrand)
                            <li>
                                <span><a href="/xm/{{$latestBrand->id}}"><img src="{{$latestBrand->litpic}}" alt="{{str_replace('加盟','',$latestBrand->brandname)}}" /></a></span>
                                <strong><a href="/xm/{{$latestBrand->id}}">{{str_replace('加盟','',$latestBrand->brandname)}}</a></strong>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>

@stop
