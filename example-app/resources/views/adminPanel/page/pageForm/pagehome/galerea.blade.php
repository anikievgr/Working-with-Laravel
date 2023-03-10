@extends('../../../adminPanel/app')
@section('galerea')
      active
    @endsection
@section('scriptAdd')
 <script src="{{asset('style/pageAdmin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('style/pageAdmin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    @endsection
@section('headerAddLink')
    <link href="{{asset('style/pageAdmin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style/pageAdmin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @endsection
@section('content')
    <div id="content" class="main-content">
            <div class="container">
                
                     <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#slider-create" class=" nav-link">Создать слайд</a>
                            <a href="#slider-update" class=" nav-link">Обновить</a>
                            <a href="#slider-delete" class=" nav-link">Удалить</a>
                            
                        </div>
                    </div>
                
                <div class="container">
                    <div class="row layout-top-spacing">

                       
                        
                 
                                     <div id="select" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Select</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="select mt-4" novalidate action="javascript:void(0);">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div id="select_menu" class="form-group mb-4">
                                                    <select class="custom-select" required>
                                                      <option value="">Open this select menu</option>
                                                      <option value="1">One</option>
                                                      <option value="2">Two</option>
                                                      <option value="3">Three</option>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>


                                    

                                </div>
                                        <button class="btn btn-primary mt-2" type="submit">Submit form</button>
                                    </form>

                                   

                                   

                                </div>
                            </div>
                        </div>
                                  
                                    
                        </div>
                </div>
            </div>
  </div>
@endsection