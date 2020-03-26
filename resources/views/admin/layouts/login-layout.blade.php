<html>
<head>
	@include('admin.includes.head')    

</head>
<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

  
  <div id="toaster"></div>
  

  <div class="wrapper">
  


 <div class="page-wrapper">
                <!-- Header -->

@yield('content')
@include('admin.includes.ajax')
@include('admin.includes.tinyeditor')


</div>
</body>
</html>