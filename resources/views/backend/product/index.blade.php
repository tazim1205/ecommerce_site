@extends('layouts.master')

@push('header_styles')
    <!-- third party css -->
    <link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <!-- third party css end -->
@endpush

@section('content')
    <div class="container">

        @component('components.breadcrumb')
            @slot('title')
                @lang('product.view_product')
            @endslot
            @slot('breadcrumb1')
                @lang('common.dashboard')
            @endslot
            @slot('breadcrumb1_link')
                {{ route('dashboard') }}
            @endslot
            @if (\App\Traits\RolePermissionTrait::checkRoleHasPermission('role', 'create'))
                @slot('action_button1')
                    @lang('common.add_new')
                @endslot
                @slot('action_button1_link')
                    {{ route('product.create') }}
                @endslot
            @endif
            @slot('action_button1_class')
                btn-primary
            @endslot
        @endcomponent

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">@lang('product.view_product')</h4>
                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#users-tab-all" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    @lang('common.all')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#users-tab-deleted" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    @lang('common.deleted_list')
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="users-tab-all">
                                <table class="table table-striped dt-responsive nowrap w-100" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>@lang('common.sl')</th>
                                            <th>@lang('categorie.cat_name')</th>
                                            <th>@lang('sub_categorie.sub_cat_name')</th>
                                            <th>@lang('product.product_name')</th>
                                            <th>@lang('product.regular_price')</th>
                                            <th>@lang('product.discount_amount')</th>
                                            <th>@lang('product.status')</th>
                                            <th>@lang('common.action')</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div> <!-- end all-->

                            <div class="tab-pane" id="users-tab-deleted">
                                @php
                                use App\Models\product;
                                $trashed=  product::onlyTrashed()->get();
                                $sl=1;
                                @endphp

                                <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>@lang('common.sl')</th>
                                            <th>@lang('categorie.cat_name')</th>
                                            <th>@lang('sub_categorie.sub_cat_name')</th>
                                            <th>@lang('product.product_name')</th>
                                            <th>@lang('product.regular_price')</th>
                                            <th>@lang('product.discount_amount')</th>
                                            <th>@lang('product.image')</th>
                                            <th>@lang('common.action')</th>
                                        </tr>
                                    </thead>

                                    <tbody class="table-border-bottom-0">
                                        @if($trashed)
                                        @foreach ($trashed as $v)
                                        <tr>
                                            <td>{{$sl++}}</td>
                                            <td>{{$v->from}}</td>
                                            <td>{{$v->to}}</td>
                                            <td>
                                                {{$v->order_by}}
                                            </td>
                                            <td>
                                                <a href="{{ url('priceRange_restore') }}/{{ $v->id }}" class="btn btn-sm btn-info">@lang('common.restore')</a>
                                                <a href="{{ url('priceRange_delete') }}/{{ $v->id }}" onClick="return confirm('Are You Sure?')" class="btn btn-sm btn-danger">@lang('common.permenantly_delete')</a>  
                                            </td> 
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div> <!-- end deleted-->
                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('product.index') }}",
                columns: [
                    {data: 'sl', name: 'sl'},
                    {data: 'cat_id', name: 'cat_id'},
                    {data: 'sub_cat_id', name: 'sub_cat_id'},
                    {data: 'product_name', name: 'product_name'},
                    {data: 'regular_price', name: 'regular_price'},
                    {data: 'discount_amount', name: 'discount_amount'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>

  <script>
        function priceRangeStatusChange(id)
        {
            // alert(id);

            if(id > 0)
            {
                var message = @json( __('product.status_message') );
                var message_type = @json(__('common.success'));
                $.ajax({
                    header : {
                        'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                    },

                    url : '{{ url('priceRangeStatusChange') }}/'+id,

                    type : 'GET',

                    success : function(data)
                    {
                        toastr.success(message, message_type);
                    }
                });
            }
        }
  </script>
@endsection

@push('footer_scripts')
    <!-- third party js -->
    <script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.select.min.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
    <!-- end demo js-->


    @include('components.delete_script')
@endpush
