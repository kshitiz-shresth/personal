<?php

namespace App\Console\Commands;

use App\Models\Rashifal;
use App\Models\Setting;
use App\Widgets\TodayDate;
use Goutte\Client;
use Illuminate\Console\Command;

class RashifalCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rashifal:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $val = Setting::find(4);
        $val->value = $val->value+1;
        $val->update();
        $todayDate = TodayDate::nepali();
        $todaysRashifal = Rashifal::where('today_nepali_date',$todayDate)->first();
        if($todaysRashifal){
           $rashifal = json_decode($todaysRashifal->rashifal,true);
           $title = $todaysRashifal->title;
        }
        else{
            $client = new Client();
            $url = 'https://www.hamropatro.com/';
            $hamropatro = $client->request('GET',"{$url}rashifal");
            $title = $hamropatro->filter('.articleTitleNew')->text();
            if(!Rashifal::where('title',$title)->first()) {
                $hamropatro->filter('#rashifal .item')->each(function ($item, $index) use ($url) {
                    $this->rashifal[$index]['title'] = $item->filter('h3')->text();
                    $this->rashifal[$index]['description'] = $item->filter('.desc')->text();
                    $this->rashifal[$index]['image'] = $url . $item->filter('img')->attr('src');
                });
                $rashifal = $this->rashifal;
                Rashifal::create([
                    'rashifal' => json_encode($rashifal),
                    'title' => $title,
                    'today_nepali_date' => $todayDate
                ]);
            }else{
                $todaysRashifal = Rashifal::orderBy('created_at','desc')->first();
                $rashifal = json_decode($todaysRashifal->rashifal,true);
                $title = $todaysRashifal->title;
            }
        }

        $this->info('Run Successfully');
    }
}
