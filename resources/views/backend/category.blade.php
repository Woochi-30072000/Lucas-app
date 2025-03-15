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
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search ">

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
                                    <th style="width: 3%"></th>
                                    <th style="width: 47%">Task</th>
                                    <th style="width: 20%">Task</th>
                                    <th style="width: 20%">Progress</th>
                                    <th style="width: 10%" class="text-center">Action</th>
                                </tr>
                                <tr>
                                    <td class="text-center">1.</td>
                                    <td>Update softwar pdate software</td>
                                    <td>Update software</td>

                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2.</td>

                                    <td>Clean database</td>
                                    <td>Update software</td>

                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>

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
