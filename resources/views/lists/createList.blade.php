@extends('layouts.master')

@section('content')
    <br><br>
<form role="form" method="post" action="{{ route('storeList') }}">

    <div class="form-group">
        <label>List Title</label>
        <input class="form-control" type="text" name="title" placeholder="Enter List Title">
    </div>
    <div class="form-group">
        <label>Date</label>
        <input class="form-control" type="date" name="date"  placeholder="Enter date">
    </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-info" >Create List</button>

</form>
@endsection