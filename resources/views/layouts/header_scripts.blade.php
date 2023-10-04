﻿<link href="{{asset('assets')}}/css/style.css" type="text/css" rel="stylesheet">
 <!-- Quill css -->
    <link href="{{asset('assets')}}/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/css/vendor/quill.bubble.css" rel="stylesheet" type="text/css">

    <!-- SimpleMDE css -->
    <link href="{{asset('assets')}}/css/vendor/simplemde.min.css" rel="stylesheet" type="text/css" />
<!-- third party css -->
<link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
<!-- third party css end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<!-- App css -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
<link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- select2 cdn css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
    integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- select2 cdn css end -->

<link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<style>
    .content-page {
        padding: 15px 12px 65px !important;
    }
    </style>
    @if(config('app.locale') == 'bn')
    <style>
    body
    {
        font-family: 'Hind Siliguri', sans-serif;
    }
</style>
@endif