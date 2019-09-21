{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
@extends('layouts.admin')

@section('title')
    Administration
@endsection

@section('content-header')
    <h1>面板總覽<small>快速瀏覽您的面板</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">Index</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box
            @if($version->isLatestPanel())
                box-success
            @else
                box-danger
            @endif
        ">
            <div class="box-header with-border">
                <h3 class="box-title">系統資訊</h3>
            </div>
            <div class="box-body">
                @if ($version->isLatestPanel())
                    目前面板版本為 <code>{{ config('app.version') }}</code>. 面板為最新版本!
                @else
                    目前面板版本為 <code>{{ config('app.version') }}</code> 面板最新版本為 <a href="https://github.com/Pterodactyl/Panel/releases/v{{ $version->getPanel() }}" target="_blank"><code>{{ $version->getPanel() }}</code></a>. <strong>請盡快更新!</strong>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="{{ $version->getDiscord() }}" target="_blank"><button class="btn btn-warning" style="width:100%;"><i class="fa fa-fw fa-support"></i> 尋求幫助<small> (Discord)</small></button></a>
    </div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://docs.pterodactyl.io" target="_blank"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-link"></i> 官方文件</button></a>
    </div>
    <div class="clearfix visible-xs-block">&nbsp;</div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://github.com/Pterodactyl/Panel" target="_blank"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-support"></i> Github</button></a>
    </div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://donorbox.org/pterodactyl" target="_blank"><button class="btn btn-success" style="width:100%;"><i class="fa fa-fw fa-money"></i> 幫助翼龍<small> (Pterodactyl Panel)</small></button></a>
    </div>
</div>
@endsection
