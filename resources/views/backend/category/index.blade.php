@extends('backend.component.master')
@section('title') Category Managers @stop

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 2.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Bordered Table</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right"
                                        placeholder="Search ">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        <a href="" class="btn btn-primary"><i class="fa fa-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table class="table table-striped ">
                                <tr>
                                    <th class="text-center" style="width: 3%">Id</th>
                                    <th style="width: 47%">Name</th>
                                    <th style="width: 20%">Status</th>
                                    {{-- <th style="width: 20%">Progress</th> --}}
                                    <th style="width: 10%" class="text-center">Action</th>
                                </tr>
                                @foreach ($db as $item)
                                    <tr>
                                        <td class="text-center">{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        {{-- <td>{{$item->status}}</td> --}}
                                        <td>{{$item->status == 0 ? 'Đang ẩn' : 'Hiển thị' }}</td>

                                        <td class="text-center">
                                            <a href="" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                            <a href="" class="btn btn-sm btn-danger"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach


                            </table>
                        </div>


                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
