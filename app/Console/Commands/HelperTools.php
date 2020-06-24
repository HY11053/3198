<?php

namespace App\Console\Commands;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class HelperTools extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'helper-tools';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Helper Tools';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->importArctype();
        //$this->importArticle();
    }

    /**
     * 栏目导入
     */
    private function importArctype(){
        $types=DB::connection('n3198')->select('select * from nx_sorts where id > ?',[0]);
        //dd($types);
        foreach ($types as $type){
            Arctype::create([
                'id'=>$type->id,
                'typename'=>$type->name,
                'reid'=>$type->parent,
                'typedir'=>$type->short,
                'real_path'=>$type->short,
                'dianping'=>$type->info,
                'sortrank'=>$type->sorder,
                'is_write'=>1,
                'is_checked'=>$type->checked,
                'link'=>$type->link,
                'title'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,6])[0]->title,
                'keywords'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,6])[0]->keyw,
                'description'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,6])[0]->des,
                'ntitle'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,7])[0]->title,
                'nkeywords'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,7])[0]->keyw,
                'ndescription'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,7])[0]->des,
                'ktitle'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,8])[0]->title,
                'kkeywords'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,8])[0]->keyw,
                'kdescription'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,8])[0]->des,
                'ptitle'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,9])[0]->title,
                'pkeywords'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,9])[0]->keyw,
                'pdescription'=>DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$type->id,9])[0]->des,
            ]);
        }
    }

    /**
     * 普通资讯
     */
    private function importArticle(){
        $articles=DB::connection('n3198')->select('select * from nx_news where id > ? and id <> ?',[0,52915]);
        //$articles=DB::connection('n3198')->select('select * from nx_news where id = ?',[54079]);
        foreach ($articles as  $article){
            $insertarticleinfo=[];
            $insertarticleinfo['id']=$article->id;
            $insertarticleinfo['title']=$article->name;
            $insertarticleinfo['ptypeid']=$article->typeid;
            $insertarticleinfo['typeid']=$article->sid?$article->sid:$article->typeid;
            $insertarticleinfo['brandid']=$article->pid;
            $insertarticleinfo['ismake']=$article->status;
            $insertarticleinfo['click']=$article->count;
            $insertarticleinfo['like']=$article->like;
            $insertarticleinfo['unlike']=$article->unlike;
            $insertarticleinfo['write']='梁李良';
            $insertarticleinfo['dutyadmin']=$article->editor?$article->editor:1;
            $insertarticleinfo['created_at']=strtotime($article->created_at)>0?$article->created_at:Carbon::now();
            $insertarticleinfo['published_at']=strtotime($article->created_at)>0?$article->created_at:Carbon::now();
            $insertarticleinfo['updated_at']=$article->updated_at;
            $insertarticleinfo['flags']=($article->headline==1)?'h':'';
            $extendnews=DB::connection('n3198')->select('select * from nx_news_extend where id = ?',[$article->id]);
            $insertarticleinfo['litpic']=$extendnews[0]->cover?$extendnews[0]->cover:'';
            $insertarticleinfo['tags']=$extendnews[0]->tag?$extendnews[0]->tag:'';
            $insertarticleinfo['body']=$extendnews[0]->content;
            $insertarticleinfo['keywords']=str_limit($extendnews=DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$article->id,2])[0]->keyw,60,'');
            $insertarticleinfo['description']=str_limit($extendnews=DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$article->id,2])[0]->des,150,'');
            Archive::create($insertarticleinfo);
        }
    }

    private function importBrandArticle(){
        $articles=DB::connection('n3198')->select('select * from nx_pros where id > ?',[0]);
        //$articles=DB::connection('n3198')->select('select * from nx_news where id = ?',[54079]);
        foreach ($articles as  $article){
            $insertarticleinfo=[];
            $insertarticleinfo['id']=$article->id;
            $insertarticleinfo['brandname']=$article->name;
            $insertarticleinfo['typeid']=$article->sid;
            $insertarticleinfo['ismake']=$article->status;
            $insertarticleinfo['click']=$article->count;
            $insertarticleinfo['tzid']=$article->level;
            $insertarticleinfo['province_id']=$article->province_id;
            $insertarticleinfo['city_id']=$article->city_id;
            $insertarticleinfo['area_id']=$article->area_id;
            $insertarticleinfo['flags']=($article->headline==1)?'h':'';
            $insertarticleinfo['write']='梁李良';
            $insertarticleinfo['dutyadmin']=$article->editor?$article->editor:1;
            $insertarticleinfo['created_at']=strtotime($article->created_at)>0?$article->created_at:Carbon::now();
            $insertarticleinfo['published_at']=strtotime($article->created_at)>0?$article->created_at:Carbon::now();
            $insertarticleinfo['updated_at']=$article->updated_at;
            $extendbrands=DB::connection('n3198')->select('select * from nx_pros_extend where id = ?',[$article->id]);
            $insertarticleinfo['litpic']=$extendbrands[0]->cover?$extendbrands[0]->cover:'';
            $insertarticleinfo['imagepics']=$extendbrands[0]->pics?$extendbrands[0]->pics:'';
            $insertarticleinfo['tags']=$extendbrands[0]->tag?$extendbrands[0]->tag:'';
            $insertarticleinfo['body']=$extendbrands[0]->content;
            $insertarticleinfo['keywords']=str_limit($extendnews=DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$article->id,2])[0]->keyw,60,'');
            $insertarticleinfo['description']=str_limit($extendnews=DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?',[$article->id,2])[0]->des,150,'');
            Archive::create($insertarticleinfo);
        }
    }
}
