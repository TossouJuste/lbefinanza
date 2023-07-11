<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin SeedBank - @yield('page_titre')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="/assets/css/app.min.css" rel="stylesheet">
    <style>
        /* .active{
            background-color: coral;
        } */
    </style>
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            @include('admin_dashbord.components.nav')
                
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('admin_dashbord.components.sidebar')
            
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
               @yield('page_container')
                <!-- Content Wrapper END -->

                <!-- Footer START -->
            @include('admin_dashbord.components.footer')
                
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
            @include('admin_dashbord.components.modals')
           </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="/assets/js/vendors.min.js"></script>
    <!-- page js -->
    @yield('javascript')
    <script src="/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets/js/pages/dashboard-default.js"></script>

    <!-- Core JS -->
    <script src="/assets/js/app.min.js"></script>

</body>

</html>