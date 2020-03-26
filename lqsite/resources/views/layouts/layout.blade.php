<html>
<head>
@include('includes.head')    
</head>
<body>
@include('includes.header')
<main class="main">
@yield('content')
</main>
@include('includes.ajax')

@include('includes.footer')
</body>
</html>