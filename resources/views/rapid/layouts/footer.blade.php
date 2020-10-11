 <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>E-cell</h3>
                    <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p> -->
                    <h4>“SPARK THE INNOVATION, TRANSFORM THE WORLD”</h4>
                  </div>
                </div>

                <div class="col-sm-6">                
                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                     RJIT,BSF ACADEMY, Tekanpur, Gwalior, madhya pradesh<br>
                      475005
                     <br>
                      <!-- <strong>Phone:</strong> +1 5589 55488 55<br> -->
                      <strong>Email:</strong> ecellrjit@gmail.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="https://twitter.com/ecell_rjit" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/official.ecell.rjit" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://in.linkedin.com/company/e-cell-rjit" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.instagram.com/ecell.rjit/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>
        
          <div class="col-lg-6">
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
            <div class="form">
              
              <h4>Send us a message</h4>
              <form action="{{url('/rapid/index')}}" method="post" role="form" class="contactForm">
                {{csrf_field()}}
                <div class="form-group">
                  <input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="contact_email" id="contact_email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="contact_subject" id="contact_subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="contact_message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center">
                  <button type="submit" title="Send Message" value="Add Contact">Send Message</button>
                </div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
      </div>
      <div class="credits">
        Designed by <a href="#">Premanshu Gupta</a>
        <div class="social-links">
                    <a href="https://www.facebook.com/premanshu.gupta.5/" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/__purgatory__onigiri__/" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/premanshu-gupta-101359191/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>  
      </div>
    </div>
  </footer><!-- #footer -->