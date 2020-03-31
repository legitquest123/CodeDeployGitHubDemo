<html>
<head>
@include('includes.noteshead')    
</head>
<body>
@include('includes.notesheader')
<main class="main">
@yield('content')
</main>
@include('includes.ajax')
@include('includes.notesfooter')


</body>
</html>