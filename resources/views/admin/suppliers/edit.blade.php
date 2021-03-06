@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                编辑供应商
                <small>控制面板</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/index')}}"><i class="fa fa-dashboard"></i> 概览</a></li>
                <li><a href="{{url('/suppliers')}}">供应商管理</a></li>
                <li class="active">编辑供应商</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @include('flash::message')
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">编辑</h3>
                        </div>
                        <form method="POST" action="{{url('/suppliers/'.$supplier->id)}}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input id="company_name" name="company_name" type="text" class="form-control"
                                           value="{{$supplier->company_name}}"
                                           placeholder="公司名称">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input id="company_phone" name="company_phone" type="text" class="form-control"
                                           value="{{$supplier->company_phone}}"
                                           placeholder="联系电话">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                    <input id="contact_name" name="contact_name" type="text" class="form-control"
                                           value="{{$supplier->contact_name}}"
                                           placeholder="联系人姓名">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                    <input id="mobile_phone" name="mobile_phone" type="text" class="form-control"
                                           value="{{$supplier->mobile_phone}}"
                                           placeholder="联系人电话">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="email" name="email" type="email" class="form-control"
                                           value="{{$supplier->email}}"
                                           placeholder="邮箱">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input id="address" name="address" type="text" class="form-control"
                                           value="{{$supplier->address}}"
                                           placeholder="地址">
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea id="description" name="description" class="form-control"
                                              placeholder="公司简介" rows="5">{{$supplier->description}}</textarea>
                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="button" class="btn btn-danger " data-toggle="modal"
                                        data-target="#deleteModal">
                                    删除
                                </button>
                                <button type="submit" class="btn btn-info pull-right">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div id="deleteModal" class="modal fade modal-danger">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">删除</h4>
                        </div>
                        <div class="modal-body">
                            <p>确定要删除该供应商？</p>
                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="{{route('suppliers.destroy',$supplier->id)}}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">关闭</button>
                                <button type="submit" class="btn btn-outline">确定</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </section>
        <!-- /.section -->
    </div>
@stop