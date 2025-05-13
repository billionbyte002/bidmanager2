<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{env('APP_NAME')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/cropped-Bidmanager-180x180.png')}}">

@yield('style')

</head>

<body class="page-template page-template-elementor_header_footer page page-id-890 wp-custom-logo wp-embed-responsive theme-lexend woocommerce-no-js no-sidebar uni-body panel bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-200 overflow-x-hidden elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-890">

@include('pages.include.topbar')

@yield('main_content')

@include('pages.include.footer')

@yield('js')

</body>
</html>
