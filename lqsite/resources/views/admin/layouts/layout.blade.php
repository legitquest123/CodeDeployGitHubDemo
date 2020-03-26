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
  

@include('admin.includes.sidebar')
 <div class="page-wrapper">
                <!-- Header -->
@include('admin.includes.header')
@yield('content')
@include('admin.includes.ajax')
@include('admin.includes.modal')
@include('admin.includes.tinyeditor')
@include('admin.includes.footer')

</div>
</body>
</html>