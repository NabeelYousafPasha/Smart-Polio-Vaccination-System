<!DOCTYPE html>
<html lang="en">
<head>
	@include('dashboard.partials.header')
	@yield('stylesheets')
    <link href="{{ asset('backend-assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('backend-assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        @include('dashboard.partials.sidebar')
    	<div id="page-wrapper" class="gray-bg dashbard-1">
            @include('dashboard.partials.navbar')

            @include('dashboard.partials.message')

            @include('dashboard.partials.error')

            @yield('content')

            @include('dashboard.partials.credits')
    	</div>
    </div>
    @include('dashboard.partials.footer')
    @yield('scripts')
</body>
</html>
