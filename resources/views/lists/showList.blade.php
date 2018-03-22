@extends('layouts.master')

@section('content')
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Show List
        </div>
        <div class="panel-body">
            <b>Title : </b> {{ $list->title }}<br/>
            <b>Date : </b> {{ $list->date }}<br/>
        </div>

    </div>

    <a  href="{{ route('lists') }}" class="btn btn-primary">Back</a>
@endsection