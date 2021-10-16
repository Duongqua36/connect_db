<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $module = '';
    public function __construct(Request $request)
    {
        $this->module = $request->segment('1');
    }

    public function index()
    {
        $module = $this->module;
        $items = Item::where('module','advertisement')->get();
      return view('backend.page.list',compact('items','module'));
    }

    public function create(){
        $item = Item::all();
        return view('backend.page.edit',compact($item));
    }

    public function store(Request $request){
        $item = Item::create($request->all());
        $item->groups()->attach($request->group_id);
        return redirect()->route('blogs.index');
    }
    // Quicksearch Result
    public function quickSearch()
    {
        return view('layout.partials.extras._quick_search_result');
    }
}
