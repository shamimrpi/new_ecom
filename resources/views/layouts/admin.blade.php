
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
        <div class="page-wrapper" style="margin-top: 60px;background: #fff">

          
                @yield('main_mody')
         
            
            

        </div>
        @include('partials.admin_footer')
       
    </div>

    @include('partials.admin_script')
    @yield('scripts')
  
</body>

</html>