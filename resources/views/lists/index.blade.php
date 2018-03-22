@extends('layouts.master')
@section('css')
        <!-- DataTables CSS -->
        <link href="{{ asset('assets/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{{ asset('assets/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
@endsection


@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List All Lists
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <a  href="{{ route('createList') }}" class="btn btn-primary">Add List</a>
                    <br/><br/>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>List Title</th>
                            <th>Date</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lists as $key =>$list)
                        <tr class="odd gradeX">

                            <td>{{ ++$key }}</td>
                            <td>{{ $list->title }}</td>
                            <td>{{ $list->date }}</td>
                            <td>
                                <a class="btn btn-info"
                                   href="{{ route('showList',['list'=>$list->id]) }}">Show</a>
                                <a class="btn btn-primary"
                                   href="{{ route('editList' ,['list'=>$list->id] ) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('deleteList',['list' => $list->id]) }}">Delete</a>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection

@section('script')
        <!-- DataTables JavaScript -->
    <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection