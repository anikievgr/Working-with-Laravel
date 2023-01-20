@extends('../../../adminPanel/app')
@section('incubitovanie')
      active
    @endsection
@section('scriptAdd')
 <script src="{{asset('style/pageAdmin/assets/js/scrollspyNav.js')}}"></script>
 <script src="{{asset('style/pageAdmin/plugins/highlight/highlight.pack.js')}}"></script>
    @endsection
@section('headerAddLink')
    <link href="{{asset('style/pageAdmin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @endsection
@section('content')
  <div id="content" class="main-content">
            <div class="container">
                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#header" class=" nav-link">Header</a>
                            <a href="#text1" class=" nav-link">Текст№1</a>
                        </div>
                         </div>
                <div class="container">
                    <div class="row layout-top-spacing">
                        <div id="header" class="col-lg-12 layout-spacing">
                           <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Header</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Текст №1</label>
                                            <input type="text" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                        </div>
                                        <div class="form-group mb-4 mt-3">
                                            <label for="exampleFormControlFile1">Загрузите картинку</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                                    </form>
                                </div>
                            </div>
                         </div>
                            
                            
                          </div>

   
                        <div id="text1" class="col-lg-12 layout-spacing">
                           <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст №1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-group mb-4">
                                            <textarea style="min-height: 100px" class="form-control  "  id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="code-section-container show-code">
                                                <div class="code-section text-left">
                                        </div>
                                    </div>
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