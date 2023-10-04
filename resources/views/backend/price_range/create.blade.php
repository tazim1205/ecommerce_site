@extends('layouts.master')

@section('content')

<div class="container">

        @component('components.breadcrumb')
            @slot('title')
                @lang('price_range.create_price_range')
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
                    {{ route('price_range.index') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-dark
            @endslot
        @endcomponent
        
        <form class="row" method="post" action="{{route('price_range.store')}}">
            @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">@lang('price_range.add_price_range')</h4>
                        <div class="tab-content">
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('price_range.from') : <span class="text-danger">*</span></label>
                                    <input type="text" name="from" placeholder="@lang('price_range.from')" class="form-control" value="{{ old('from') }}" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('price_range.to') : <span class="text-danger">*</span></label>
                                    <input type="text" name="to" placeholder="@lang('price_range.to')" class="form-control" value="{{ old('to') }}" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('price_range.order_by') : <span class="text-danger">*</span></label>
                                    <input type="text" name="order_by" placeholder="@lang('price_range.order_by')" class="form-control" value="{{ old('order_by') }}" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('price_range.status') : <span class="text-danger">*</span></label>
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="status" id="active" value="1" checked>
                                        <label class="form-check-label" for="active">@lang('common.active')</label>
                                    </div>
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="status" id="inactive" value="0">
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