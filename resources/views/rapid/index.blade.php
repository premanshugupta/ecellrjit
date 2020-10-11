@extends('rapid.layouts.master')
@section('title','Ecell Rjit')
@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-12  intro-info order-md-first order-last">
          <h2>Entrepreneurship Cell <br><span>RJIT</span></h2>
          <div>

            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img color">
              <br>
              <br>  
              <br>
              <img src="{{asset('rapid_assets/img/3.jpg')}}" class="text-center" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>About Us</h2>
              <h5 class="headi">E-Cell RJITT is the non-profit student run organization of Rustamji Institute of Technology. We aim to develop a community of contemporary as well as seasoned entrepreneurs, besides mentoring of new and budding startups across the country. Established in 2016, Our E-Cell has been the driving force for channelizing and incubating ideas into startups through oour events, programs and initiatives in the campus and beyond.</h5>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


   

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4">
            <div class="why-us-img brighten">
              <img src="{{asset('rapid_assets/img/ecell2.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-8">
            <div class="why-us-content">
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-eye" style="color: #f058dc;"></i>
                <h4>Vision</h4>
                <p>We endeavour towards nurturing individuals with creative minds, social and innovative ideas and potential for substantial business opportunities.  </p>             
               <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-xl">
                <div class="modal-content">
                 <div class="modal-header m">
                  <h5 class="modal-title mod" id="exampleModalLabel">E-Cell | RJIT</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                   </div>
                  <div class="modal-body">
                   <div class="container">
                     <div class="row">
                       <div class="col-md-6">
                        <h3 class="text-center">VISION</h3>
                         <p class="visi">We endeavour towards nurturing individuals with creative minds, social and innovative ideas and potential
                      for substantial business opportunities. Our main focus is <strong>spreading awareness, empowering the creative minds of rural and socio-economic backward communities; and cultivating all the potential ideas</strong>  to grow from mind to market, without
                      degrading the environment.We strive to create an efficient medium between the principal components- students, faculties, mentors,
                      working professionals, aspiring and existing entrepreneurs, angel investors and venture capitalists. Thus
                      consolidating the entire components into the entrepreneurial ecosystem and serving our vision to empower
                      entrepreneurship at E-Cell RJIT.</p>
                       </div>
                       <div class="col-md-6">
                        <h3 class="text-center">MISSION</h3>
                         <p class="visi">We at Entrepreneurship Cell, thrive to –
                         <div class="circle">
                          <li> Build an effective entrepreneurial ecosystem by training freshmen, guiding creative minds and
                           providing financial support to start-ups. </li>
                         <li>Organize flagship events, interactive talk sessions; arrange workshops in order to cultivate
                          entrepreneurial spirit.</li>
                          <li>Establish an incubation centre by enthusiastically working on PPP (Public-Private-Partnership)
                          model.</li>
                          <li>Provide mentorship and strong market reach to our innovative youngsters. </li>
                        </div>
                         </p>
                       </div>
                       <div class="col-md-12">
                        <h3 class="text-center">VALUES</h3>
                         <p class="visi">E-Cell RJIT, is a non-profit organisation. Our core values are sharing and solving the problems mutually,
                          taking initiatives and converting it into the world of opportunities for our budding youngsters by multi
                          directional analytical approach.
                          These core values can only be achieved by honesty, discipline and trustworthiness, with all those who are
                          connected with us.
                          Our long-term vision and risk-taking capabilities enhance our credibility and maintain strong relations with
                          our connections.</p>
                       </div>
                     </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-binoculars" style="color: #ffb774;"></i>
                <h4>Mission</h4>
                <p>Build an effective entrepreneurial ecosystem by training freshmen, guiding creative minds and
                 providing financial support to start-ups.</p>
              </div>
              
              <div class="features wow bounceInUp clearfix">
                <img src="{{asset('rapid_assets/img/value.png')}}" style="width: 64px;height: 40px">s
                <h4 class="val">VALUES</h4>
                <p>E-Cell RJIT, is a non-profit organisation. Our core values are sharing and solving the problems mutually,
                taking initiatives and converting it into the world of opportunities for our budding youngsters by multi
                directional analytical approach. </p>
              </div>
              <button type="button" class="btn btn-primary re btn-lg" data-toggle="modal" data-target="#exampleModal" > 
             Read more
             </button>
              
            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">220</span>
            <p>Twitter</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1057</span>
            <p>Facebook</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">112</span>
            <p>Instagram</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">357</span>
            <p>Linkdin</p>
          </div>
  
        </div>

      </div>
    </section>

  

   

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <!-- <li data-filter=".filter-app"></li>
              <li data-filter=".filter-card"></li>
              <li data-filter=".filter-web"></li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('rapid_assets/img/portfolio/ecell1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('rapid_assets/img/portfolio/ecell1.jpg')}}" data-lightbox="portfolio" data-title="" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('rapid_assets/img/portfolio/ecell2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('rapid_assets/img/portfolio/ecell2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('rapid_assets/img/portfolio/ecell3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('rapid_assets/img/portfolio/ecell3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('rapid_assets/img/portfolio/ecell4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('rapid_assets/img/portfolio/ecell4.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('rapid_assets/img/portfolio/ecell5.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('rapid_assets/img/portfolio/ecell5.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('rapid_assets/img/portfolio/ecell6.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('rapid_assets/img/portfolio/ecell6.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('rapid_assets/img/portfolio/2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('rapid_assets/img/portfolio/2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('rapid_assets/img/portfolio/achievements.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('rapid_assets/img/portfolio/achievements.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('rapid_assets/img/portfolio/3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('rapid_assets/img/portfolio/3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

     
<!--==========================
      Faculty ADvisior
    ============================-->
    
<section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3> Faculty Advisior</h3>
          <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
          <br>
        </div>
        <div class="row">
             <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="{{asset('rapid_assets/img/umashankar.png')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dr Uma Shankar Sharma</h4>
                  <span>Faculty in charge</span>
                  <div class="social">
                    <a href="https://www.facebook.com/umashankar.sharma.1481"><i class="fa fa-facebook"></i></a>
                    <a href="https://instagram.com/drumashankarsharma?igshid=1ilvt1fj0tde6"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #team -->


   <!-- #team -->     

    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
          <br>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{asset('rapid_assets/img/nikhil.png')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nikhil Pathak</h4>
                  <span>Head(2018-19)</span>
                  <div class="social">                 
                    <a href="https://www.facebook.com/Nikhil786Pathak"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/nikhil-pathak01/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="{{asset('rapid_assets/img/nitin.png')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nitin Banwani</h4>
                  <span>Head(2019-2020)</span>
                  <div class="social">
                    <a href="https://www.facebook.com/nitin.banwani.3"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/nitinbanwani831/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="{{asset('rapid_assets/img/prajwal.png')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Prajwal</h4>
                  <span>Head(2020)</span>
                  <div class="social">
                    <a href="https://www.facebook.com/prajwal8962433351"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/prajwalprajwal/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Startups </h3>
        </header>

      <div class="row">
        <div class="col-md-6 text-center">
          <a href="https://tulikapencils.com/"><img src="{{asset('rapid_assets/img/tulika.png')}}" alt=""></a>
        </div>
        <div class="col-md-6 text-center">
          <a href="http://nipsol.com/"><img src="{{asset('rapid_assets/img/nipsol.png')}}" alt=""></a> 
        </div>
      </div>
        

      </div>
    </section><!-- #clients -->


    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Achievements</h3>
          <p></p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      
       <div class="row">
          <div class="col-md-4 zoom">
            <img src="{{url('rapid_assets/img/achievements.jpg')}}" height="100%" alt="">      
          </div>
           <div class="col-md-4 zoom">
            <img src="{{url('rapid_assets/img/ecell4.jpg')}}" style="  margin-left: 140px;width: 43%;height: 124%;" height="100%" alt="">      
          </div>
           <div class="col-md-4 zoom">
            <img src="{{url('rapid_assets/img/ecell3.jpg')}}" style="margin-left: 148px; width: 43%;s height: 164%;" height="100%" alt="">      
          </div>
      </div>

        </div>
      </div>

    </section><!-- #pricing -->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Can I be a member/community member?<i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                E-Cell RJIT's community is a family of budding leaders/entrepreneurs, supporters and mentors. Our community is open to all the mentioned personalities, only if they are highly enthusiastic to raise up their skills with helping other members.
                And, to join as a core member, other than technical skills, you must be enthusiastic to develop leadership qualities, with some basic knowledge about the development of startups.To join as an E-Cell RJIT Core member or Community member, you can either contact us or drop an email below.
              </p>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">I have an idea, Can E-Cell RJIT help me in implementing it?<i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                Yes, E-Cell RJIT can help you implement the idea by helping you to understand the market and current market needs.You need to pick a good team to initiate with and you need to use a free platform to reach out to customers . The E-Cell team can help you move ahead in your path of success.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">How does E-Cell RJIT help students in implementing their idea?<i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                E-Cell RJIT acts as the backbone for all visionary ideas. We help our youngsters by providing initial and intermediate support and boost up their ideas into the next level.For this, we organise Interactive sessions with experienced Industrial giants, Angel Investors submits, flagship events, workshops etc. We also provide separate Mentorship, technical sound Interns, strong Community support and many more.We believe and work in the direction of  providing quality Infrastructure and stable platforms for our Startups, from where they can take off their smooth, shine and stable journey.
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- #faq -->

  </main>
 
@endsection