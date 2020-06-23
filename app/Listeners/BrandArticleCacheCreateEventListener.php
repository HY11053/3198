<?php

namespace App\Listeners;

use App\AdminModel\Acreagement;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\Events\BrandArticleCacheCreateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class BrandArticleCacheCreateEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BrandArticleCacheCreateEvent  $event
     * @return void
     */
    public function handle(BrandArticleCacheCreateEvent $event)
    {
        $id=$event->brandarticle->id;
        if (Brandarticle::find($id))
        {
            //清除当前缓存 重新写入 兼容Update
            Cache::forget('thisbrandarticleinfos_'.$id);
            //当前品牌文档信息，请保持缓存名称和普通文档的所属品牌缓存名称相同
            $thisarticleinfos = Cache::remember('thisbrandarticleinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
                return Brandarticle::findOrFail($id);
            });
            //当前品牌所属分类，请保持缓存名称和普通文档的所属品牌分类缓存名称相同
            Cache::forget('thistypeinfos_'.$thisarticleinfos->typeid);
            $thistypeinfo=Cache::remember('thistypeinfos_'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return  Arctype::where('id',$thisarticleinfos->typeid)->first();
            });
            Cache::forget('abrandlist'.$thisarticleinfos->typeid);
            Cache::remember('abrandlist'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('typeid',$thisarticleinfos->typeid)->take(6)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);;
            });
            Cache::forget('cbrandlist'.$thisarticleinfos->typeid);
            Cache::remember('cbrandlist'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('typeid',$thisarticleinfos->typeid)->skip(6)->take(4)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
            });
            Cache::forget('phb'.$thisarticleinfos->typeid);
            Cache::remember('phb'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('typeid',$thisarticleinfos->typeid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
            });
            Cache::forget('thisarticleinfos_latestbrands'.$thisarticleinfos->typeid);
            Cache::remember('thisarticleinfos_latestbrands'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return $latestbrands=Brandarticle::where('typeid',$thisarticleinfos->typeid)->latest()->skip(10)->take(20)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
            });
            //文档非关联全局品牌调用文档
            Cache::forget('abrandlist');
            Cache::remember('abrandlist', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::take(6)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);;
            });
            Cache::forget('phb');
            Cache::remember('phb', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
            });
            Cache::forget('latestbrands');
            Cache::remember('latestbrands',  config('app.cachetime')+rand(60,60*24), function(){
                return  Brandarticle::latest()->skip(6)->take(20)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
            });
            //列表页
            Cache::forget('type_abrandlist');
            Cache::remember('type_abrandlist', config('app.cachetime')+60*24*365, function(){
                return Brandarticle::skip(10)->take(4)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);;
            });
            Cache::forget('typeabrandlist');
            Cache::remember('typeabrandlist', config('app.cachetime')+rand(60,60*24), function() {
                return Brandarticle::take(6)->orderBy('id','desc')->get();
            });
            Cache::forget('flashlingshibrands'.$thistypeinfo->id);
            Cache::remember('flashlingshibrands'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*24), function()  use ($thistypeinfo){
                return Brandarticle::where('typeid',$thistypeinfo->id)->skip(10)->take(9)->orderBy('click','desc')->get(['id','brandname','litpic']);
            });
            Cache::forget('hotbrands'.$thistypeinfo->id);
            Cache::remember('hotbrands'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*24), function() use ($thistypeinfo){
                return Brandarticle::skip(19)->take(6)->where('typeid',$thistypeinfo->id)->orderBy('click','desc')->get(['id','brandname','brandpay','brandnum','brandnum','litpic']);
            });
            Cache::forget('mtype_latestbrands');
            Cache::remember('mtype_latestbrands',   config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::latest()->take(4)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
            });
            Cache::forget('index_latestbrands');
            Cache::remember('index_latestbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid','<',3)->take(5)->latest()->get(['id','brandname','litpic','brandpay','description']);
            });
            Cache::forget('index_sbrands');
            Cache::remember('index_sbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('mid',1)->where('flags','like','%s%')->take(10)->orderBy('id','asc')->get(['id','brandname','brandpay','indexpic']);
            });
            Cache::forget('index_latestmuyingbrands');
            Cache::remember('index_latestmuyingbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',1)->take(27)->orderBy('id','desc')->get(['id','brandname']);
            });
            Cache::forget('index_latestrmuyingbrands');
            Cache::remember('index_latestrmuyingbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',1)->skip(27)->take(60)->orderBy('id','desc')->get(['id','brandname']);
            });
            Cache::forget('index_latestmuyingshgbrands');
            Cache::remember('index_latestmuyingshgbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',2)->take(27)->orderBy('id','desc')->get(['id','brandname']);
            });
            Cache::forget('index_latestrmuyingshgbrands');
            Cache::remember('index_latestrmuyingshgbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',2)->skip(27)->take(18)->orderBy('id','desc')->get(['id','brandname','litpic']);
            });
            Cache::forget('index_latestzsbrands');
            Cache::remember('index_latestzsbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',4)->take(27)->orderBy('id','desc')->get(['id','brandname']);
            });
            Cache::forget('index_latestrzsbrands');
            Cache::remember('index_latestrzsbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',4)->skip(27)->take(18)->orderBy('id','desc')->get(['id','brandname','litpic']);
            });
            Cache::forget('index_hbrands');
            Cache::remember('index_hbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::take(5)->orderBy('click','desc')->get(['id','brandname','brandpay','litpic','brandattch','brandapply','typeid']);
            });
            Cache::forget('index_brandalltypes');
            Cache::remember('index_brandalltypes', config('app.cachetime')+rand(60,60*24), function(){
                return Arctype::where('mid',1)->orderBy('id','desc')->pluck('typename','id');
            });
            //移动端
            Cache::forget('mobile_index_hotbrands');
            Cache::remember('mobile_index_hotbrands', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',2)->skip(10)->take(5)->orderBy('id','asc')->get(['id','brandname','litpic','description','brandpay']);
            });
            Cache::forget('mobile_index_muyingnavlists');
            Cache::remember('mobile_index_muyingnavlists', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',1)->orderBy('id','asc')->take(5)->get(['id','brandname','litpic','description','brandpay']);
            });
            Cache::forget('mobile_index_muyingshgnavlists');
            Cache::remember('mobile_index_muyingshgnavlists', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',2)->orderBy('id','asc')->take(5)->get(['id','brandname','litpic','description','brandpay']);
            });
            Cache::forget('mobile_index_muyingypnavlists');
            Cache::remember('mobile_index_muyingypnavlists', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('typeid',4)->orderBy('id','asc')->take(5)->get(['id','brandname','litpic','description','brandpay']);
            });
        }

    }
}
