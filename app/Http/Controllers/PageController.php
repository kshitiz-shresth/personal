<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Goutte\Client;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $rashifal  = array();
    private $forex  = array();
    private $init = 0;

    public function index(){
        return view('index');
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
            $client = new Client();
            $url = 'https://www.hamropatro.com/';
            $hamropatro = $client->request('GET',"{$url}rashifal");
            $hamropatro->filter('#rashifal .item')->each(function($item,$index) use ($url){
                $this->rashifal[$index]['title']=$item->filter('h3')->text();
                $this->rashifal[$index]['description']=$item->filter('.desc')->text();
                $this->rashifal[$index]['image']=$url.$item->filter('img')->attr('src');
            });
            $rashifal = $this->rashifal;
            $title = $hamropatro->filter('.articleTitleNew')->text();
            return view('projects.rashifal',compact('rashifal','title'));
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
