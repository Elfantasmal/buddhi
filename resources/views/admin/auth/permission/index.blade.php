@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                权限列表
                <small>控制面板</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> 概览</a></li>
                <li><a href="{{route('permissions.index')}}">权限管理</a></li>
                <li class="active">权限列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">权限列表</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row form-inline">
                                <div class="col-md-6">
                                    <div class="margin">
                                        <a href="{{route('permissions.create')}}">
                                            <button type="button" class="btn btn-flat btn-info ">
                                                创建
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group pull-right margin">
                                        <input id="keyword" type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button id="search-btn" type="button" class="btn btn-info btn-flat">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th class="col-md-2">名称</th>
                                        <th class="col-md-2">别名</th>
                                        <th class="col-md-2">简介</th>
                                        <th class="col-md-2">创建时间</th>
                                        <th class="col-md-2">更新时间</th>
                                        <th class="col-md-2">操作</th>
                                    </tr>
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{$permission->id}}</td>
                                            <td>{{$permission->name}}</td>
                                            <td>{{$permission->display_name}}</td>
                                            <td>{{$permission->description}}</td>
                                            <td>{{$permission->created_at}}</td>
                                            <td>{{$permission->updated_at}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('permissions.show', $permission->id)}}">
                                                        <button type="button" class="btn btn-info ">
                                                            <i class="fa fa-book"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{route('permissions.edit', $permission->id)}}">
                                                        <button type="button" class="btn btn-info ">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            {{ $permissions->links() }}
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.section -->
    </div>
@stop
@section('script')
    <script>
        $(function () {
            $('#search-btn').on('click', function (event) {
                var keyword = $('#keyword').val();
                if (keyword != '') {
                    location.href = '{{url('/permissions/search')}}' + '/' + keyword;
                } else {
                }
            })
        });
    </script>
@stop