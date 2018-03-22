<?php

namespace App\Http\Controllers;

use App\Http\Requests\addItemRequest;
use App\Http\Requests\updateItemRequest;
use App\Item;
use App\ListModel;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }


    public function create()
    {
        $lists = ListModel::all();
        return view('items.createItem',compact('lists'));
    }


    public function store(addItemRequest $request)
    {
        Item::create($request->only(['title', 'list_id']));

        return redirect()->route('items')->with(['success' => 'Item successfully created!']);
    }


    public function show($item)
    {
        $item = Item::find($item);
        $list = ListModel::find($item->list_id);
        return view('items.showItem', ['item'=>$item , 'list'=>$list]);
    }


    public function edit($item)
    {
        $item = Item::find($item);
        $list_old = ListModel::find($item->list_id);
        $lists = ListModel::where ('id' , '!=' , $list_old->id)->get();

        return view('items.updateItem', ['item'=>$item , 'lists'=>$lists , 'list_old'=>$list_old]);
    }


    public function update(updateItemRequest $request, $item)
    {
        $item = Item::find($item);

        $item->update($request->only(['title', 'list_id']));

        return redirect()->route('items')->with(['success' => 'Item Successfully Updated.']);
    }


    public function destroy($item)
    {
        Item::find($item)->delete();

        return redirect()->route('items')->with(['success' => 'Item Successfully deleted.']);
    }
}
