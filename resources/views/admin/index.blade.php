@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                概览
                <small>控制面板</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard active"></i>概览</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$count['user_count']}}</h3>

                            <p>用户管理</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{route('users.index')}}" class="small-box-footer">
                            查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$count['commodity_count']}}</h3>

                            <p>商品管理</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('commodities.index')}}" class="small-box-footer">
                            查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$count['customer_count']}}</h3>

                            <p>客户管理</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-briefcase"></i>
                        </div>
                        <a href="{{route('customers.index')}}" class="small-box-footer">
                            查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{$count['supplier_count']}}</h3>

                            <p>供应商管理</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-globe"></i>
                        </div>
                        <a href="{{route('suppliers.index')}}" class="small-box-footer">
                            查看详情 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">月度销售报告</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-box-tool dropdown-toggle"
                                            data-toggle="dropdown">
                                        <i class="fa fa-wrench"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" style="height: 86px; width: 500px;" height="86"
                                                width="500"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>库存预警</strong>
                                    </p>

                                    <div class="progress-group">
                                        <span class="progress-text">Add Products to Cart</span>
                                        <span class="progress-number"><b>160</b>/200</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Complete Purchase</span>
                                        <span class="progress-number"><b>310</b>/400</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Visit Premium Page</span>
                                        <span class="progress-number"><b>480</b>/800</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Send Inquiries</span>
                                        <span class="progress-number"><b>250</b>/500</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                        <h5 class="description-header">$35,210.43</h5>
                                        <span class="description-text">TOTAL REVENUE</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-yellow"><i
                                                    class="fa fa-caret-left"></i> 0%</span>
                                        <h5 class="description-header">$10,390.90</h5>
                                        <span class="description-text">TOTAL COST</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                        <h5 class="description-header">$24,813.53</h5>
                                        <span class="description-text">TOTAL PROFIT</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                        <h5 class="description-header">1200</h5>
                                        <span class="description-text">GOAL COMPLETIONS</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">最新订单</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: block;">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>订单ID</th>
                                        <th>商品</th>
                                        <th>状态</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>Call of Duty IV</td>
                                        <td><span class="label label-success">在途</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="label label-warning">待定</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>iPhone 6 Plus</td>
                                        <td><span class="label label-danger">运输</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="label label-info">处理</span></td>

                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="label label-warning">待定</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>iPhone 6 Plus</td>
                                        <td><span class="label label-danger">交货</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>Call of Duty IV</td>
                                        <td><span class="label label-success">在途</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix" style="display: block;">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">创建订单</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">查看所有订单</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">最近添加商品</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                @foreach($recently_added_commodities as $commodity)
                                    <li class="item">
                                        <div class=>
                                            <a href="{{ route('commodities.show', $commodity->id) }}"
                                               class="product-title">
                                                {{ $commodity->name }}
                                                <span class="label label-success pull-right">￥{{ $commodity->sales_price }}</span>
                                            </a>
                                            <span class="product-description">{{ $commodity->supplier->company_name }}</span>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                @endforeach
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="{{ route('commodities.index') }}">查看所有商品</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@stop