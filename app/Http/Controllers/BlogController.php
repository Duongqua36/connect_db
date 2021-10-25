<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Item;
use App\Models\Setting;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class BlogController extends Controller
{

    public function showHome(){

        $services = $this->getService();
        $news = $this->getNew();
        return view('fontend.home',$this->getSetting(),compact('services','news'));
    }

    public function getSetting(){
        return  [
            "description" => Setting::where('name','description')->first('val')->val,
            "title" => Setting::where('name','title')->first('val')->val,
            "address" => Setting::where('name','address')->first('val')->val,
            "phone" => Setting::where('name','phone')->first('val')->val,
            "email" => Setting::where('name','email')->first('val')->val,
        ];
    }

    public function getService(){
        return Item::where('module','advertisement')
            ->where('position','advertisement')
            ->get([
                'image',
                'title',
                'description'
            ]);
    }

    public function getNew(){
        return Item::where('module','article')
            ->where('position','article')
            ->get([
                'image',
                'title',
                'slug'
            ]);
    }

    public function showBlog($slug)
    {

        $news = Item::where('slug',$slug)
            ->where('module','article')
            ->paginate(2);
       return view('fontend.blog.list',compact('news'));
    }
    public function showPage($slug){
        $services = Item::where('slug',$slug)->paginate(2);
        return view('fontend.page.detail',compact('services'));
    }

    public function blogDetail($id){
        $item = Item::find($id);
        return view('fontend.blog.detail_blog',compact('item'));
    }

    public function viewBlog(){
        $items = Item::all();
        return view('fontend.page.list',compact('items'));
    }
}

