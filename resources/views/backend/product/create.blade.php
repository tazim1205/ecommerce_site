@extends('layouts.master')

@section('content')

<div class="container">

        @component('components.breadcrumb')
            @slot('title')
                @lang('product.create_product')
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
                    {{ route('product.index') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-dark
            @endslot
        @endcomponent
        
        <form class="row" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">@lang('product.add_product')</h4>
                        <div class="tab-content">
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-4 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('categorie.cat_name') : <span class="text-danger">*</span></label>
                                    <select class="form-control" name="cat_id" required id="cat_id" onchange="return GetSubCategorie()">
                                        <option value="">@lang('common.select_one') </option>
                                        @if($cat_name)
                                        @foreach($cat_name as $v)
                                        <option value="{{$v->id}}">@if($lang == 'en'){{$v->cat_name_en}}
                                            @elseif($lang == 'bn'){{$v->cat_name_bn}}@endif</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-md-4 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('sub_categorie.sub_cat_name') : <span class="text-danger">*</span></label>
                                    <select class="form-control" name="sub_cat_id" required id="sub_cat_id">
                                        <option value="">@lang('common.select_one') </option>
         
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('product.product_name_en') : <span class="text-danger">*</span></label>
                                    <input type="text" name="product_name_en" placeholder="@lang('product.product_name_en')" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('product.product_name_bn') : <span class="text-danger">*</span></label>
                                    <input type="text" name="product_name_bn" placeholder="@lang('product.product_name_bn')" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('product.regular_price') : <span class="text-danger">*</span></label>
                                    <input type="text" name="regular_price" placeholder="@lang('product.regular_price')" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('product.discount_amount') : <span class="text-danger">*</span></label>
                                    <input type="text" name="discount_amount" placeholder="@lang('product.discount_amount')" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('product.min_quantity') : <span class="text-danger">*</span></label>
                                    <input type="text" name="min_quantity" placeholder="@lang('product.min_quantity')" class="form-control" required>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('product.short_details') : </label>
                                    <textarea type="text" class="form-control" placeholder="@lang('product.short_details')" name="short_details"></textarea>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('product.description') : </label>
                                    <textarea type="text" class="form-control" placeholder="@lang('product.description')" name="description"></textarea>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('product.information') : </label>
                                    <textarea type="text" class="form-control" placeholder="@lang('product.information')" name="information"></textarea>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('size_setting.size_name') : <span class="text-danger">*</span></label>
                                    <div class="row">
                                        @if($size)
                                        @foreach($size as $v)
                                            <div class="checkbox form-check col-lg-3 col-md-4 col-sm-6">
                                                <label>
                                                    <input type="checkbox" name="size[]" value="{{$v->id}}">
                                                    @if($lang == 'en'){{$v->size_name_en}}
                                                    @elseif($lang == 'bn'){{$v->size_name_bn}}@endif
                                                </label>
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('color_setting.color_name') : <span class="text-danger">*</span></label>
                                    <div class="row">
                                        @if($color)
                                        @foreach($color as $v)
                                            <div class="checkbox form-check col-lg-3 col-md-4 col-sm-6">
                                                <label>
                                                    <input type="checkbox" name="color[]" value="{{$v->id}}">
                                                    @if($lang == 'en'){{$v->color_name_en}}
                                                    @elseif($lang == 'bn'){{$v->color_name_bn}}@endif
                                                </label>
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 mt-3">
                                    <label class="mb-2">@lang('product.image') : <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="image[]" multiple>
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


    <script>
        function GetSubCategorie()
        {
            let cat_id = $('#cat_id').val();
            if(cat_id != "")
            {
                $.ajax({
                    headers : {
                        'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                    },

                    url : '{{url('GetSubCategorie')}}/'+cat_id,

                    type : 'GET',
                    
                    success : function(data)
                    {
                        $('#sub_cat_id').html(data);
                    }
                })
            }
            else{
                let html = '';
                alert('Select Categorie');
                $('#sub_cat_id').html(html);
            }
        }
    </script>
@endsection