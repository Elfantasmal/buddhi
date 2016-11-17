@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                商品列表
                <small>控制面板</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/index')}}"><i class="fa fa-dashboard"></i> 概览</a></li>
                <li><a href="{{url('/commodities')}}">商品管理</a></li>
                <li class="active">商品列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">商品列表</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th>商品名称</th>
                                        <th>销售价格</th>
                                        <th>采购价格</th>
                                        <th>单位</th>
                                        <th>所属供应商</th>
                                        <th>创建时间</th>
                                        <th>更新时间</th>
                                        <th>操作</th>
                                    </tr>
                                    @foreach($commodities as $commodity)
                                        <tr>
                                            <td>{{$commodity->id}}</td>
                                            <td>{{$commodity->name}}</td>
                                            <td>{{$commodity->sales_price}}</td>
                                            <td>{{$commodity->purchase_price}}</td>
                                            <td>{{$commodity->unit}}</td>
                                            <td>{{$commodity->supplier->company_name}}</td>
                                            <td>{{$commodity->created_at}}</td>
                                            <td>{{$commodity->updated_at}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{url('/commodities/'.$commodity->id)}}">
                                                        <button type="button" class="btn btn-info ">
                                                            <i class="fa fa-book"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{url('/commodities/'.$commodity->id.'/edit')}}">
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
                            {{ $commodities->links() }}
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