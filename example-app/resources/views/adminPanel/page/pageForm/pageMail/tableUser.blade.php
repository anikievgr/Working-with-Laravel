@extends('../adminPanel/app')
 @section('tableuser')  <li class='menu active' > @endsection
@section('headerAddLink')
<link href="{{asset('assets/css/components/cards/card.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style/pageAdmin/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
 <link rel="stylesheet" type="text/css" href="{{asset('style/pageAdmin/plugins/editors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/pageAdmin/assets/css/forms/theme-checkbox-radio.css')}}">
    <link href="{{asset('style/pageAdmin/assets/css/apps/mailbox.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('style/pageAdmin/plugins/sweetalerts/promise-polyfill.js')}}"></script>
    <link href="{{asset('style/pageAdmin/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style/pageAdmin/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style/pageAdmin/plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />
    @show
@section('scriptAdd')
<script src="{{asset('style/pageAdmin/assets/js/ie11fix/fn.fix-padStart.js')}}"></script>
    <script src="{{asset('style/pageAdmin/plugins/editors/quill/quill.js')}}"></script>
    <script src="{{asset('style/pageAdmin/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
    <script src="{{asset('style/pageAdmin/plugins/notification/snackbar/snackbar.min.js')}}"></script>
    <script src="{{asset('style/pageAdmin/assets/js/apps/custom-mailbox.js')}}"></script>
   @endsection
@section('content')
         @if ($users == [])
             <div id="content" class="main-content">
                 <div class="container">
                     <div class="container">
             <div class="card component-card_1">
                 <div class="card-body">
                     <p class="card-text">На данный момент пользователей нет</p>
                 </div>
             </div>
                     </div>
                 </div>
             </div>

         @else
         <div id="content" class="main-content">
             <div class="container">
                 <div class="container">



                     <div class="row layout-top-spacing">
                         <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                             <div class="statbox widget box box-shadow">
                                 <div class="widget-header">
                                     <div class="row">
                                         <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                             <h4>Пользователи</h4>


                                         </div>
                                     </div>
                                 </div>
                                 <div class="widget-content widget-content-area">
                                     <div class="table-responsive">
                                         <table class="table table-bordered mb-2">

                                             <tbody>
                                             @foreach($users as $user)
                                             <tr>
                                                 <td>{{$user['name']}}</td>
                                                 <td>{{$user['email']}}</td>
                                                 @if($user['role'] == '1')
                                                     <td>Админ</td>
                                                 @else
                                                     <td>Никто</td>
                                                 @endif

                                                 <td class="text-center"><a href="" class="dropdown-item action-delete d-inline " data-toggle="modal" data-target="#d{{$user['id']}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                             </tr>
                                             @endforeach
                                             </tbody>
                                         </table>
                                     </div>

                                         <p class="d-inline">Удалить всех</p>
                                     <a href="" class="dropdown-item action-delete d-inline "  data-toggle="modal" data-target="#dAll">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                     </a>
                                     <div id="dAll" class="modal fade bd-example-modal-sm " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                         <div class="modal-dialog modal-sm">
                                             <div class="modal-content p-1">
                                                 <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                     <h4>Вы точно хотите удалить ВСЕ ЗАПИСИ?</h4>
                                                 </div>
                                                 <a href="{{route('tableuser.show','all')}}" class="btn btn-primary mb-2">Да</a>
                                             </div>
                                         </div>
                                     </div>
                                     @foreach($users as $user)
                                         <div id="d{{$user['id']}}" class="modal fade bd-example-modal-sm " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                             <div class="modal-dialog modal-sm">
                                                 <div class="modal-content p-1">
                                                     <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                         <h4>Вы точно хотите удалить пользователя?</h4>
                                                     </div>
                                                     <a href="{{route('tableuser.show',$user['id'])}}" class="btn btn-primary mb-2">Да</a>
                                                 </div>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>

                                 </div>
                             </div>
                         </div>



                     </div>

                 </div>
             </div>
 @endif
 @endsection
