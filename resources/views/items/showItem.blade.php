@extends('layouts.master')

@section('content')
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Show Item
        </div>
        <div class="panel-body">
            <b>Title : </b> {{ $item->title }}<br/>
            <b>List : </b> {{ $list->title }}<br/>
        </div>

    </div>

    <a  href="{{ route('items') }}" class="btn btn-primary">Back</a>
@endsection