@extends('layouts.master')

@section('content')
    <br><br>
    <form role="form" method="post" action="{{ route('updateList',['list' => $list->id]) }}">

        <div class="form-group">
            <label>List Title</label>
            <input class="form-control" type="text" name="title"
                   value="{{  Request::old('title') ? Request::old('title') : isset($list) ? $list->title : '' }}">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input class="form-control" type="date" name="date"
                   value="{{  Request::old('date') ? Request::old('date') : isset($list) ? $list->date : '' }}">
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-info" >update List</button>

    </form>
@endsection