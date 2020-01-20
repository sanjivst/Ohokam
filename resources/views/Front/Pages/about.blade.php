<!DOCTYPE html>
<html class="no-js" lang="">
  <head>

    @include('Front.Include.meta')
      <title>HR|Heavenmaker</title>
      <!-- Owl Carousel start -->
      <link rel="stylesheet" href="css\vendors\owl.carousel.min.css">
      <link rel="stylesheet" href="css\vendors\owl.theme.default.min.css">
      <!-- Owl Catousel end -->
      @include('Front.Include.head')

  </head>

  <body class="about">
    <!-- model start-->
     <!-- Extra Large modal -->
     @include('Front.Include.model')

    <!-- model end -->
    <!--nav button start -->
    @include('Front.Include.mobile-nav')

    <!-- nav button end -->
    <!-- header  start-->
    @include('Front.Include.header')

    <!-- header end -->
    <!-- banner start-->
    <section class="banner-page">
      <div class="container-fluid">
        <div class="row">
         <div class="col-1-of-1">
           <h3>About-Us</h3>
           <div class="breadcrumb">
             <ul>
               <li>
                 <a href="{{route('home')}}">Home</a>
               </li>
               <li>
                 <a href="{{route('about')}}" class="active">About-Us</a>
               </li>
             </ul>
           </div>
         </div>
        </div>
      </div>
    </section>
    <!-- banner end -->
    <!-- about start -->
    <section class="about-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1-of-2">
                  <div class="about-us__content">
                    <h4 class="about-us__content--header">
                      We are <span class="color--theme">
                      Hr-Heavenmaker
                      </span>
                    </h4>
                    <h3 class="about-us__content--sub-header">BEST FINANCIAL ADVISOR FOR YOUR
                      <br/>
                     <span class="color--theme" id="change-text">
                       Future
                     </span>
                      TO GROWUP
                    </h3>
                      <p class="about-us__content--text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, blanditiis debitis. Mollitia esse sint, animi neque a temporibus reiciendis nobis alias laudantium voluptatum magnam, pariatur recusandae aliquam et in molestiae?</p>
                      <br/>
                      <p class="about-us__content--text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, blanditiis debitis. Mollitia esse sint, animi neque a temporibus reiciendis nobis alias</p>
                      <a class="join--btn" data-toggle="modal" data-target="#extraLargeModal">Sign Up</a>
                  </div>
                </div>
                <div class="col-1-of-2">
                    <div class="videopopup-box">
                      <a href="#" class="video-btn">
                        <i class="far fa-play-circle"></i>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->
    <!-- about-process start -->
    <section class="about-process clearfix">
      <div class="about__item  about__item--security">
          <div class="process__item">
            <div class="process__icon">
              <span>
                <i class="fas fa-shield-alt"></i>
              </span>
              <span>
                <i class="fas fa-shield-alt"></i>
              </span>
            </div>
            <div class="process__content">
              <h4 class="process__content--header">
                ENSURE SECURITY
              </h4>
              <p class="process__content--text">
                Perspiciatis unde omnis ist natus error sit voluptatem
									accusantium loremque tium totam rem aperiam eaque
              </p>
            </div>
          </div>
      </div>
      <div class="about__item about__item--consultant">
      <div class="process__item">
            <div class="process__icon">
              <span>
                <i class="fas fa-users"></i>
              </span>
              <span>
                <i class="fas fa-users"></i>
              </span>
            </div>
            <div class="process__content">
              <h4 class="process__content--header">
                EXPERT CONSULTANT
              </h4>
              <p class="process__content--text">
                Perspiciatis unde omnis ist natus error sit voluptatem
									accusantium loremque tium totam rem aperiam eaque
              </p>
            </div>
          </div>

      </div>
      <div class="about__item about__item--support">
          <div class="process__item">
            <div class="process__icon">
              <span>
                <i class="fas fa-user-clock"></i>
              </span>
              <span>
                <i class="fas fa-user-clock"></i>
              </span>
            </div>
            <div class="process__content">
              <h4 class="process__content--header">
                24/7 LIVE SUPPORT
              </h4>
              <p class="process__content--text">
                Perspiciatis unde omnis ist natus error sit voluptatem
									accusantium loremque tium totam rem aperiam eaque
              </p>
            </div>
          </div>

      </div>
    </section>
    <!-- about-process end -->
    <!-- about-team start -->
    <section class="about-team">
      <div class="container-fluid">
        <h3 class="main--header">Meet Our Team Members</h3>
        <p class="about-team--text">
          Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque <br/> laudantium,  totam rem aperiam, eaque ipsa quae
        </p>
        <div class="row">
          <div class="col-1-of-3">
            <div class="about-team__item">
              <div class="about-team__header">
              <figure class="about-team__image">
                <img src="img\about-item\team\team-member-1.jpg" alt="team member thumb">
              </figure>
              <div class="team__social">
                <ul>
                  <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                  <li class="google-plus"><a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
              </div>
              </div>
              <figcaption class="team__content">
                <h5 class="team__content--header">
                  Wyman Borer
                </h5>
                <p class="team__content--text">Chairman</p>
              </figcaption>
            </div>
          </div>
          <div class="col-1-of-3">
          <div class="about-team__item">
              <div class="about-team__header">
              <figure class="about-team__image">
                <img src="img\about-item\team\team-member-2.jpg" alt="team member thumb">
              </figure>
              <div class="team__social">
                <ul>
                  <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                  <li class="google-plus"><a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
              </div>
              </div>
              <figcaption class="team__content">
                <h5 class="team__content--header">
                  Fernando Adams
                </h5>
                <p class="team__content--text">Manager</p>
              </figcaption>
            </div>
          </div>
          <div class="col-1-of-3">
            <div class="about-team__item">
              <div class="about-team__header">
              <figure class="about-team__image">
                <img src="img\about-item\team\team-member-3.jpg" alt="team member thumb">
              </figure>
              <div class="team__social">
                <ul>
                  <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                  <li class="google-plus"><a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
              </div>
              </div>
              <figcaption class="team__content">
                <h5 class="team__content--header">
                  Roberto Carlos
                </h5>
                <p class="team__content--text">Assistant Manager</p>
              </figcaption>
            </div>
        </div>
      </div>
        <a href="./members.php" class="btn--category">See Other Members</a>
      </div>
    </section>
    <!-- about-team end -->
    <!-- funfact-area start -->
    <section class="about-funfact">
      <div class="container-fluid">
          <div class="row">
            <div class="col-1-of-4">
              <div class="funfact-wrapper">
                <div class="funfact">
									<span class="funfact-icon">
                    <i class="far fa-eye"></i>
									</span>
									<div class="funfact-content">
										<h3><span class="counter">349</span>+</h3>
										<h5>Truested Clients</h5>
									</div>
								</div>
              </div>
            </div>
            <div class="col-1-of-4">
            <div class="funfact-wrapper">
                <div class="funfact">
									<span class="funfact-icon">
                    <i class="far fa-chart-bar"></i>
									</span>
									<div class="funfact-content">
										<h3><span class="counter">109</span>+</h3>
										<h5>Awards Win</h5>
									</div>
								</div>
              </div>
            </div>
            <div class="col-1-of-4">
            <div class="funfact-wrapper">
                <div class="funfact">
									<span class="funfact-icon">
                    <i class="far fa-heart"></i>
									</span>
									<div class="funfact-content">
										<h3><span class="counter">459</span>+</h3>
										<h5>Project Done</h5>
									</div>
								</div>
              </div>
            </div>
            <div class="col-1-of-4">
            <div class="funfact-wrapper">
                <div class="funfact">
									<span class="funfact-icon">
                    <i class="fas fa-coffee"></i>
									</span>
									<div class="funfact-content">
										<h3><span class="counter">19</span>+</h3>
										<h5>Expert Advisor</h5>
									</div>
								</div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- funfact-area end -->
    <!-- testimonials start -->
    <section class="about-testimonial">
      <div class="container-fluid">
        <h3 class="main--header">Testimonials</h3>
        <div class="row">
          <div class="col-1-of-1">
            <div class="testimonial__width">
              <div class=" testimonial-carousel owl-carousel owl-theme">
                    <div class="item">
                      <div class="testimonial__content">
                        <p><i class="fas fa-quote-left"></i>Parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                          odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro<i class="fas fa-quote-right"></i></p>
                      </div>
                        <div class="testimonial__author">
                        <div class="testimonial__author__image">
                          <img src="img\about-item\slider\testimonial-author-1.png" alt="slider">
                        </div>
                        <div class="testimonial__author__description">
                          <h6>Raisa Mariya</h6>
                          <span>CEO</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial__content">
                        <p><i class="fas fa-quote-left"></i>Parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                          odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro<i class="fas fa-quote-right"></i></p>
                      </div>
                        <div class="testimonial__author">
                        <div class="testimonial__author__image">
                          <img src="img\about-item\slider\testimonial-author-2.png" alt="slider">
                        </div>
                        <div class="testimonial__author__description">
                          <h6>Shon smith</h6>
                          <span>Executive</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial__content">
                        <p><i class="fas fa-quote-left"></i>Parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                          odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro<i class="fas fa-quote-right"></i></p>
                      </div>
                        <div class="testimonial__author">
                        <div class="testimonial__author__image">
                          <img src="img\about-item\slider\testimonial-author-3.png" alt="slider">
                        </div>
                        <div class="testimonial__author__description">
                          <h6>David Miller</h6>
                          <span>President</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
              </div>
        </div>
      </div>
    </section>
    <!-- testimonials end -->
    <!-- hot line start -->
    <section class="about-cta">
      <div class="container-fluid">
        <div class="row">
          <div class="col-1-of-1">
            <div class="mid--section">
            <h3 class="about-cta__header">
              NEED HELP FOR YOUR
              <span class="color--theme">FINANCIAL CONSULTING ?</span>
            </h3>
            <p class="about-team--text">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
									aperiam, eaque ipsa Neque.</p>

              <div class="calltoaction">
                <span class="calltoaction--icon"><i class="fas fa-tty"></i></span>
                <a href="" class="calltoaction--link">+9779854123485</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hot line end -->
    <!-- footer start -->
    @include('Front.Include.footer')

   <!-- footer end -->
    <!-- script start -->
    @include('Front.Include.script')

      <script>
      var text = ["Future","Business","Success"],
          counts = 0;
      function loaderBanner(){
      document.getElementById("change-text").innerHTML = text[counts];
      counts++;
      if(counts == 3){ counts = 0;}

      }
      setInterval(loaderBanner,2000);
    </script>
    <script src="js\vendors\owl.carousel.min.js"></script>
    <script>
        $('.testimonial-carousel').owlCarousel({
      loop:true,
      margin:0,
      nav:false,
      dots:false,
      autoplay:true,
      autoplayTimeout:4000,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
    </script>
    <!-- script end -->
  </body>
</html>
