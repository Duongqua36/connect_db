<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Item;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class BlogController extends Controller
{

    public function showHome(){
        $items = Item::all();
        return view('fontend.home',compact('items'));
    }

    public function showBlog($slug)
    {
        $items = Item::all();
        $news = Item::where('slug',$slug)->paginate(2);
       return view('fontend.page.list',compact('news','items'));
    }

    public function blogDetail($id){
        $item = Item::find($id);
        return view('fontend.page.detail_blog',compact('item'));
    }

    public function viewBlog(){
        $items = Item::all();
        return view('fontend.page.list',compact('items'));
    }
}

