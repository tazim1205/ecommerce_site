@extends('layouts.master')

@section('content')

@php
  $totaladmin = DB::table("users")->count();
@endphp

    <!-- Start Content-->
    <div class="container-fluid">

        @include('components.error_messages')
        @component('components.breadcrumb')
            @slot('breadcrumb1')
                @lang('common.dashboard')
            @endslot
            @slot('breadcrumb1_link')
                {{ route('dashboard') }}
            @endslot
        @endcomponent

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="headings-preview">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card text-white bg-info">
                                                <div class="card-body">
                                                <h4 class="fw-normal mt-0" title="Number of Customers">@lang('common.total_admin')</h4>
                                                <h3 class="mt-3 mb-3">{{ $totaladmin }}</h3>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->

                                        <div class="col-md-4">
                                            <div class="card text-white bg-warning">
                                                <div class="card-body">
                                                    <blockquote class="card-bodyquote">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                            erat a ante.</p>
                                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                        </footer>
                                                    </blockquote>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->

                                        <div class="col-md-4">
                                            <div class="card text-white bg-danger">
                                                <div class="card-body">
                                                    <blockquote class="card-bodyquote">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                            erat a ante.</p>
                                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                        </footer>
                                                    </blockquote>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->
                                    </div>
                                    <!-- end row -->
                    
                                </div> <!-- container -->

                                <div class="clearfix"></div>                                  
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container -->
@endsection

@push('footer_scripts')
    <!-- third party js -->
    <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('assets/js/pages/demo.dashboard.js') }}"></script>
    <!-- end demo js-->
@endpush
