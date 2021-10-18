<?php

namespace App\Http\Controllers;
use App\Models\Group;
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
        $items = Item::with('groups')->where('module','advertisement')->get();
      return view('backend.page.list',compact('items','module'));
    }

    public function create(){
        $groups = Group::all();
        return view('backend.page.edit',compact('groups'));
    }

    public function store(Request $request){

        $item = Item::create($request->all());
        $item->groups()->attach($request->group_id);
        return redirect()->route('pages.index');
    }

    public function edit(Request $request){
        $item = Item::all();
        $i = Item::with('groups')->findOrFail($request->segment(1));
        return view('backend.page.edit',compact('i','item'));
    }

    public function update(Request $request, Item $item){
        $item = Item::findOrFail($item->id);
        $item->update($request->all());
        return redirect()->route("pages.index");
    }

    public function destroy(Request $request, Item $item){
        $item = Item::findOfFail($item->id);
        $item->group()->detach($request->group_id);
        $item->delete();
        return redirect()->route('pages.index');
    }
    // Quicksearch Result
    public function quickSearch()
    {
        return view('layout.partials.extras._quick_search_result');
    }
}

