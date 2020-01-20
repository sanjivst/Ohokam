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

  <body class="user professional-user">
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
           <h3>Hr-heavenmaker's user</h3>
           <div class="breadcrumb">
             <ul>
               <li>
                 <a href="./">Home</a>
               </li>
               <li>
                 <a href="" class="active"><span>&#47</span>UserName</a>
               </li>
             </ul>
           </div>
         </div>
        </div>
      </div>
    </section>
    <!-- banner end -->
    <!-- professional list start -->
    <section class="privacy">
      <div class="container-fluid">
          <div class="row">
            <div class="naccs">
                <div class="grid">
                <div class="col-12-of-4">
                <div class="profile">
                    <div class="professional__image">
                      <div class="professional__image--face">
                          <div class=" img_user_edit img-thumbnail">
                            <img src="img\applicant\face-2.png" class="avatar img-circle" alt="avatar">
                            <label class="file__image--label" for="file--profile"><i class="far fa-edit"></i></label>
                          </div>
                          <input type="file" id="file--profile"  class=" file__image text-center center-block file-upload">
                        </div>
                        <a href="./professional.php" class="professional__name">
                            Jasmine Olson
                        </a>
                        <div class="professional__rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="professional__button clearfix menu">
                          <div class="btn--success btn--featured active">
                            Candidates History
                          </div>
                          <div class="btn--danger btn--featured ">
                            Post History
                          </div>
                          <div class="btn--warning btn--featured ">
                              Post Jobs
                        </div>
                    </div>
                    <div class="professional__details">
                        <div class="professional__details--widget toggle-content-client">
                            <p class="professional__text login-trigger">Name : <span>Jasmine Olson</span> <a class="user__edit "><i class="fas fa-pencil-alt"></i> Edit</a></p>
                            <form class="login-content" style="display:none;">
                                <div class="content">
                                  <p class="text__form">First Name : <input type="text" value='Jasmine'></p>
                                  <p class="text__form">Middle Name : <input type="text"></p>
                                  <p class="text__form">last Name : <input type="text" value='Olson'></p>
                                </div>
                                <input type="text" class="join--btn" value="Submit">
                            </form>
                            <p class="professional__text">Assigned Jobs : <span>26</span></p>
                            <p class="professional__text">Hired Candidates : <span>10</span></p>
                            <p class="professional__text login-trigger">Address : <span>San Francisco, California</span><a  class="user__edit"><i class="fas fa-pencil-alt"></i> Edit</a></p>
                              <form class="login-content" style="display:none;">
                                  <div class="content">
                                    <p class="text__form">Address : <input type="text" value="San Francisco, California"></p>
                                  </div>
                                  <input type="text" class="join--btn" value="Submit">
                              </form>
                            <p class="professional__text login-trigger">Mobile No : <span>9849875325</span><a class="user__edit"><i class="fas fa-pencil-alt"></i> Edit</a></p>
                              <form class="login-content" style="display:none;">
                                  <div class="content">
                                    <p class="text__form">Mobile No : <input type="number" value="9849875325"></p>
                                  </div>
                                  <input type="text" class="join--btn" value="Submit">
                              </form>
                            <p class="professional__text login-trigger">Email Address : <a href="">olsan@gmail.com</a><a  class="user__edit"><i class="fas fa-pencil-alt"></i> Edit</a></p>
                              <form class="login-content u-margin-bottom-null" style="display:none;">
                                  <div class="content">
                                    <p class="text__form">Email Address : <input type="text" value="olsan@gmail.com"></p>
                                  </div>
                                  <input type="text" class="join--btn " value="Submit">
                              </form>
                        </div>
                        <div class="toogle-details">
                            <a class="candidat-toggle candidat-toggle--name"><i class="fas fa-chevron-down"></i><span>Show More</span></a>
                            </div>
                    </div>
                </div>
                </div>
                <div class="col-12-of-8">
                  <ul class="nacc">
                    <li class="active nacc__list" >
                      
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header" id="history__title">Assigned Jobs</h3> 
                          <div class="container__user" onclick="onToggle('history-1','history-2','history__title','toggle-container')">
                            <div class="inner-container">
                              <div class="toggle">
                                <p>History</p>
                              </div>
                              <div class="toggle">
                                <p>Assigned Jobs</p>
                                </div>
                            </div>
                            <div class="inner-container" id='toggle-container' onclick="onToggle('history-1','history-2','history__title','toggle-container')" >
                              <div class="toggle">
                                <p>History</p>
                              </div>
                              <div class="toggle">
                                  <p>Assigned Jobs</p>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div action="" id="history-1" class="history__form active">
                            <div class="task__contract clearfix">
                                <div class="header__jobs clearfix">
                                  <div class="col-3-of-12">
                                    <h5 class="header__title">
                                      Assigned Jobs
                                    </h5>
                                  </div>
                                  <div class="col-6-of-12">
                                    <div class="search--content">
                                      <input type="text" placeholder="Search">
                                      <button><i class="fa fa-search"></i></button>
                                    </div>
                                  </div>
                                  <div class="col-3-of-12">
                                    <h5 class="deadline__task">
                                      Days Left
                                    </h5>
                                  </div>
                                </div>
                                <div class="assigned__task">
                                  <ul class="assigned__list">
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/applicant/aplicant-img-1.jpg" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Francisco Da Silva
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><b>Budget :</b> 5000K</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Completed :</b> 40%</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Query :</b> 3</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <h5 class="deadline">
                                          25
                                        </h5>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/applicant/face-4.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Francisco Da Silva
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><b>Budget :</b> 5000K</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Completed :</b> 40%</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Query :</b> 3</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <h5 class="deadline">
                                          25
                                        </h5>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/applicant/face-3.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Francisco Da Silva
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><b>Budget :</b> 5000K</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Completed :</b> 40%</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Query :</b> 3</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <h5 class="deadline">
                                          25
                                        </h5>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/applicant/face-2.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Francisco Da Silva
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><b>Budget :</b> 5000K</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Completed :</b> 40%</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Query :</b> 3</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <h5 class="deadline">
                                          25
                                        </h5>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/applicant/aplicant-img-1.jpg" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Francisco Da Silva
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><b>Budget :</b> 5000K</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Completed :</b> 40%</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Query :</b> 3</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <h5 class="deadline">
                                          25
                                        </h5>
                                      </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                        <div action="" id="history-2" class="history__form">
                            <div class="task__contract clearfix">
                                <div class="header__jobs clearfix">
                                  <div class="col-3-of-12">
                                    <h5 class="header__title">
                                      Top Professional 
                                    </h5>
                                  </div>
                                  <div class="col-6-of-12">
                                    <div class="search--content">
                                      <input type="text" placeholder="Search">
                                      <button><i class="fa fa-search"></i></button>
                                    </div>
                                  </div>
                                  <div class="col-3-of-12">
                                    <h5 class="deadline__task">
                                      Rehire
                                    </h5>
                                  </div>
                                </div>
                                <div class="assigned__task">
                                  <ul class="assigned__list">
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                        <div class="col-3-of-12">
                                          <a href="./professionals.php" class="company__image">
                                            <img src="img/applicant/aplicant-img-1.jpg" alt="img">
                                          </a>
                                        </div>
                                        <div class="col-6-of-12">
                                          <div class="assigned__details">
                                            <h5 class="assigned__details--title">
                                              Francisco Da Silva
                                            </h5>
                                            <a href="#" class="company--name">Web Developer at Highest Dreams Inc</a>
                                            <div class="company__location--details">
                                              <ul class="company__location--list">
                                                <li class="company__location--item">
                                                  <p class="location"><i class="fas fa-map-marker-alt"></i> Manila,Philippiness</p>
                                                </li>
                                                <li class="company__location--item">
                                                <p class="location"><b>Rate : </b>5</p>
                                                </li>
                                                <li class="company__location--item">
                                                  <p class="location"><b>Projects :</b> 48</p>
                                                </li>
                                                <li class="company__location--item">
                                                  <p class="location"><b>Pre-selected :</b> 324</p>
                                              </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-3-of-12 hire__history">
                                          <div class="hire__btn">
                                            <a href="./contact-candidate.php" class="join--btn">Hire Me</a>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/applicant/face-4.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Francisco Da Silva
                                          </h5>
                                          <a href="#" class="company--name">Web Developer at Highest Dreams Inc</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Manila,Philippiness</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Rate :</b> 5</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Projects :</b> 48</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Pre-selected :</b> 324</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="hire__btn">
                                          <a href="./contact-candidate.php" class="join--btn">Hire Me</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/applicant/face-3.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Francisco Da Silva
                                          </h5>
                                          <a href="#" class="company--name">Web Developer at Highest Dreams Inc</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Manila,Philippiness</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Rate : </b>5</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Projects : </b>48</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Pre-selected : </b> 324</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="hire__btn">
                                          <a href="./contact-candidate.php" class="join--btn">Hire Me</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                        <div class="row">
                                        <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/applicant/face-2.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Francisco Da Silva
                                          </h5>
                                          <a href="#" class="company--name">Web Developer at Highest Dreams Inc</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Manila,Philippiness</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Rate :</b> 5</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Projects :</b> 48</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Pre-selected :</b> 324</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="hire__btn">
                                          <a href="./contact-candidate.php" class="join--btn">Hire Me</a>
                                        </div>
                                      </div>
                                        </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                        <div class="row">
                                        <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/applicant/aplicant-img-1.jpg" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Francisco Da Silva
                                          </h5>
                                          <a href="#" class="company--name">Web Developer at Highest Dreams Inc</a>
                                          <div class="company__location--details">
                                          <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Manila,Philippiness</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Rate :</b> 5</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Projects :</b> 48</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Pre-selected :</b> 324</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="hire__btn">
                                          <a href="./contact-candidate.php" class="join--btn">Hire Me</a>
                                        </div>
                                      </div>
                                        </div>
                                    </li>
                                  </ul>
                                </div>
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
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header" id="post__title">Recent Post</h3> 
                          <div class="container__user" onclick="onToggle('post-1','post-2','post__title','toggle-container2')">
                            <div class="inner-container">
                              <div class="toggle">
                                <p>Repost</p>
                              </div>
                              <div class="toggle">
                                <p>Recent Post</p>
                                </div>
                            </div>
                            <div class="inner-container" id='toggle-container2' onclick="onToggle('post-1','post-2','post__title','toggle-container2')" >
                              <div class="toggle">
                                <p>Repost</p>
                              </div>
                              <div class="toggle">
                                  <p>recent Post</p>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div action="" id="post-1" class="history__form active">
                            <div class="task__contract clearfix">
                                <div class="header__jobs clearfix">
                                  <div class="col-3-of-12">
                                    <h5 class="header__title">
                                      Project Logo
                                    </h5>
                                  </div>
                                  <div class="col-6-of-12">
                                    <div class="search--content">
                                      <input type="text" placeholder="Search">
                                      <button><i class="fa fa-search"></i></button>
                                    </div>
                                  </div>
                                  <div class="col-3-of-12">
                                    <h5 class="deadline__task">
                                      Options
                                    </h5>
                                  </div>
                                </div>
                                <div class="assigned__task">
                                  <ul class="assigned__list">
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="project__image ">
                                          <img src="img/01.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Freelancer.com
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                          <a class="join--btn" href="./edit-post.php">Edit</a>
                                          <a class="join--btn">Delete</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/05.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Wotif pvt ltd
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                          <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                        <a class="join--btn" href="./edit-post.php">Edit</a>
                                        <a class="join--btn">Delete</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img\18.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Cisco pvt ltd
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                          <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                          <a class="join--btn" href="./edit-post.php">Edit</a>
                                          <a class="join--btn">Delete</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                        <div class="row">
                                        <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img\12.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Airbnb pvt ltd
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                          <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Budget(k) :</b> 250</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                          <a class="join--btn" href="./edit-post.php">Edit</a>
                                          <a class="join--btn">Delete</a>
                                        </div>
                                      </div>
                                        </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                        <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img\10.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Merck pvt ltd
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                          <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                          <a class="join--btn" href="./edit-post.php">Edit</a>
                                          <a class="join--btn">Delete</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                        <div action="" id="post-2" class="history__form">
                            <div class="task__contract clearfix">
                                <div class="header__jobs clearfix">
                                  <div class="col-3-of-12">
                                    <h5 class="header__title">
                                      Project Logo
                                    </h5>
                                  </div>
                                  <div class="col-6-of-12">
                                    <div class="search--content">
                                      <input type="text" placeholder="Search">
                                      <button><i class="fa fa-search"></i></button>
                                    </div>
                                  </div>
                                  <div class="col-3-of-12">
                                    <h5 class="deadline__task">
                                      Options
                                    </h5>
                                  </div>
                                </div>
                                <div class="assigned__task">
                                  <ul class="assigned__list">
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="project__image ">
                                          <img src="img/01.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Freelancer.com
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                            <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                          <a class="join--btn" href="./edit-post.php">Repost</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img/05.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Wotif pvt ltd
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                          <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                        <a class="join--btn" href="./edit-post.php">Repost</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                      <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img\18.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Cisco pvt ltd
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                          <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                          <a class="join--btn" href="./edit-post.php">Repost</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                        <div class="row">
                                        <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img\12.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Airbnb pvt ltd
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                          <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Budget(k) :</b> 250</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                          <a class="join--btn" href="./edit-post.php">Repost</a>
                                        </div>
                                      </div>
                                        </div>
                                    </li>
                                    <li class="assigned__item clearfix">
                                      <div class="row">
                                        <div class="col-3-of-12">
                                        <a href="./professionals.php" class="company__image">
                                          <img src="img\10.png" alt="img">
                                        </a>
                                      </div>
                                      <div class="col-6-of-12">
                                        <div class="assigned__details">
                                          <h5 class="assigned__details--title">
                                            Merck pvt ltd
                                          </h5>
                                          <a href="#" class="company--name">Project Accounting System</a>
                                          <div class="company__location--details">
                                          <ul class="company__location--list">
                                              <li class="company__location--item">
                                                <p class="location"><span class="post__views">Views: 1</span></p>
                                              </li>
                                              <li class="company__location--item">
                                                <p class="location"><b>Deadline :</b> 30days from now</p>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-3-of-12 hire__history">
                                        <div class="deadline__project">
                                          <a class="join--btn" href="./edit-post.php">Repost</a>
                                        </div>
                                      </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
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
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                          <h3 class="main--header">Create Post</h3>    
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Task Contract ( <span>this agrrement based on goverment's law</span> )
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt a consectetur aliquid, officiis id adipisci officia. Aliquid molestias, reiciendis nihil voluptate vero doloremque facilis modi eveniet ipsum, non id quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nesciunt voluptate illo neque quaerat deserunt nostrum, dolores cupiditate possimus commodi quae laboriosam rem error! Voluptatibus possimus officia dolore maxime voluptas.</p>  
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Company Name</p>
                                          <input type="Text" placeholder="Heaven Maker group">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Location</p>
                                          <input type="text" placeholder="Kathmandu,Nepal">
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Industry</p>
                                          <input type="text" placeholder="IT & Telecomunication">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Type of Contract</p>
                                          <select name="Type">
                                            <option value="Edu">Full Time</option>
                                            <option value="Trn">Part Time</option>
                                            <option value="Bank">Freelance Time</option>
                                            <option value="Art">Intership</option>
                                          </select>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Work Experience</p>
                                          <input type="text" placeholder="At least 2 year">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Work Permit</p>
                                          <select name="Type">
                                            <option value="Edu">Full Time</option>
                                            <option value="Trn">Part Time</option>
                                            <option value="Bank">Freelance Time</option>
                                          </select>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Date Posted</p>
                                          <input type="text" placeholder="10 days">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Salary Range(NRP)</p>
                                          <input type="text" placeholder="40,000 - 60,000">
                                      </fieldset>
                                  </div>
                                  <fieldset class="input__message">
                                      <p class="input__text">Your Message</p>
                                      <textarea name=""  rows="2"></textarea>
                                  </fieldset>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="Submit">
                                      </fieldset>
                              </div>
                          </form>
                      </div>
                    </li>
                  </ul>
                 
                </div>
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
      <script>
        var toggle = document.querySelector('.container__user');
        var toggleNumber;
        function onToggle(id1,id2,id3,id4) {
          var toggleContainer = document.getElementById(id4);
          var form1 = document.getElementById(id1);
          var form2 = document.getElementById(id2);
          var title = document.getElementById(id3);
          console.log(form1);
          toggleNumber = !toggleNumber;
          if (toggleNumber) {
            toggleContainer.style.clipPath = 'inset(0 0 0 50%)';
            toggleContainer.style.backgroundColor = '#f26f21';
            form1.classList.remove("active");
            form2.classList.add("active");
            title.innerHTML="History";
              if(form1.id == 'post-1'){
                title.innerHTML="Repost";
              }
          } else {
            toggleContainer.style.clipPath = 'inset(0 50% 0 0)';
            toggleContainer.style.backgroundColor = '#00507d';
            
            form1.classList.add("active");
            form2.classList.remove("active");
            title.innerHTML="Assigned Jobs";
            if(form1.id == 'post-1'){
              title.innerHTML="Recent Post";
              }
          }
          console.log(toggleNumber)
        };
      </script>
      <script src="js/image.js">
      </script>
    <!-- script end -->
  </body>
</html>
