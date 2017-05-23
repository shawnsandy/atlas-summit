@extends('layouts.dashboard')
@section('title', ':package_name')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{ count($users) }}</div>
                            <div class="text-muted">Registered Users</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-orange panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{ count($rooms) }}</div>
                            <div class="text-muted">Total Rooms</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{ count($sponsors) }}</div>
                            <div class="text-muted">Total Sponsors</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-red panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{ count($workshops) }}</div>
                            <div class="text-muted">Total Workshops</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Site Traffic Overview</div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>New Orders</h4>
                        <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Comments</h4>
                        <div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>New Users</h4>
                        <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Visitors</h4>
                        <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@endsection