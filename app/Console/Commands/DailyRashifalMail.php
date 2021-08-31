<?php

namespace App\Console\Commands;

use App\Models\Rashifal;
use App\Models\Subscription;
use Illuminate\Console\Command;
use Mail;
class DailyRashifalMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dailyrashifal:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily Rashifal';

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
        $subscriptions = Subscription::all();
        $latestRashifal = Rashifal::first();
        foreach ($subscriptions as $subscription){
            $data =  array(
                'email'=>$subscription->email,
                'rashifal' => json_decode($latestRashifal->rashifal,true)[$subscription->rashifal_id],
                'user'=>$subscription,
                'title' => $latestRashifal->title
            );
            Mail::send('dailyrashifal', $data , function($message) use ($data,$latestRashifal)
            {
                $message->from('mailkumar19373@gmail.com','दैनिक राशिफल - क्षितिज वेबसाइट');
                $message->to($data['email'], $data['rashifal']['title'])->subject($latestRashifal->title);
            });
        }
        $this->info('Run Successfully');
    }
}
