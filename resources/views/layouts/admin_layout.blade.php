@include('layouts.partials._head')
	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- NAVBAR -->
        @include('layouts.partials._topnav')
			<!-- END NAVBAR -->
			<!-- LEFT SIDEBAR -->
        @include('layouts.partials._sidebar')
			<!-- END LEFT SIDEBAR -->
			<!-- MAIN -->
			<div class="main">
				<!-- MAIN CONTENT -->
				<div class="main-content">
					@include('layouts.partials._heading')
					<div class="container-fluid">
						@yield('content')
					</div>
				</div>
				<!-- END MAIN CONTENT -->
				<!-- RIGHT SIDEBAR -->
				{{-- @include('layouts.partials._right_sidebar') --}}
				<!-- END RIGHT SIDEBAR -->
			</div>
			<!-- END MAIN -->
			<div class="clearfix"></div>
      @include('layouts.partials._footer')
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
      @include('layouts.partials._script')
	</body>

</html>