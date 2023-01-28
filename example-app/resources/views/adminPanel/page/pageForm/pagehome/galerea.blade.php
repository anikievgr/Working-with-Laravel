@extends('../../../adminPanel/app')

@section('galerea')
      active
    @endsection
@section('scriptAdd')
    <link href="{{asset('style/css/main.css')}}" rel="stylesheet" type="text/css" />

 <script src="{{asset('style/pageAdmin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('style/pageAdmin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>
<script src="{{asset('style/js/main.js')}}"></script>
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
                            <a href="#galerey-create" class=" nav-link">Сохранить фотографию</a>
                            <a href="#slider-update" class=" nav-link">Обновить</a>
                            <a href="#slider-delete" class=" nav-link">Удалить</a>

                        </div>
                    </div>

                <div class="container">
                    <div class="row layout-top-spacing">




                        <div id="galerey-create" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Галерея</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="select mt-4" method="post" action="{{route('adminGalerea.store')}} "enctype="multipart/form-data" novalidate action="javascript:void(0);">
                                         {{ csrf_field() }}
                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div id="select_menu" class="form-group mb-4">
                                                    <label for="">Выберите категорию</label>
                                                    <select class="custom-select " id="select" name="select" required>
                                                      <option value="buutonAddCategory" > Создать новую</option>
                                                        @foreach($items as  $category)
                                                            <option value="{{$category['id']}}">{{$category['title']}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                          <div id="addCategory" class="form-group mb-4">
                                                <label for="exampleFormControlInput2">Название категории</label>
                                                <input type="text" name="new-categori" class="form-control" id="inputNewCategory"  aria-describedby="h-text1" placeholder="">
                                            </div>
                                        <label>Убрать (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input name="image" type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                </div>
                                        <button class="btn btn-primary mt-2" type="submit">Отправить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
{{-- <img class="rounded d-block w-100" src="{{asset('/storage/'.$item['image'])}}" > --}}
                        <div id="galerey-update" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Обновить</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                            
                                <div class=" col-md-12 d-flex justify-content-center mb-5 maintabs" >
                                    </div>
                                    <div class="sliderMainOff m-auto " >
                                        <div class="sliderScrollbar d-flex align-items-center">
                                        <button type="button" class="btn btn-outline-primary btnMain" id="nextMain"><</button>
                                        <ul class="list-group list-group-horizontal slidesList">
                                               <li class=" mainSlids buttonMain"><button type="button" class="btn btn-outline-primary btn-rounded  filter" data-rel="all">Все</button></li>
                                            @foreach ($gallerea as $key=> $item)
                                                    <li class=" mainSlids buttonMain"><button type="button" class="btn btn-outline-primary  btn-rounded  filter" data-rel="{{$item['id']}}">{{$key}}</button></li>
                                                @endforeach                                       
                                       
                                    </ul>
                                      <button type="button" class="btn btn-outline-primary btnMain" id="prevMain">></button>    
                                    </div>
                                </div>
                                    <!-- Grid column -->
                                        <div class="container text-center mt-25 ">
                                            <div class="row row-cols-3 sliderMain">
                                                     <div class="col">
                                                        <button type="button" class="btn btn-outline-primary   filter" data-rel="all">Все</button>
                                                    </div>
                                                     @foreach ($gallerea as $key=> $item)
                                                        <div class="col">
                                                                <button type="button" class="btn btn-outline-primary   filter" data-rel="{{$item['id']}}">{{$key}}</button>
                                                            </div>                                                
                                                        @endforeach  
                                            </div>
                                            </div>
                                    </div>
                                    <!-- Grid row -->

                                    <!-- Grid row -->
                                    <div class="gallery maingallerea justify-content-center" id="gallery">

                                    <!-- Grid column -->
                                    @foreach ($gallerea as $item)
                                            @foreach ($item['image']  as $image)
                                            <div class="mb-3 pics animation all {{$item['id']}}">
                                                 <img class="img-fluid ml-2 mr-2 mainFOTO rounded"  src="{{asset('/storage/'.$image)}}" alt="Card image cap">
                                                
                                            </div>
                                            @endforeach
                                    @endforeach
                                    
                                    
                                    <!-- Grid column -->

                            </div>
                        </div>
                        </div>
                </div>
            </div>
  </div>
@endsection
