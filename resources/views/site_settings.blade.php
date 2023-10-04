@extends('layouts.master')

@section('content')

<div class="container">

        @component('components.breadcrumb')
            @slot('title')
                @lang('settings.view_settings')
            @endslot
            @slot('breadcrumb1')
                @lang('common.dashboard')
            @endslot
            @slot('breadcrumb1_link')
                {{ route('dashboard') }}
            @endslot
        @endcomponent
  
            <form class="row" method="post" action="{{route('site_settings.store')}}" enctype="multipart/form-data">
            @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="header-title">@lang('settings.view_settings')</h4>
                        <div class="tab-content">
                            <div  class="form-group col-sm-6 col-md-8 col-lg-6 mt-3" style="margin-left: 25%;">
                                <img src="{{ asset('assets/images/site_settings/')}}/{{ $data->image }}" width="50%" height="50%" class="mb-3">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="row">
                                <div  class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('common.name') :</label>
                                    <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                                </div>
                                <div  class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('common.title') :</label>
                                    <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 mt-3">
                                    <label class="mb-2">@lang('common.phone') :</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $data->phone }}">
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 mt-3">
                                    <label class="mb-2">@lang('common.email') :</label>
                                    <input type="text" name="email" class="form-control" value="{{ $data->email }}">
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-4 mt-3">
                                    <label class="mb-2">@lang('settings.established') :</label>
                                    <input type="text" name="established" class="form-control" value="{{ $data->established }}">
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('settings.google_map') :</label>
                                    <textarea class="form-control" name="google_map" cols="50" rows="3">{{ $data->google_map }}</textarea>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('settings.youtube_video') :</label>
                                    <textarea class="form-control" name="youtube_vedio" cols="50" rows="3">{{ $data->youtube_vedio }}</textarea>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label class="mb-2">@lang('settings.address') :</label>
                                    <textarea class="form-control w-100" name="address" rows="4">{{ $data->address }}</textarea>
                                    <!-- <textarea id="snow-editor" class="form-control mb-2" name="address" rows="3" value="{{ $data->address }}"></textarea> -->
                                </div>                        
                                <div class="form-group" style="margin-top: 4%;">
                                    <button type="update" class="btn btn-success btn-sm button">@lang('common.update')</button>
                                </div>
                            </div>
                        </div> <!-- end tab-content-->
                    </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </form>
    </div>

@endsection