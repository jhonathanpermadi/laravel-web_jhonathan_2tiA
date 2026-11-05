```php
<!--
=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================
* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg
* Designed and coded by Themesberg
=========================================================
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Primary Meta Tags -->
    <title>Volt - Free Bootstrap 5 Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">

    {{-- Start CSS --}}
     @include('layouts.admin.css')
    {{-- End CSS --}}

</head>

<body>

    {{-- Start Sidebar --}}
    @include('layouts.admin.sidebar')
    {{-- End Sidebar --}}

    <main class="content">

        {{-- Start Header --}}
        @include('layouts.admin.header')
        {{-- End Header --}}

        {{-- Start Main Content --}}
        @yield('content')
        {{-- End Main Content --}}

        {{-- Start Footer --}}
        @include('layouts.admin.footer')
        {{-- End Footer --}}

    </main>

    {{-- Start JS --}}
    @include('layouts.admin.js')
    {{-- End JS --}}

</body>

</html>
```
