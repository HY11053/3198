<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use App\AdminModel\KnowedgeNew;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function Index(){
        $latestnewslists=Cache::remember('index_latestnewslists', 60, function(){
            return Archive::where('mid',1)->take(12)->orderBy('id','desc')->get(['id','title']);
        });
        $latestbrandlists=Cache::remember('index_latestbrands', 60, function(){
            return Brandarticle::take(12)->orderBy('id','desc')->get(['id','brandname']);
        });
        $knowledges=Cache::remember('index_knowledges', 60, function(){
            return KnowedgeNew::take(12)->orderBy('click','desc')->get(['id','title']);
        });
        $brandcounts=Cache::remember('index_brandcount', 60*24*365+rand(1,100), function(){
            return Brandarticle::count();
        });
        $newscounts=Cache::remember('index_newscount', 60*24*365+rand(1,100), function(){
            return Archive::count()+KnowedgeNew::count();
        });
        $latestbrandlist2s=Cache::remember('index_latestbrand2s', 60, function(){
            return Brandarticle::skip(12)->take(108)->orderBy('id','desc')->get(['id','brandname','litpic']);
        });
        $paihangbangs=Cache::remember('index_paihangbangs', 60, function(){
            return Brandarticle::take(12)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $latestbrandlist3s=Cache::remember('index_latestbrand3s', 60, function(){
            return Brandarticle::take(27)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $zhishilists=Cache::remember('index_zhishilists', 60, function(){
            return Archive::where('mid','>',1)->take(13)->orderBy('id','desc')->get(['id','title','typeid']);
        });
        $newslist2s=Cache::remember('index_newslist2s', 60, function(){
            return Archive::where('mid',1)->skip(12)->take(13)->orderBy('id','desc')->get(['id','title','typeid']);
        });
        return view('frontend.index',compact('latestnewslists','latestbrandlists','knowledges','brandcounts','newscounts','latestbrandlist2s','paihangbangs','latestbrandlist3s','newslist2s','zhishilists'));
    }
}
