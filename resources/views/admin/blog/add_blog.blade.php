@extends('admin.dashboard')
@section('title','Blog')
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
                  <h1>Add Blog</h1>
                  <small></small>
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
                        <div class="panel-body">
                           <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/add-blog')}}" method="post">
                           	{{csrf_field()}}

                              <div class="form-group">
                                 <label>Blog Heading</label>
                                 <input type="text" class="form-control" name="blog_heading" id="blog_heading" placeholder="Enter Blog Heading" required>
                              </div>
                              <div class="form-group">
                                 <label>Blog Content</label>
                                 <textarea class="form-control" name="blog_content" id="blog_content" rows="6" required placeholder="Enter Blog Content"></textarea>
                              </div>

                              <div class="form-group">
                                 <label>Photo</label>
                                 <input type="file" name="image" class="form-control">
                              </div>
                              
                              <div class="reset-button">
                              	<button type="submit" class="btn btn-success btn-lg" title="Add Blog" value="Add Contact">save</button>
                                 <!-- <a href="#" class="btn btn-success">Save</a> -->
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