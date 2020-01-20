<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
      <?php
      include('include/meta.php');
      ?>
      <title>HR|Heavenmaker</title>
      
      <?php
      include('include/head.php');
      ?>
      <link rel="stylesheet" type="text/css" href="css/vendors/range.css">
    <link rel="stylesheet" type="text/css" href="css/vendors/ionskin.css">
  </head>

  <body class="jobs professionals">
    <!-- model start-->
     <!-- Extra Large modal -->
       <?php
       include('include/model.php');
       ?>
    <!-- model end -->
    <!--nav button start -->
    <?php
    include('include/mobile-nav.php'); 
    ?>
    <!-- nav button end -->
    <!-- header  start-->
   <?php
   include('include/header.php');
   ?>
    <!-- header end -->
    <!-- banner start-->
    <section class="banner-page">
      <div class="container-fluid">
        <div class="row">
         <div class="col-1-of-1">
           <h3>Jobs</h3>
           <div class="breadcrumb">
             <ul>
               <li>
                 <a href="">Home</a>
               </li>
               <li>
                 <a href="" class="active"><span>&#47</span>Jobs</a>
               </li>
             </ul>
           </div>
         </div>
        </div>
      </div>
    </section>
    <!-- banner end -->
    <!-- professional list start -->
    <section class="professional-list">
      <div class="container-fluid">
        <div class="row clearfix">
          <div class="col-12-of-4 search">
            <div class="professional-list-container">
              <div class="professional-list-widget">
                <h5 class="widget-title login-trigger-desktop clearfix">Search </h5>                                
                <h5 class="widget-title login-trigger clearfix">Search <i class="fas fa-chevron-right"></i></h5>
                <div  class="login-content">
                  <div class="login-name clearfix">  
                    <span class="search-tex">I'm looking for a ...</span>
                    <select name="look">
                      <option value="job">Job</option>
                      <option value="saab">Category1</option>
                      <option value="fiat">Category2</option>
                      <option value="audi">Category3</option>
                    </select>
                    <span class="search-tex">in</span>
                    <input type="text" class="u-margin-bottom-small"  placeholder="Location">
                    <input type="text" class="u-margin-bottom-small" placeholder="Industry / Role">
                    <input type="submit" class="join--btn" value="Search">
                  </div> 
                </div>
              </div>
              <div class="professional-list-widget">
                <h5 class="widget-title login-trigger-desktop  clearfix">Filter Results</h5>                
                <h5 class="widget-title login-trigger clearfix">Filter Results <i class="fas fa-chevron-right"></i></h5>
                <div  class="login-content">
                  <div class="login-name clearfix">  
                    <span class="search-tex">By District</span>
                    <select name="district">
                      <option value="ktm">Kathmandu(10)</option>
                      <option value="lt">Lalitpur(20)</option>
                      <option value="bkt">Bhaktapur(06)</option>
                      <option value="btw">Butwal(30)</option>
                    </select>
                    <span class="search-tex">By Industry</span>
                    <select name="industry">
                      <option value="ad">Administration(75)</option>
                      <option value="mf">Manufactoring(100)</option>
                      <option value="fiat">Healthcare & Science(1k)</option>
                      <option value="audi">transportation(52)</option>
                    </select>
                    <span class="search-tex">By Type</span>
                    <select name="Type">
                      <option value="Edu">Education(10)</option>
                      <option value="Trn">Training(30)</option>
                      <option value="Bank">Banking(40)</option>
                      <option value="Art">Art(40)</option>
                    </select>
                    <span class="search-tex">Type of Contract</span>
                    <div class="contract">
                      <div class="checkbox">
                        <input type="checkbox" id="con-1">
                        <label for="con-1"><img src="img/check-box.svg" alt="check">Full-Time</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="con-2">
                        <label for="con-2"><img src="img/check-box.svg" alt="check">Part-Time</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="con-3">
                        <label for="con-3"><img src="img/check-box.svg" alt="check">Freelance-Time</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="con-4">
                        <label for="con-4"><img src="img/check-box.svg" alt="check">Intership</label>
                      </div>
                    </div>
                    <span class="search-tex">Work Experience</span>
                    <div class="work">
                      <div class="checkbox">
                        <input type="checkbox" id="work-1">
                        <label for="work-1"><img src="img/check-box.svg" alt="check">Not Applicable</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="work-2">
                        <label for="work-2"><img src="img/check-box.svg" alt="check">Mid-Senior Level</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="work-3">
                        <label for="work-3"><img src="img/check-box.svg" alt="check">Entry Level</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="work-4">
                        <label for="work-4"><img src="img/check-box.svg" alt="check">Associate</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="work-5">
                        <label for="work-5"><img src="img/check-box.svg" alt="check">Director</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="work-6">
                        <label for="work-6"><img src="img/check-box.svg" alt="check">Executive</label>
                      </div>
                    </div>
                    <span class="search-tex">Work Permit</span>
                    <div class="permit">
                      <div class="checkbox">
                        <input type="checkbox" id="permit-1">
                        <label for="permit-1"><img src="img/check-box.svg" alt="check">Full-Time</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="permit-2">
                        <label for="permit-2"><img src="img/check-box.svg" alt="check">Part-Time</label>
                      </div>
                      <div class="checkbox">
                        <input type="checkbox" id="permit-3">
                        <label for="permit-3"><img src="img/check-box.svg" alt="check">Freelance-Time</label>
                      </div>
                    </div>
                    <span class="search-tex">Date Posted(days)</span>
                    <div class="range-wrap">
                        <input type="text" id="range_28" name="ranger" value="" />
                        <a class="btn-filter">
                            <svg version="1.1" id="Layer_1" class="svgnfil" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="12px" height="12px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:#ffffff;}
                                    </style>
                                <g>
                                    <rect x="10" y="3" class="st0" width="6" height="2"/>
                                    <polygon class="st0" points="3,7 9,7 9,1 3,1 3,3 0,3 0,5 3,5 	"/>
                                    <rect y="11" class="st0" width="6" height="2"/>
                                    <polygon class="st0" points="13,9 7,9 7,15 13,15 13,13 16,13 16,11 13,11 	"/>
                                </g>
                            </svg>
                        </a>
                  </div>
                  <span class="search-tex">Salary Range(NRP)</span>
                    <div class="range-wrap">
                        <input type="text" id="range_29" name="ranger" value="" />
                        <a class="btn-filter">
                            <svg version="1.1" id="Layer_2" class="svgnfil" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="12px" height="12px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:#ffffff;}
                                    </style>
                                <g>
                                    <rect x="10" y="3" class="st0" width="6" height="2"/>
                                    <polygon class="st0" points="3,7 9,7 9,1 3,1 3,3 0,3 0,5 3,5 	"/>
                                    <rect y="11" class="st0" width="6" height="2"/>
                                    <polygon class="st0" points="13,9 7,9 7,15 13,15 13,13 16,13 16,11 13,11 	"/>
                                </g>
                              </svg>
                        </a>
                  </div>
                    <input type="submit" class="join--btn" value="Search">
                  </div> 
              </div>
            </div>
          </div>
        </div>
          <div class="col-12-of-8 candidate">
            <div class="main-title clearfix">
              <div class="main-title-left">
                <h4>Available Jobs</h4>
              </div>
              <div class="main-title-right">
                <select name="Sort">
                   <option value="Sort">Sort By</option>
                      <option value="Name">Name</option>
                      <option value="Type">Type</option>
                      <option value="Date">Date</option>
                    </select>
              </div>
            </div>
            <div class="candidate-description clearfix">
              <div class="candidate-description-image">
                <picture>
                  <img src="img/01.png" alt="img">
                </picture>
              </div>
              <div class="candidate-description-content clearfix">
                <div class="header">
                  <div class="header-left">
                    <h5>Mid Web developer</h5>
                    <a href="#">Freelancer.com ( <span class="jobs__location">Dallu , Kathmandu</span> )</a>
                  </div>
                  <p class="post__job">
                    <span class="post__views">Views: 1</span> |
                    <span class="post__deadline">Deadline: 1 week, 3 days from now</span>
                  </p>
                </div>
                <div class="applicant-details clearfix">
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis magnam quam corrupti, porro animi unde aliquam ex voluptatem at? Molestiae eos dicta tempore culpa optio consequatur aliquam et tenetur exercitationem.
                  </p>
                </div>
              </div>
              <div class="candidate-details">
                  <div class="toggle-content-client">
                    <h5 class="job__title--sub">Basic Job Information</h5>
                    <ul class="description__list">
                      <li>
                        <p class="description__job">
                          Job Category : <span class="description__job--title">IT & Telecommunication</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Job Level : <span class="description__job--title">Senior Level</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          No. of Vacancy/s : <span class="description__job--title">[5]</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Employment Type : <span class="description__job--title">Full Time</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Offered Salary : <span class="description__job--title">NRs.40.000.00 - 60,000.00</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Apply Before (Deadline) : <span class="description__job--title">Aug. 31, 2019 23:55 (2 weeks, 5 days from now)</span>
                        </p>
                      </li>
                    </ul>
                    <h5 class="job__title--sub">Job Description</h5>
                    <p>
                      Cras vehicula urna non justo adipiscing convallis quis et augue. Proin vestibulum,
                      nisl ut lobortis tempus, est nulla lacinia felis, ut gravida enim nibh vel turpis.
                      Vivamus a purus id ipsum tincidunt faucibus non at elit. Duis imperdiet ullamcorper purus,
                      id tempus dui fringilla porta. Sed lacinia risus eu nulla scelerisque tincidunt. Nam ut velit
                      quis felis pretium pulvinar ac in sem. Nullam nec porttitor velit, sed posuere massa. In gravida
                      mattis dolor sit amet lacinia.
                    </p>
                    <div class="skill">
                      <h5>Skill</h5>
                      <div class="skill-list">
                        <ul>
                          <li>
                            <p>Logo design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress7 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>Web Design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress6 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>UX/UI</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress4 progress"></span>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="addtional">
                        <h5>ADDITIONAL SKILLS & EXPERIENCE</h5>
                        <ul>
                          <li>
                            <p>Work Permit</p>
                          </li>
                          <li>
                            <p>5 Years Ecperience</p>
                          </li>
                          <li>
                            <p>MBA</p>
                          </li>
                          <li>
                            <p>Magento</p>
                          </li>
                          <li>
                            <p>Soft Skill</p>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    <div class="apply-share">
                      <ul>
                        <li class="share">
                          <strong>
                            Share:
                          </strong>
                        </li>
                        <li class="facebook-color social"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitt-color social"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest-color social"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="toogle-details">
                      <a class="join--btn candidat-toggle candidat-toggle--name" ><i class="fas fa-chevron-down"></i><span>Show More</span></a>
                      <a class="join--btn " href="">Apply  Now</a>
                    </div>
                </div>
            </div>
            <div class="candidate-description clearfix">
              <div class="candidate-description-image">
                <picture>
                  <img src="img/05.png" alt="img">
                </picture>
              </div>
              <div class="candidate-description-content clearfix">
                <div class="header">
                  <div class="header-left">
                    <h5>Mid Electrician</h5>
                    <a href="#">Wotif pvt ltd ( <span class="jobs__location">Swoyambhu , Kathmandu</span> )</a>
                  </div>
                  <p class="post__job">
                    <span class="post__views">Views: 1</span> |
                    <span class="post__deadline">Deadline: 1 week, 3 days from now</span>
                  </p>
                </div>
                <div class="applicant-details clearfix">
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis magnam quam corrupti, porro animi unde aliquam ex voluptatem at? Molestiae eos dicta tempore culpa optio consequatur aliquam et tenetur exercitationem.
                  </p>
                </div>
              </div>
              <div class="candidate-details">
                <div class="toggle-content-client">
                    <h5 class="job__title--sub">Basic Job Information</h5>
                    <ul class="description__list">
                      <li>
                        <p class="description__job">
                          Job Category : <span class="description__job--title">IT & Telecommunication</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Job Level : <span class="description__job--title">Senior Level</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          No. of Vacancy/s : <span class="description__job--title">[5]</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Employment Type : <span class="description__job--title">Full Time</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Offered Salary : <span class="description__job--title">NRs.40.000.00 - 60,000.00</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Apply Before (Deadline) : <span class="description__job--title">Aug. 31, 2019 23:55 (2 weeks, 5 days from now)</span>
                        </p>
                      </li>
                    </ul>
                    <h5 class="job__title--sub">Job Description</h5>
                    <p>
                      Cras vehicula urna non justo adipiscing convallis quis et augue. Proin vestibulum,
                      nisl ut lobortis tempus, est nulla lacinia felis, ut gravida enim nibh vel turpis.
                      Vivamus a purus id ipsum tincidunt faucibus non at elit. Duis imperdiet ullamcorper purus,
                      id tempus dui fringilla porta. Sed lacinia risus eu nulla scelerisque tincidunt. Nam ut velit
                      quis felis pretium pulvinar ac in sem. Nullam nec porttitor velit, sed posuere massa. In gravida
                      mattis dolor sit amet lacinia.
                    </p>
                    <div class="skill">
                      <h5>Skill</h5>
                      <div class="skill-list">
                        <ul>
                          <li>
                            <p>Logo design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress7 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>Web Design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress6 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>UX/UI</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress4 progress"></span>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="addtional">
                        <h5>ADDITIONAL SKILLS & EXPERIENCE</h5>
                        <ul>
                          <li>
                            <p>Work Permit</p>
                          </li>
                          <li>
                            <p>5 Years Ecperience</p>
                          </li>
                          <li>
                            <p>MBA</p>
                          </li>
                          <li>
                            <p>Magento</p>
                          </li>
                          <li>
                            <p>Soft Skill</p>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    <div class="apply-share">
                      <ul>
                        <li class="share">
                          <strong>
                            Share:
                          </strong>
                        </li>
                        <li class="facebook-color social"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitt-color social"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest-color social"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="toogle-details">
                      <a class="join--btn candidat-toggle candidat-toggle--name" ><i class="fas fa-chevron-down"></i><span>Show More</span></a>
                      <a class="join--btn" href="">Apply  Now</a>
                    </div>
                </div>
            </div>
            <div class="candidate-description clearfix">
              <div class="candidate-description-image">
                <picture>
                  <img src="img\18.png" alt="img">
                </picture>
              </div>
              <div class="candidate-description-content clearfix">
                <div class="header">
                  <div class="header-left">
                    <h5>Network Administration</h5>
                    <a href="#">Cisco pvt ltd ( <span class="jobs__location">Newbanehwor , Kathmandu</span> )</a>
                  </div>
                  <p class="post__job">
                    <span class="post__views">Views: 1</span> |
                    <span class="post__deadline">Deadline: 1 week, 3 days from now</span>
                  </p>
                </div>
                <div class="applicant-details clearfix">
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis magnam quam corrupti, porro animi unde aliquam ex voluptatem at? Molestiae eos dicta tempore culpa optio consequatur aliquam et tenetur exercitationem.
                  </p>
                </div>
              </div>
              <div class="candidate-details">
                  <div class="toggle-content-client">
                    <h5 class="job__title--sub">Basic Job Information</h5>
                    <ul class="description__list">
                      <li>
                        <p class="description__job">
                          Job Category : <span class="description__job--title">IT & Telecommunication</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Job Level : <span class="description__job--title">Senior Level</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          No. of Vacancy/s : <span class="description__job--title">[5]</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Employment Type : <span class="description__job--title">Full Time</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Offered Salary : <span class="description__job--title">NRs.40.000.00 - 60,000.00</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Apply Before (Deadline) : <span class="description__job--title">Aug. 31, 2019 23:55 (2 weeks, 5 days from now)</span>
                        </p>
                      </li>
                    </ul>
                    <h5 class="job__title--sub">Job Description</h5>
                    <p>
                      Cras vehicula urna non justo adipiscing convallis quis et augue. Proin vestibulum,
                      nisl ut lobortis tempus, est nulla lacinia felis, ut gravida enim nibh vel turpis.
                      Vivamus a purus id ipsum tincidunt faucibus non at elit. Duis imperdiet ullamcorper purus,
                      id tempus dui fringilla porta. Sed lacinia risus eu nulla scelerisque tincidunt. Nam ut velit
                      quis felis pretium pulvinar ac in sem. Nullam nec porttitor velit, sed posuere massa. In gravida
                      mattis dolor sit amet lacinia.
                    </p>
                    <div class="skill">
                      <h5>Skill</h5>
                      <div class="skill-list">
                        <ul>
                          <li>
                            <p>Logo design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress7 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>Web Design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress6 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>UX/UI</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress4 progress"></span>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="addtional">
                        <h5>ADDITIONAL SKILLS & EXPERIENCE</h5>
                        <ul>
                          <li>
                            <p>Work Permit</p>
                          </li>
                          <li>
                            <p>5 Years Ecperience</p>
                          </li>
                          <li>
                            <p>MBA</p>
                          </li>
                          <li>
                            <p>Magento</p>
                          </li>
                          <li>
                            <p>Soft Skill</p>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    <div class="apply-share">
                      <ul>
                        <li class="share">
                          <strong>
                            Share:
                          </strong>
                        </li>
                        <li class="facebook-color social"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitt-color social"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest-color social"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="toogle-details">
                      <a class="join--btn candidat-toggle candidat-toggle--name" ><i class="fas fa-chevron-down"></i><span>Show More</span></a>
                      <a class="join--btn" href="">Apply  Now</a>
                    </div>
                </div>
            </div>
            <div class="candidate-description clearfix">
              <div class="candidate-description-image">
                <picture>
                  <img src="img\12.png" alt="img">
                </picture>
              </div>
              <div class="candidate-description-content clearfix">
                <div class="header">
                  <div class="header-left">
                    <h5>Senior Web developer</h5>
                    <a href="#">Airbnb pvt ltd ( <span class="jobs__location">Balaju , Kathmandu</span> )</a>
                  </div>
                  <p class="post__job">
                    <span class="post__views">Views: 1</span> |
                    <span class="post__deadline">Deadline: 1 week, 3 days from now</span>
                  </p>
                </div>
                <div class="applicant-details clearfix">
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis magnam quam corrupti, porro animi unde aliquam ex voluptatem at? Molestiae eos dicta tempore culpa optio consequatur aliquam et tenetur exercitationem.
                  </p>
                </div>
              </div>
              <div class="candidate-details">
                  <div class="toggle-content-client">
                    <h5 class="job__title--sub">Basic Job Information</h5>
                    <ul class="description__list">
                      <li>
                        <p class="description__job">
                          Job Category : <span class="description__job--title">IT & Telecommunication</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Job Level : <span class="description__job--title">Senior Level</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          No. of Vacancy/s : <span class="description__job--title">[5]</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Employment Type : <span class="description__job--title">Full Time</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Offered Salary : <span class="description__job--title">NRs.40.000.00 - 60,000.00</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Apply Before (Deadline) : <span class="description__job--title">Aug. 31, 2019 23:55 (2 weeks, 5 days from now)</span>
                        </p>
                      </li>
                    </ul>
                    <h5 class="job__title--sub">Job Description</h5>
                    <p>
                      Cras vehicula urna non justo adipiscing convallis quis et augue. Proin vestibulum,
                      nisl ut lobortis tempus, est nulla lacinia felis, ut gravida enim nibh vel turpis.
                      Vivamus a purus id ipsum tincidunt faucibus non at elit. Duis imperdiet ullamcorper purus,
                      id tempus dui fringilla porta. Sed lacinia risus eu nulla scelerisque tincidunt. Nam ut velit
                      quis felis pretium pulvinar ac in sem. Nullam nec porttitor velit, sed posuere massa. In gravida
                      mattis dolor sit amet lacinia.
                    </p>
                    <div class="skill">
                      <h5>Skill</h5>
                      <div class="skill-list">
                        <ul>
                          <li>
                            <p>Logo design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress7 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>Web Design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress6 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>UX/UI</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress4 progress"></span>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="addtional">
                        <h5>ADDITIONAL SKILLS & EXPERIENCE</h5>
                        <ul>
                          <li>
                            <p>Work Permit</p>
                          </li>
                          <li>
                            <p>5 Years Ecperience</p>
                          </li>
                          <li>
                            <p>MBA</p>
                          </li>
                          <li>
                            <p>Magento</p>
                          </li>
                          <li>
                            <p>Soft Skill</p>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    <div class="apply-share">
                      <ul>
                        <li class="share">
                          <strong>
                            Share:
                          </strong>
                        </li>
                        <li class="facebook-color social"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitt-color social"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest-color social"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="toogle-details">
                      <a class="join--btn candidat-toggle candidat-toggle--name" ><i class="fas fa-chevron-down"></i><span>Show More</span></a>
                      <a class="join--btn " href="">Apply  Now</a>
                    </div>
                </div>
            </div>
            <div class="candidate-description clearfix">
              <div class="candidate-description-image">
                <picture>
                  <img src="img\10.png" alt="img">
                </picture>
              </div>
              <div class="candidate-description-content clearfix">
                <div class="header">
                  <div class="header-left">
                    <h5>Senior Web developer</h5>
                    <a href="#">Merck pvt ltd ( <span class="jobs__location">Putali Sadak , Kathmandu</span> )</a>
                  </div>
                  <p class="post__job">
                    <span class="post__views">Views: 1</span> |
                    <span class="post__deadline">Deadline: 1 week, 3 days from now</span>
                  </p>
                </div>
                <div class="applicant-details clearfix">
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis magnam quam corrupti, porro animi unde aliquam ex voluptatem at? Molestiae eos dicta tempore culpa optio consequatur aliquam et tenetur exercitationem.
                  </p>
                </div>
              </div>
              <div class="candidate-details">
                  <div class="toggle-content-client">
                    <h5 class="job__title--sub">Basic Job Information</h5>
                    <ul class="description__list">
                      <li>
                        <p class="description__job">
                          Job Category : <span class="description__job--title">IT & Telecommunication</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Job Level : <span class="description__job--title">Senior Level</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          No. of Vacancy/s : <span class="description__job--title">[5]</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Employment Type : <span class="description__job--title">Full Time</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Offered Salary : <span class="description__job--title">NRs.40.000.00 - 60,000.00</span>
                        </p>
                      </li>
                      <li >
                        <p class="description__job">
                          Apply Before (Deadline) : <span class="description__job--title">Aug. 31, 2019 23:55 (2 weeks, 5 days from now)</span>
                        </p>
                      </li>
                    </ul>
                    <h5 class="job__title--sub">Job Description</h5>
                    <p>
                      Cras vehicula urna non justo adipiscing convallis quis et augue. Proin vestibulum,
                      nisl ut lobortis tempus, est nulla lacinia felis, ut gravida enim nibh vel turpis.
                      Vivamus a purus id ipsum tincidunt faucibus non at elit. Duis imperdiet ullamcorper purus,
                      id tempus dui fringilla porta. Sed lacinia risus eu nulla scelerisque tincidunt. Nam ut velit
                      quis felis pretium pulvinar ac in sem. Nullam nec porttitor velit, sed posuere massa. In gravida
                      mattis dolor sit amet lacinia.
                    </p>
                    <div class="skill">
                      <h5>Skill</h5>
                      <div class="skill-list">
                        <ul>
                          <li>
                            <p>Logo design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress7 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>Web Design</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress6 progress"></span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <p>UX/UI</p>
                            <div class="progress-bar">
                              <div class="progress-bar-inner">
                                <span class="progress4 progress"></span>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="addtional">
                        <h5>ADDITIONAL SKILLS & EXPERIENCE</h5>
                        <ul>
                          <li>
                            <p>Work Permit</p>
                          </li>
                          <li>
                            <p>5 Years Ecperience</p>
                          </li>
                          <li>
                            <p>MBA</p>
                          </li>
                          <li>
                            <p>Magento</p>
                          </li>
                          <li>
                            <p>Soft Skill</p>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    <div class="apply-share">
                      <ul>
                        <li class="share">
                          <strong>
                            Share:
                          </strong>
                        </li>
                        <li class="facebook-color social"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitt-color social"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest-color social"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="toogle-details">
                      <a class="join--btn candidat-toggle candidat-toggle--name" ><i class="fas fa-chevron-down"></i><span>Show More</span></a>
                      <a class="join--btn " href="">Apply  Now</a>
                    </div>
                </div>
            </div>
            <div class="pagination-content clearfix">
              <p>Displaying 10 out of 50 items</p>
              <nav>
                <ul class="list-inline">
                  <li><a class="join--btn first" href="#">first</a></li>
                  <li><a class="join--btn previous" href="#">Previous</a></li>
                  <li class="active"><a class="number" href="#">1</a></li>
                  <li><a class="number" href="#">2</a></li>
                  <li><a class="number" href="#">3</a></li>
                  <li><a class="number" href="#">4</a></li>
                  <li><a class="join--btn next" href="#">Next</a></li>
                  <li><a class="join--btn last" href="#">Last</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- professional list end -->
    <!-- footer start -->
   <?php 
    include('include/footer.php');
   ?>
   <!-- footer end -->
    <!-- script start -->
    <?php
    include('include/script.php');
    ?>
    <script src="js/vendors/range.min.js"></script>
    <script>
       $("#range_28").ionRangeSlider({
            type: "double",
            min: 1 ,
            max: 60 ,
            from: 1,
            to: 60,
            from_min: 1,
            from_max: 60,
            to_min: 1,
            to_max: 60
        });
        $("#range_29").ionRangeSlider({
            type: "double",
            min: 1 ,
            max: 100000 ,
            from: 1,
            to: 100000,
            from_min: 1,
            from_max: 100000,
            to_min: 1,
            to_max: 100000
        });
      </script>
    <!-- script end -->
  </body>
</html>
