<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/toastr.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/js/bootstrap.bundle.min.jss')}}"></script>
    <script src="{{asset('admin/js/app-style-switcher.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/js/custom.js')}}"></script>

    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="{{asset('admin/js/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin/js/dashboard1.js')}}"></script>
    <script>
    $(document).ready(function(){
        $("#logout").on('click',function(){
            if(confirm("Are you sure want to exit ?")){
                return true;
            }
            return false;
        });
    });
    </script>
    <script>

          @if(Session::has('message'))
          toastr.options =
          {
            "closeButton" : true,
            "progressBar" : true
          }
                toastr.success("{{ session('message') }}");
          @endif

          @if(Session::has('error'))
          toastr.options =
          {
            "closeButton" : true,
            "progressBar" : true
          }
                toastr.error("{{ session('error') }}");
          @endif

          @if(Session::has('info'))
          toastr.options =
          {
            "closeButton" : true,
            "progressBar" : true
          }
                toastr.info("{{ session('info') }}");
          @endif

          @if(Session::has('warning'))
          toastr.options =
          {
            "closeButton" : true,
            "progressBar" : true
          }
                toastr.warning("{{ session('warning') }}");
          @endif
</script>