<?php

namespace App\Listeners;

use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use App\Events\PhoneEvent;
use App\Mail\MailerSendClass;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class PhoneEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $mailer;
    public function __construct(MailerSendClass $mailerSendClass)
    {
        //
        $this->mailer=$mailerSendClass;
    }

    /**
     * Handle the event.
     *
     * @param  PhoneEvent  $event
     * @return void
     */
    public function handle(PhoneEvent $event)
    {
        preg_match('#\/news\/(\d+)\.shtml#',$event->phonemanage->host,$matches);
        if (isset($matches[1]))
        {
            $brandid=Archive::where('id',$matches[1])->value('brandid');
            if ($brandid)
            {
                $brandarticle=Brandarticle::where('id',$brandid)->latest()->first();
                if (isset($brandarticle->id))
                {
                    $brandname=$brandarticle->brandname;
                    $cla=$brandarticle->arctype->typename;
                    $project_id=$brandarticle->id;
                }else{
                    $brandname=Archive::where('id',$matches[1])->value('bdname')?Archive::where('id',$matches[1])->value('bdname'):'暂无品牌信息';
                    $cla='暂未分类';
                    $project_id=$matches[1];
                }
            }else{
                $brandname=Archive::where('id',$matches[1])->value('bdname')?Archive::where('id',$matches[1])->value('bdname'):'暂无品牌信息';
                $cla='暂未分类';
                $project_id=$matches[1];
            }
        }else{
            preg_match('#\/xm\/(\d+)\.shtml#',$event->phonemanage->host,$matches);
            if (isset($matches[1])){
                $brandarticle=Brandarticle::where('id',$matches[1])->first();
                $brandname=$brandarticle->brandname;
                $cla=$brandarticle->arctype->typename;
                $project_id=$brandarticle->id;
            }else{
                $brandname='暂无品牌信息';
                $cla='暂未分类';
                $project_id='暂无品牌分类';
            }
        }
        $post_data = array(
            "realm" => 'www.icycn.com',
            "job" => 'guestbook',
            "resolution" => 'resolution',
            "title" => '世纪母婴网',
            "cla" => $cla,
            "combrand" => $brandname,
            "username" => $event->phonemanage->name,
            "iphone" => decrypt($event->phonemanage->phoneno),
            "content" =>  $event->phonemanage->note,
            "project_id" => $project_id,
            "real_useraddr" => $event->phonemanage->ip,
            "real_httpurl" => $event->phonemanage->host
        );
        $header=[
            "Accept-Language: zh-CN,zh;q=0.9",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36",
        ];
        Log::info($post_data);
        $this->curl_https("https://message.u88.com/index.php/my_ci/into/", $post_data,$header);
    }

    /**curlHTTPS请求转发
     * @param $url
     * @param array $data
     * @param array $header
     * @param int $timeout
     * @param bool $debug
     * @return mixed
     */
    function curl_https($url, $data=array(), $header=array(), $timeout=30, $debug=true){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt ($ch, CURLOPT_REFERER, $data['real_httpurl']);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        if($error=curl_error($ch)){
            die($error);
        }
        curl_close($ch);
        if ($httpCode==200)
        {
            Log::info($url.'推送成功');
        }else{
            Log::info($url.'推送失败');
            Log::info($response);
        }
    }
}
