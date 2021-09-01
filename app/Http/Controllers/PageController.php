<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Models\Rashifal;
use App\Models\Subscription;
use App\Widgets\TodayDate;
use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
class PageController extends Controller
{
    private $rashifal  = array();
    private $forex  = array();
    private $init = 0;

    public function index(){
        return view('index');
    }

    public function subscribe(Request $request){
        $request->validate([
            'email'=>'required | email'
        ]);
        $email = $request->email;
        $new = Subscription::where('email',$email)->first();
        if($new){
            $new->rashifal_id  =$request->rashifal_id;
            $new->update();
        }else{
            $new = new Subscription();
            $new->email = $email;
            $new->rashifal_id = $request->rashifal_id;
            $new->save();
        }
        $data =  array(
            'email'=>$email,
            'rashifal' => json_decode(Rashifal::orderBy('id','desc')->first()->rashifal,true)[$request->rashifal_id],
            'user'=>$new
        );
        Mail::send('email', $data , function($message) use ($data)
        {
            $message->from('mailkumar19373@gmail.com','राशिफल - क्षितिज वेबसाइट');
            $message->to($data['email'], $data['rashifal']['title'])->subject('सदस्यताको लागि धन्यवाद');
        });
        Session::flash('success',"सदस्यताको लागि धन्यवाद, तपाईको यो {$data['email']} मा हामी दैनिक {$data['rashifal']['title']} राशिफल पठाउनेछौँ।");
        return redirect()->back();
    }
    public function unsubscribe($id){
        if(Subscription::find(decrypt($id))){
            Subscription::find(decrypt($id))->delete();
            return 'Successfully Unsubscribed';
        }
        return 'Already un-Subscribed';
    }
    public function getForex(){
        try{
            $client = new Client();
            $url = 'https://www.hamropatro.com/';
            $hamropatro = $client->request('GET',$url);
            $hamropatro->filter('ul.currency')->first()->children()->each(function($item,$index){
                if($index>2){
                    $this->forex[$this->init][]=$item->filter('li')->text();
                }
                if(($index+1)%3==0){
                    $this->init = $this->init+1;
                }
            });
            $forex = collect($this->forex)->values();
            return view('projects.forex',compact('forex'));
        }
        catch (\Exception $e){
            abort('404');
        }
    }
    public function getRashifal(){
        try{
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
            return view('projects.rashifal',compact('rashifal','title'));
        }
        catch (\Exception $e){
            abort('404');
        }

    }

    /**
     * Rashifal API function
     */
    public function rashifalAPI(){
        try{
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
                    $todaysRashifal = Rashifal::orderBy('created_at','desc')->first()->rashifal;
                    $rashifal = json_decode($todaysRashifal->rashifal,true);
                    $title = $todaysRashifal->title;
                }
            }
            return response(compact('rashifal','title'),200);
        }
        catch (\Exception $e){
            abort('404');
        }

    }

    public function getTodayNepaliDate(){
        return view('projects.today-nepali-date');
    }

    public function showBlogs(Request $request){
        if($request->category){
            $category_id = Category::where('slug',$request->category)->first()->id;
            $blogs = Blog::where('category_id',$category_id)->orderBy('created_at', 'desc')->get();
        }
        elseif($request->tag){
            $blogs = Blog::where('tags','LIKE',"%{$request->tag}%")->orderBy('created_at', 'desc')->get();
        }
        else{
            $blogs = Blog::orderBy('created_at','desc')->get();
        }
        return view('blogs.show',compact(
            'blogs'
        ));
    }

    public function showBlogDetails($slug){
        $blog = Blog::where('slug',$slug)->first();
        $blog['views'] = $blog['views']+1;
        $blog->save();
        $tags = explode(',',$blog->tags);
        $trendings = Blog::orderBy('views','desc')->take(4)->get();
        $categories = Category::orderBy('order')->get();
        $nextBlog = Blog::where('id',$blog->id+1)->first();
        $nextBlogSlug = $nextBlog ? $nextBlog->slug : null;
        $previousBlog = Blog::where('id', $blog->id - 1)->first();
        $previousBlogSlug = $previousBlog ? $previousBlog->slug : null;
        return view('blogs.showDetails', compact(
            'blog',
            'nextBlogSlug',
            'previousBlogSlug',
            'tags',
            'categories',
            'trendings'
        ));
    }
}
