
<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('partials.admin_head')


<body>
   
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
     
        @include('partials.admin_header')
        @include('partials.admin_sidebar')

        <!-- ============================================================== -->
      
    
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

          
                @yield('main_mody')
         
            
            @include('partials.admin_footer')

        </div>
       
    </div>

    @include('partials.admin_script')
  
</body>

</html>