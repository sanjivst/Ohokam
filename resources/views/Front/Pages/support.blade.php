<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    @include('Front.Include.meta')

      <title>HR|Heavenmaker</title>

      @include('Front.Include.head')

     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  </head>

  <body class="support">
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
           <h3 >Support</h3>
           <div class="breadcrumb">
             <ul>
               <li>
                 <a href="./">Home</a>
               </li>
               <li>
                 <a href="" class="active">Support</a>
               </li>
             </ul>
           </div>
         </div>
        </div>
      </div>
    </section>
    <!-- banner end -->
    <!-- Support page start -->
    <section class="support-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1-of-1">
                   <div class="support-page-header">
                        <h4 class="main--header">
                            Search By Query?
                        </h4>
                        <form action="">
                            <input type="text" placeholder="Need fast help?Try asking your question here.">
                            <label for="support-search">
                                <input id="support-search" class="join--btn" type="submit" value="Search">
                            </label>
                        </form>
                   </div>
                   <div class="Query-list">
                       <h4 class="main--header">Frequently Asked Question</h4>
                            <div class="accordion">
                                <div class="accordion-item">
                                <a>Why is the moon sometimes out during the day?</a>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <a>Why is the sky blue? Why is the moon sometimes out during the day?</a>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <a>Will we ever discover aliens?</a>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <a>How much does the Earth weigh?How do airplanes stay up? Why is the moon sometimes out during the day?</a>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <a>How do airplanes stay up?</a>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                                </div>
                            </div>
                   </div>
                   <div class="helpful clearfix">
                       <p>Wasn't this answer helpful?</p>
                       <a href="./contact.php">Contact Us<i class="fas fa-chevron-right"></i></a>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Support page end -->
    <!-- footer start -->

    @include('Front.Include.footer')

   <!-- footer end -->
    <!-- script start -->
    @include('Front.Include.script')
    <script>
        const items = document.querySelectorAll(".accordion a");

function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
        </script>
    <!-- script end -->
  </body>
</html>
