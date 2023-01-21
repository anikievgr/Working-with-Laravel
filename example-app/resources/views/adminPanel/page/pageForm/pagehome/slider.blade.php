@extends('../../../adminPanel/app')
@section('sliderForm')
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
                            <a href="#slider-create" class=" nav-link">Создать слайд</a>
                            <a href="#slider-update" class=" nav-link">Обнавить</a>
                            <a href="#slider-delete" class=" nav-link">Удалить</a>
                            
                        </div>
                         </div>
                <div class="container">
                    <div class="row layout-top-spacing">

                        <div id="slider-create" class="col-lg-12 layout-spacing">
                           <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Создать слайд</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form method="post" action="{{route('bd.store')}} "enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Текст №1</label>
                                            <input type="text" name="title" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Текст №2</label>
                                            <input type="text" name="subtitle" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                        </div>
                                        <div class="form-group mb-4 mt-3">
                                            <label for="exampleFormControlFile1">Загрузите картинку</label>
                                            <input type="file" name="image"class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <input type="submit"  class="mt-4 mb-4 btn btn-primary">
                                    </form>
                                </div>
                            </div>
                         </div>
                            
                            
                          </div>
                        <div id="slider-update" class="col-lg-12 layout-spacing">
                           <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Обнавить слайд</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form method="post" action="{{route('form')}} "enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Текст №1</label>
                                            <input type="text" name="title" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Текст №2</label>
                                            <input type="text" name="subtitle" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                        </div>
                                        <div class="form-group mb-4 mt-3">
                                            <label for="exampleFormControlFile1">Загрузите картинку</label>
                                            <input type="file" name="image"class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                                    </form>
                                </div>
                            </div>
                         </div>
                            
                            
                          </div>

   

                        <div id="slider-delete" class="col-lg-12 layout-spacing">
                           <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Удалить слайд</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form method="post" action="{{route('form')}} "enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Текст №1</label>
                                            <input type="text" name="title" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Текст №2</label>
                                            <input type="text" name="subtitle" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                        </div>
                                        <div class="form-group mb-4 mt-3">
                                            <label for="exampleFormControlFile1">Загрузите картинку</label>
                                            <input type="file" name="image"class="form-control-file" id="exampleFormControlFile1">
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