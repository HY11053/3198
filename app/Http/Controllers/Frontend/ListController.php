<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function TopbrandList(Request $request,$path){
        $thisTypeinfos=Arctype::where('real_path',$path)->first();
        if (empty($thisTypeinfos)){
            abort(404);
        }
        $thisTypeSonsInfos=Arctype::where('reid',$thisTypeinfos->id)->get(['id','typename',]);
        $brands=Brandarticle::whereIn('typeid',Arctype::where('reid',$thisTypeinfos->id)->pluck('id'))->orderBy('id','desc')->paginate(10);
        return view('frontend.brands',compact('thisTypeinfos','thisTypeSonsInfos','brands'));
    }
}
