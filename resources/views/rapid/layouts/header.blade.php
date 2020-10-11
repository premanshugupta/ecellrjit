<!-- Modal -->
<div class="modal fade" id="mymodel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header lg" style="background-color: #d76526!Important">
        <h5 class="modal-title" style="color: #fff">Important Updates</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h3> LATEST UPDATES</h3>
        
       <ul>

        @foreach($up as $ups)
<li><a style="color: black;" href="{{$ups->link}}" target="_blank" rel="noopener noreferrer"><img class="alignnone size-full wp-image-2179" src="http://www.gifandgif.eu/animated_gif/New/Animated%20Gif%20New%20%2826%29.gif" alt="" width="30" height="15">{{$ups->heading}}<br>
</a></li>
@endforeach
</ul>


      </div>
      
    </div>
  </div>
</div>

  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="https://twitter.com/ecell_rjit" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://www.facebook.com/official.ecell.rjit" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://in.linkedin.com/company/e-cell-rjit" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.instagram.com/ecell.rjit/" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#intro"  style="height: 113px"><img src="{{asset('rapid_assets/img/logo.png')}}" width="122px" height="113px"></a>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
           <li><a href="#services">Blogs</a></li>
          <li><a href="#team">Team</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Events</a></li>
              <li><a href="#">Blogs</a></li>
              <li class="drop-down"><a href="#">Startups</a>
              <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul></li>
              <li><a href="#">Team Members</a></li>
              <li><a href="#">Achievements</a></li>
            </ul>
          </li> -->
          <li><a href="#footer">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
