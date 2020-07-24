
<!DOCTYPE html>
<html lang="en">
@include('templates.partials.head')

<body>

  <!-- Start wrapper-->
<div id="wrapper">

  @include('templates.partials.sidebar')

  @include('templates.partials.topbar')

  <div class="clearfix"></div>
	
  <div class="content-wrapper">

    <div class="container-fluid">

      @yield('breadcrumb')

      <!--Start Dashboard Content-->
	  
      @yield('content')
	  
       <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
  </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
    <footer class="footer">
        <div class="container">
          <div class="text-center">
            © 2018, ARKA
          </div>
        </div>
    </footer>
	<!--End footer-->
   
</div><!--End wrapper-->

  @include('templates.partials.script')
  
</body>
</html>
