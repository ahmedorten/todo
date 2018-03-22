@extends('layouts.master')

@section('content')
    <br><br>
<form role="form" method="post" action="{{ route('storeItem') }}">

    <div class="form-group">
        <label>Item Title</label>
        <input class="form-control" type="text" name="title" placeholder="Enter Item Title">
    </div>
    <div class="form-group">
        <label>Lists</label>
        <select class="form-control" name="list_id">
            <option value=" "></option>
            @foreach($lists as $list)

            <option value="{{ $list->id }}">{{ $list->title }}</option>
            @endforeach
        </select>
    </div>


    {{ csrf_field() }}
    <button type="submit" class="btn btn-info" >Create Item</button>

</form>
@endsection