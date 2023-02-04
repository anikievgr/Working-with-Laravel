@extends('../../../adminPanel/app')
@section('ocompany')
      active
    @endsection
@section('scriptAdd')

 <script src="{{asset('style/pageAdmin/assets/js/scrollspyNav.js')}}"></script>
 <script src="{{asset('style/pageAdmin/plugins/highlight/highlight.pack.js')}}"></script>
 <script src="{{asset('style/pageAdmin/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('style/pageAdmin/plugins/flatpickr/flatpickr.js')}}"></script>
    <script src="{{asset('style/pageAdmin/plugins/noUiSlider/nouislider.min.js')}}"></script>

    <script src="{{asset('style/pageAdmin/plugins/flatpickr/custom-flatpickr.js')}}"></script>
    <script src="{{asset('style/pageAdmin/plugins/noUiSlider/custom-nouiSlider.js')}}"></script>
    <script src="{{asset('style/pageAdmin/plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js')}}"></script>
    @endsection
@section('headerAddLink')
    <link href="{{asset('style/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style/pageAdmin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    
    <link href="{{asset('style/pageAdmin/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/pageAdmin/plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('style/pageAdmin/plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @endsection
@section('content')
<div id="content" class="main-content">
            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#date_time_picker" class="active nav-link">Охват</a>
                        </div>
                    </div>
                    
                   

                    <div class="row">

                        

                        

                        


                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Охват</h4> 
                                        </div>
                                    </div>
                                </div>
                                <form method="post" action="">
                                <div class="widget-content widget-content-area">
                                    <div class="custom-progress bottom-right progress-down" style="width: 100%">
                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0">

                                        <div class="range-count"><span class="range-count-number" data-rangecountnumber="0">0</span> <span class="range-count-unit">%</span></div>
                                    </div>
                                        <div class="custom-progress bottom-right progress-down" style="width: 100%">
                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0">

                                        <div class="range-count"><span class="range-count-unit">Другие страны </span><span class="range-count-number" data-rangecountnumber="0">0</span> <span class="range-count-unit">%</span></div>
                                    </div>
                                   
                                </div>
                                <button class="btn btn-primary mb-2">Primary</button>
                                </form>
                            </div>
                        </div>

                    </div>

                   

                        
                                
                           

                        

                    </div>


                </div>
                </div>
      
        </div>
 @endsection
