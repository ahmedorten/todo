@extends('layouts.master')

@section('content')
    <br><br>
    <form role="form" method="post" action="{{ route('updateItem',['item' => $item->id]) }}">

        <div class="form-group">
            <label>Item Title</label>
            <input class="form-control" type="text" name="title"
                   value="{{  Request::old('title') ? Request::old('title') : isset($item) ? $item->title : '' }}">
        </div>
        <div class="form-group">
            <label>Lists</label>
            <select class="form-control" name="list_id">
                <option value="{{ $list_old->id }}">
                    {{ $list_old->title }}
                </option>
                @foreach($lists as $list)
                    <option value="{{ $list->id }}">{{ $list->title }}</option>
                @endforeach
            </select>
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-info" >update item</button>

    </form>
@endsection