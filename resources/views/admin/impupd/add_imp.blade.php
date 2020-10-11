@extends('admin.dashboard');
@section('title','Important Upadtes')
@section('content')
<!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Updates</h1>
                  <small>Add Updates</small>
               </div>
            </section>
             @if(Session::has('flash_message_error'))
                <div class="alert alert-sm alert-danger alert-block" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{!! session('flash_message_error') !!}</strong>
                </div>
                @endif

                @if(Session::has('flash_message_success'))
                <div class="alert alert-sm alert-success alert-block" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{!! session('flash_message_success') !!}</strong>
                </div>
                @endif
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="{{('/admin/impupd/view-imp')}}"> 
                              <i class="fa fa-list"></i>  View List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" action="/admin/add" method="post">

                           		{{csrf_field()}}

                              <div class="form-group">
                                 <label>Heading</label>
                                 <input type="text" class="form-control" name="heading" id="heading" placeholder="Enter First Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Link</label>
                                 <input type="text" class="form-control" name="link" id="link" placeholder="Enter last Name" required>
                              </div>
                              
                              <div class="reset-button">
                                 <button type="submit" class="btn btn-success btn-lg" title="Add Blog" value="Add Upadtes">save</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
@endsection