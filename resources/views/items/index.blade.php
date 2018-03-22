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
                    List All Items
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <a  href="{{ route('createItem') }}" class="btn btn-primary">Add Item</a>
                    <br/><br/>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Item Title</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key =>$item)
                        <tr class="odd gradeX">

                            <td>{{ ++$key }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <a class="btn btn-info"
                                   href="{{ route('showItem',['item'=>$item->id]) }}">Show</a>
                                <a class="btn btn-primary"
                                   href="{{ route('editItem' ,['item'=>$item->id] ) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('deleteItem',['item' => $item->id]) }}">Delete</a>
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