<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Table;
use function Sodium\compare;
class ItemController extends Controller
{
    protected $module = '';

    public function __construct(Request $request)
    {
        $this->module = $request->segment(1);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module = $this->module;
//        $items = Item::where('module',$module)->get();
        $items = Item::with('groups')->where('module','article')->get();
        return view('backend.item.list', compact('items', 'module'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        $items = Item::all();
        return view('backend.item.edit', compact('items','groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item =  Item::create($request->all());
        $item->groups()->attach($request->group_id);
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $items = Item::all();
        return view('fontend.home', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $groups = Group::all();
        $item = Item::with('groups')
            ->findOrFail($request->segment(1));
        return view('backend.item.edit', compact('item','groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item = Item::findOrFail($item->id);
        $item->update($request->all());
        return redirect()->route("items.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Item $item)
    {
        $item = Item::findOrFail($item->id);
        $item->groups()->detach($request->group_id);
        $item->delete();
        return redirect()->route('items.index');
    }

    public function search(Request $request)
    {
        $output = '';
        $items = Item::where('module', 'LIKE', '%' . $request->search . '%')->get();
        foreach ($items as $item) {
            $output .= ' <tr>
                    <td>' . $item->id . '</td>
                    <td>' . $item->title . '</td>
                    <td>' . $item->module . '</td>
                    <td>' . $item->status . '</td>
                   <td><img src="' . $item->image . '" width="60px" height="60px"></td>
                  <td>
                    <a href="' . route('items.edit', $item->id) . '" class="btn btn-hover-white" style="width: 48px"><i class="fas fa-user-edit"></i></a>
                    <form action="' . route('items.destroy', $item) . '" method="post" >
                            <button type="submit" class="btn btn-hover-white"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                    </tr>';
        }
        return response()->json($output);
    }


    public function searchItem(Request $request){
        $module = $this->module;
        $query = Item::query();
        if ($request->id){
            $query->where('id',$request->id);
        }
        if ($request->title){
            $query->where('title','LIKE','%'.$request->title.'%');
        }

         $items = $query->get();
        $old_data = $request->all();
        $groups = Group::where('module',$this->module.'-list');
        return view('backend.item.list',compact('old_data','items'));
    }


    public function changeLanguage($language){
     Session::put('website_language',$language);
     return redirect()->back();
    }
}
