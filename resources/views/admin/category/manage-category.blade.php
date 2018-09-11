@extends('admin.master')

@section('title')
    Manage Category | E-Commerce | Project
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Category</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    This is to edit or delete category info.
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Category Names</th>
                            <th>Category Descriptions</th>
                            <th>Pubilication Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($categories as $category)
                        <tr class="odd gradeX">
                            <td>{{$i++}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_description}}</td>
                            <td>{{$category->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('edit-category',['id' => $category->id])}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('delete-category',['id' => $category->id])}}">Delete</a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <div class="text-danger">{{Session::get('message')}}</div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection