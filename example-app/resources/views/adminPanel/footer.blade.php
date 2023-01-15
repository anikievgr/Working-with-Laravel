
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @section('scrtipts')
        
   
    <script src="{{asset('style/pageAdmin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('style/pageAdmin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('style/pageAdmin/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('style/pageAdmin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('style/pageAdmin/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('style/pageAdmin/plugins/apex/apexcharts.min.js')}}"></script>
    @section('scriptAdd')
        
    @show
 @show
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>