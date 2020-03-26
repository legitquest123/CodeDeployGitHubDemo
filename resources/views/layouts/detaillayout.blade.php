<html>
<head>
@include('includes.detail-head')    
</head>
<body>
	<div class="judgment-wrapper anim">
		@include('includes.detail-header')
		<main class="main">
			@yield('content')	
		</main>
</div>
@include('includes.ajax')
@include('includes.detailfooter')
</body>
</html>