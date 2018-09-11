@extends('admin.master')

@section('title')
    Add Category | E-Commerce | Project
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Category</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit category info from below:
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('new-category')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" type="text" name="category_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Category Description</label>
                                    <textarea class="form-control" type="text" name="category_description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Publication Status</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publication_status" value="1" checked>Publish
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publication_status" value="0">Unpublish
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" name="btn" class="btn btn-success">Update</button>
                                <button type="reset" name="btn" class="btn btn-default">Reset</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <div class="text-info">{{Session::get('message')}}</div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection