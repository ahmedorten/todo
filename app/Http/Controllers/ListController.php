<?php

namespace App\Http\Controllers;

use App\Http\Requests\addListRequest;
use App\Http\Requests\updateListRequest;
use Illuminate\Http\Request;
use App\ListModel;

class ListController extends Controller
{
    public function index(){
        $lists = ListModel::all();
        return view('lists.index',compact('lists'));
    }

    public function create(){
        return view('lists.createList');
    }

    public function store(addListRequest $request)
    {
        ListModel::create($request->only(['title', 'date']));

        return redirect()->route('lists')->with(['success' => 'List successfully created!']);
    }

    public function show($list)
    {
        $list = ListModel::find($list);
        return view('Lists.showList', compact('list'));
    }
    
    
    public function edit($list)
    {
        $list = ListModel::find($list);

        return view('Lists.updateList', compact('list'));
    }

    
    public function update($list, updateListRequest $request)
    {
        $list = ListModel::find($list);

        $list->update($request->only(['title', 'date']));

        return redirect()->route('lists')->with(['success' => 'List Successfully Updated.']);
    }

    
    public function destroy($list)
    {
        ListModel::find($list)->delete();

        return redirect()->route('lists')->with(['success' => 'List Successfully deleted.']);
    }
}
