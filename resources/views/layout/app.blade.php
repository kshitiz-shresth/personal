<!DOCTYPE html>
<html lang="en" dir="ltr">
	
    <head>
        @yield('canonical')
		<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta property="fb:pages" content="321327421885896" />

        <title>@yield('title')</title>
        
        @include('includes.css')

        @yield('meta')
		<script data-ad-client="ca-pub-9241957882099608" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
	
    <body class="red-skin">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            @include('includes.navbar')

                @yield('header')

              @yield('body')


            @include('includes.footer')
            
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
        @include('includes.js')
        @yield('js')
	</body>

</html>