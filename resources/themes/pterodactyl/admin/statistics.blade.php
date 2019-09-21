@extends('layouts.admin')
@include('partials/admin.settings.nav', ['activeTab' => 'basic'])

@section('title')
    Statistics Overview
@endsection

@section('content-header')
    <h1>Statistics Overview<small>Monitor your panel usage.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">Statistics</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-md-4">
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-server"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">伺服器數量</span>
                <span class="info-box-number">{{ count($servers) }}</span>
            </div>
        </div>
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="ion ion-ios-barcode-outline"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">已使用記憶體(MegaByte)</span>
                <span class="info-box-number">{{ $totalServerRam }} MB</span>
            </div>
        </div>
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="ion ion-stats-bars"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">已使用容量(MegaByte)</span>
                <span class="info-box-number">{{ $totalServerDisk }} MB</span>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                Servers
            </div>
            <div class="box-body">
                <div class="col-xs-12 col-md-6">
                    <canvas id="servers_chart" width="100%" height="50"></canvas>
                </div>
                <div class="col-xs-12 col-md-6">
                    <canvas id="status_chart" width="100%" height="50"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-4">
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="ion ion-ios-barcode-outline"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">總記憶體(MegaByte)</span>
                <span class="info-box-number">{{ $totalNodeRam }} MB</span>
            </div>
        </div>
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="ion ion-stats-bars"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">總容量(MegaByte)</span>
                <span class="info-box-number">{{ $totalNodeDisk }} MB</span>
            </div>
        </div>
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-location-arrow"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">虛擬IP分配量</span>
                <span class="info-box-number">{{ $totalAllocations }}</span>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                Nodes
            </div>
            <div class="box-body">
                <div class="col-xs-12 col-md-6">
                    <canvas id="ram_chart" width="100%" height="50"></canvas>
                </div>
                <div class="col-xs-12 col-md-6">
                    <canvas id="disk_chart" width="100%" height="50"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-3">
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-gamepad"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">伺服器總樣式</span>
                <span class="info-box-number">{{ $eggsCount }}</span>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-3">
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-users"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">使用者數量</span>
                <span class="info-box-number">{{ $usersCount }}</span>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-3">
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-server"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">節點數量</span>
                <span class="info-box-number">{{ count($nodes) }}</span>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-3">
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-database"></i></span>
            <div class="info-box-content number-info-box-content">
                <span class="info-box-text">資料庫數量</span>
                <span class="info-box-number">{{ $databasesCount }}</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
    @parent
    {!! Theme::js('vendor/chartjs/chart.min.js') !!}
    {!! Theme::js('js/admin/statistics.js') !!}
@endsection