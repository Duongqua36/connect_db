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
        $module = $this->module;
        $groups = Group::all();
        $item = Item::with('groups')->findOrFail($request->segment(2),[
            'id',
            'title',
            'image',
            'status',
            'created_at'
        ]);
        return view('backend.page.edit',compact('item','groups','module'));
    }

    public function update(Request $request, Item $item){
        $item = Item::findOrFail($item->id);
        $item->update($request->all());
        return redirect()->route("pages.index");
    }

    public function destroy($id)
    {
        $item = Item::findOfFail($id);
        $item->groups()->detach();
        $item->delete();
        return redirect()->route('pages.index');
    }
    // Quicksearch Result
    public function quickSearch()
    {
        return view('layout.partials.extras._quick_search_result');
    }
}

