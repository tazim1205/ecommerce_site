@extends('layouts.master')

@section('content')

<div class="container">

        @component('components.breadcrumb')
            @slot('title')
                @lang('color_setting.edit_color')
            @endslot
            @slot('breadcrumb1')
                @lang('common.dashboard')
            @endslot
            @slot('breadcrumb1_link')
                {{ route('dashboard') }}
            @endslot
            @if (\App\Traits\RolePermissionTrait::checkRoleHasPermission('role', 'create'))
                @slot('action_button1')
                    @lang('common.view')
                @endslot
                @slot('action_button1_link')
                    {{ route('color_setting.index') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-dark
            @endslot
        @endcomponent
        
        <form class="row" method="post" action="{{route('color_setting.update',$data->id)}}">
            @csrf
            @method('PUT')
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">@lang('color_setting.edit_color')</h4>
                        <div class="tab-content">
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('color_setting.color_name_en') : <span class="text-danger">*</span></label>
                                    <input type="text" name="color_name_en" placeholder="@lang('color_setting.color_name_en')" class="form-control" value="{{$data->color_name_en}}" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('color_setting.color_name_bn') : <span class="text-danger">*</span></label>
                                    <input type="text" name="color_name_bn" placeholder="@lang('color_setting.color_name_bn')" class="form-control" value="{{$data->color_name_bn}}" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('color_setting.order_by') : <span class="text-danger">*</span></label>
                                    <input type="text" name="order_by" placeholder="@lang('color_setting.order_by')" class="form-control" value="{{$data->order_by}}" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('color_setting.status') : <span class="text-danger">*</span></label>
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="status" id="active" value="1" checked @if($data->status == 1) checked @endif>
                                        <label class="form-check-label" for="active">@lang('common.active')</label>
                                    </div>
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="status" id="inactive" value="0" @if($data->status == 0) checked @endif>
                                        <label class="form-check-label" for="inactive">@lang('common.inactive')</label>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-success btn-sm button">@lang('common.submit')</button>
                                </div>
                            </div>
                        </div> <!-- end tab-content-->
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </form>
    </div>

@endsection