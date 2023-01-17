@extends('../../adminPanel/app')
@section('sliderForm')
      active
    @endsection
@section('headerAddLink')
    <link href="{{asset('style/pageAdmin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @endsection
@section('content')
  <div id="content" class="main-content">
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#basic" class="active nav-link">Basic</a>
                            <a href="#form_grid_layouts" class="nav-link">Form Grid Layouts</a>
                            <a href="#helper_text" class="nav-link">Helper Text</a>
                            <a href="#form_sizing" class="nav-link">Sizing</a>
                            <a href="#readonly_input" class="nav-link">Readonly Input</a>
                            <a href="#html_custom_file_upload" class="nav-link">HTML Custom File Upload</a>
                            <a href="#disabled_form" class="nav-link">Disabled Fields</a>
                            <a href="#custom_bs_forms" class="nav-link">Custom Bootstrap Forms</a>
                        </div>
                    </div>
                <div class="row layout-top-spacing">
                    <div id="basic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст №1</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input id="t-text" type="text" name="txt" placeholder="Текст" class="form-control" required="">
                                                </div>
                                            </form>
                                        </div>                                        
                                    </div>

                                </div>
                             </div>
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст №2</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input id="t-text" type="text" name="txt" placeholder="Текст" class="form-control" required="">
                                                </div>
                                            </form>
                                        </div>                                        
                                    </div>

                                </div>
                              </div>
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Картинка</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 ">
                                            <form method="post ">
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                                            </form>
                                        </div>                                        
                                    </div>

                                </div>
                             </div>
                        
                        
                            </div>
                            
                        </div>
                    
                </div>
                </div>
        
@endsection