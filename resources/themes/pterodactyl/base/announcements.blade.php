{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
@extends('layouts.master')

@section('title')
    @lang('base.index.header')
@endsection

@section('content-header')
    <h1>Announcements<small></small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('index') }}">@lang('strings.home')</a></li>
        <li class="active">Announcements</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        @if (count($announcements) > 0)
            @foreach($announcements as $announcement)
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">{{$announcement->title}}</h3>
                            <div class="box-tools">
                                <p class="text-muted">{{$announcement->updated_at}}</p>
                            </div>
                        </div>
                        <div class="box-body">
                            {!! $announcement->body !!}
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-xs-12">
                <div class="text-center">
                    {{ $announcements->links() }}
                </div>
            </div>
        @else
            <div class="col-xs-12">
                <div class="alert alert-info alert-dismissable" role="alert">
                    No announcements!
                </div>
            </div>
        @endif
    </div>
@endsection

@section('footer-scripts')
    @parent
@endsection
