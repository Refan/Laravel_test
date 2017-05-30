<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
    
    {!!Html::style('/assets/css/bootstrap.css')!!}
    {!!Html::style('/assets/css/font-awesome.css')!!}
    {!!Html::style('/assets/js/morris/morris-0.4.3.min.css')!!}
    {!!Html::style('/assets/css/custom-styles.css')!!}
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    @yield('style')
</head>

<body>
    <div id="wrapper">
        @include('include.header')
        <!--/. NAV TOP  -->
        @include('include.sidebar')
        <!-- /. NAV SIDE  -->

        @yield('content')
    </div>
    <!-- /. WRAPPER  -->

    <!-- JS Scripts-->
    {!!Html::script('/assets/js/jquery-1.10.2.js')!!}
    {!!Html::script('/assets/js/bootstrap.min.js')!!}
    {!!Html::script('/assets/js/jquery.metisMenu.js')!!}
    {!!Html::script('/assets/js/morris/raphael-2.1.0.min.js')!!}
    {!!Html::script('/assets/js/morris/morris.js')!!}
    {!!Html::script('/assets/js/custom-scripts.js')!!}
    @yield('script')
</body>

</html>