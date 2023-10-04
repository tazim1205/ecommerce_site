<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        @php use App\Models\site_settings; $data= site_settings::get(); @endphp
        @if($data)
        @foreach($data as $v) 
        <title>{{ @$title }} {{ $v->name }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin panel which can be used to manage huge system." name="description">
        <meta content="RDO Cumilla" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/site_settings/')}}/{{ $v->image }}">
        @endforeach
        @endif

        @include('layouts.header_scripts')

        @stack('header_styles')

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"default","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":true,"darkMode":true, "showRightSidebarOnStart": false}'>

        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">

            @yield('content')

        </div>

        <footer class="footer footer-alt">
            <div class="col-12 text-center">
                <p class="text-muted"><script>document.write(new Date().getFullYear())</script> <span class="copyright">Developed by <a href="http://sbit.com.bd/" target="blank">SKILL BASED INFORMATION TECHNOLOGY</a></span></p>
            </div> <!-- end col -->
        </footer>

        @include('layouts.footer_scripts')

    </body>
</html>
