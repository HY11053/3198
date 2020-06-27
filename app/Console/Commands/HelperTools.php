<?php

namespace App\Console\Commands;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
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
        $this->importArticle();
        $this->importBrandArticle();
        $this->importAreas();
    }

    /**
     * 栏目导入
     */
    private function importArctype()
    {
        $types = DB::connection('n3198')->select('select * from nx_sorts where id > ?', [0]);
        //dd($types);
        foreach ($types as $type) {
            Arctype::create([
                'id' => $type->id,
                'typename' => $type->name,
                'reid' => $type->parent,
                'typedir' => $type->short,
                'real_path' => $type->short,
                'dianping' => $type->info,
                'sortrank' => $type->sorder,
                'is_write' => 1,
                'is_checked' => $type->checked,
                'link' => $type->link,
                'title' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 6])[0]->title,
                'keywords' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 6])[0]->keyw,
                'description' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 6])[0]->des,
                'ntitle' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 7])[0]->title,
                'nkeywords' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 7])[0]->keyw,
                'ndescription' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 7])[0]->des,
                'ktitle' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 8])[0]->title,
                'kkeywords' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 8])[0]->keyw,
                'kdescription' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 8])[0]->des,
                'ptitle' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 9])[0]->title,
                'pkeywords' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 9])[0]->keyw,
                'pdescription' => DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$type->id, 9])[0]->des,
            ]);
        }
    }

    /**
     * 普通资讯
     */
    private function importArticle()
    {
        $articles = DB::connection('n3198')->select('select * from nx_news where id > ? and id <> ?', [0, 52915]);
        //$articles=DB::connection('n3198')->select('select * from nx_news where id = ?',[54079]);
        foreach ($articles as $article) {
            $insertarticleinfo = [];
            $insertarticleinfo['id'] = $article->id;
            $insertarticleinfo['title'] = $article->name;
            $insertarticleinfo['ptypeid'] = $article->typeid;
            $insertarticleinfo['typeid'] = $article->sid ? $article->sid : $article->typeid;
            $insertarticleinfo['brandid'] = $article->pid;
            $insertarticleinfo['ismake'] = $article->status;
            $insertarticleinfo['click'] = $article->count;
            $insertarticleinfo['like'] = $article->like;
            $insertarticleinfo['unlike'] = $article->unlike;
            $insertarticleinfo['write'] = '梁李良';
            $insertarticleinfo['dutyadmin'] = $article->editor ? $article->editor : 1;
            $insertarticleinfo['created_at'] = strtotime($article->created_at) > 0 ? $article->created_at : Carbon::now();
            $insertarticleinfo['published_at'] = strtotime($article->created_at) > 0 ? $article->created_at : Carbon::now();
            $insertarticleinfo['updated_at'] = $article->updated_at;
            $insertarticleinfo['flags'] = ($article->headline == 1) ? 'h' : '';
            $extendnews = DB::connection('n3198')->select('select * from nx_news_extend where id = ?', [$article->id]);
            $insertarticleinfo['litpic'] = $extendnews[0]->cover ? $extendnews[0]->cover : '';
            $insertarticleinfo['tags'] = $extendnews[0]->tag ? $extendnews[0]->tag : '';
            $insertarticleinfo['body'] = $extendnews[0]->content;
            $insertarticleinfo['keywords'] = str_limit($extendnews = DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$article->id, 2])[0]->keyw, 60, '');
            $insertarticleinfo['description'] = str_limit($extendnews = DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$article->id, 2])[0]->des, 150, '');
            Archive::create($insertarticleinfo);
        }
    }

    /**
     * 品牌文档导入
     */
    private function importBrandArticle()
    {
        $articles = DB::connection('n3198')->select('select * from nx_pros where id > ?', [0]);
        //$articles=DB::connection('n3198')->select('select * from nx_pros where id = ?',[3000]);
        foreach ($articles as $article) {
            $insertarticleinfo = [];
            $insertarticleinfo['id'] = $article->id;
            $insertarticleinfo['mid'] = 1;
            $insertarticleinfo['brandname'] = $article->name;
            $insertarticleinfo['typeid'] = $article->sid;
            $insertarticleinfo['ismake'] = $article->status;
            $insertarticleinfo['click'] = $article->count;
            $insertarticleinfo['tzid'] = $article->level;
            $insertarticleinfo['province_id'] = $article->province;
            $insertarticleinfo['city_id'] = $article->city;
            $insertarticleinfo['area_id'] = $article->area;
            $insertarticleinfo['flags'] = ($article->headline == 1) ? 'h' : '';
            $insertarticleinfo['write'] = '梁李良';
            $insertarticleinfo['dutyadmin'] = $article->editor ? $article->editor : 1;
            $insertarticleinfo['created_at'] = strtotime($article->created_at) > 0 ? $article->created_at : Carbon::now();
            $insertarticleinfo['published_at'] = strtotime($article->created_at) > 0 ? $article->created_at : Carbon::now();
            $insertarticleinfo['updated_at'] = $article->updated_at;
            $extendbrands = DB::connection('n3198')->select('select * from nx_pro_extend where id = ?', [$article->id]);
            $insertarticleinfo['litpic'] = $extendbrands[0]->cover ? $extendbrands[0]->cover : '';
            $inserarticle['imagepic'] = \GuzzleHttp\json_decode($extendbrands[0]->pics);
            $insertarticleinfo['imagepics'] = '';
            for ($j = 0; $j < count($inserarticle['imagepic']); $j++) {
                if (is_string($inserarticle['imagepic'][$j])) {
                    $insertarticleinfo['imagepics'] .= $inserarticle['imagepic'][$j] . ',';
                } else {
                    $insertarticleinfo['imagepics'] .= $inserarticle['imagepic'][$j]->src . ',';
                }
            }
            $insertarticleinfo['imagepics'] = rtrim($insertarticleinfo['imagepics'], ',');
            $insertarticleinfo['pds'] = $extendbrands[0]->pds;
            $insertarticleinfo['brandmoshi'] = $extendbrands[0]->model;
            $insertarticleinfo['brandperson'] = $extendbrands[0]->target;
            $insertarticleinfo['brandarea'] = $extendbrands[0]->mrange;
            $insertarticleinfo['brandgroup'] = $extendbrands[0]->cname;
            $insertarticleinfo['brandtime'] = $extendbrands[0]->cetime;
            $insertarticleinfo['brandaddr'] = $extendbrands[0]->caddress;
            $brandinfo = $this->processContents(json_decode($extendbrands[0]->details, true)['info']);
            //dd(json_decode($extendbrands[0]->details));
            $tzhb = mb_strlen(strip_tags($extendbrands[0]->tzhb), 'utf-8') > 100 ? "<h2>{$article->name}投资回报</h2>" . $this->processContents($extendbrands[0]->tzhb) : '';
            $tzfa = mb_strlen(strip_tags($extendbrands[0]->tzfa), 'utf-8') > 100 ? "<h2>{$article->name}加盟优势</h2>" . $this->processContents($extendbrands[0]->tzfa) : '';
            $cgal = mb_strlen(strip_tags($extendbrands[0]->cgal), 'utf-8') > 100 ? "<h2>{$article->name}成功案例</h2>" .$this->processContents( $extendbrands[0]->cgal) : '';
            //$profit=mb_strlen(strip_tags($extendbrands[0]->profit),'utf-8')>100?"<h2>{$article->name}利润分析</h2>".$extendbrands[0]->profit:'';
            $profit = "<h2>{$article->name}利润分析</h2>".$this->processContents(json_decode($extendbrands[0]->details, true)['profit']);
            //$join_in=mb_strlen(strip_tags($extendbrands[0]->join_in),'utf-8')>100?"<h2>{$article->name}加盟条件流程</h2>".$extendbrands[0]->join_in:'';
            $join_in = "<h2>{$article->name}加盟条件流程</h2>".$this->processContents(json_decode($extendbrands[0]->details, true)['join']);
            $insertarticleinfo['body'] = $brandinfo . $tzhb . $tzfa . $cgal . $profit . $join_in;
            $insertarticleinfo['title'] = str_limit($extendnews = DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$article->id, 1])[0]->title, 60, '');
            $insertarticleinfo['title'] = $insertarticleinfo['title'] ? $insertarticleinfo['title'] : $insertarticleinfo['brandname'];
            $insertarticleinfo['keywords'] = str_limit($extendnews = DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$article->id, 1])[0]->keyw, 60, '');
            $insertarticleinfo['description'] = str_limit($extendnews = DB::connection('n3198')->select('select * from nx_seos where tid = ? and `type`= ?', [$article->id, 1])[0]->des, 150, '');
            //dd($insertarticleinfo);
            Brandarticle::create($insertarticleinfo);

        }
    }

    /**
     * 地区数据导入
     */
    private function importAreas()
    {
        $areas = DB::connection('n3198')->select('select * from nx_regions where region_id > ?', [0]);
        //$articles=DB::connection('n3198')->select('select * from nx_pros where id = ?',[3000]);
        foreach ($areas as $area) {
            $insertareainfo = [];
            $insertareainfo['id'] = $area->region_id;
            $insertareainfo['parentid'] = $area->parent_id;
            $insertareainfo['regionname'] = $area->region_name;
            $insertareainfo['type'] = $area->region_type;
            Area::create($insertareainfo);
        }
    }

    private function processContents($content)
    {
        $content=str_replace('<br />','<br/>',$content);
        $content=str_replace('<br>','<br/>',$content);
        $content=str_replace('<br >','<br/>',$content);
        $contents='';
        foreach (explode('<br/>',$content) as $body){
            $contents.='<p>'.strip_tags($body).'</p>';
        }
        $contents=str_replace('&nbsp','',$contents);
        $contents=str_replace("\r\n",'',$contents);
        $contents=str_replace('<p></p>','',$contents);
        return $contents;
    }

}
