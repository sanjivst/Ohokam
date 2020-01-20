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
         <style>
            .img_user_edit{
                width:160px;
                height:80px;
                overflow:hidden;
            }
            .img-circle{
                width:100%;
                height:100%;
                overflow:hidden;
            }
            .color_yellow{
                background: #ffc400;
                color:#222;
            }
            </style>

  </head>

  <body class="edit-post">
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
           <h3>Edit-Post</h3>
           <div class="breadcrumb">
             <ul>
               <li>
                 <a href="./">Home</a>
               </li>
               <li>
                 <a href="" class="active"><span>&#47</span>Edit-Post</a>
               </li>
             </ul>
           </div>
         </div>
        </div>
      </div>
    </section>
    <!-- banner end -->
    <!-- edit page  start -->
    <section class="edit-project professional-user">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1-of-1">
                <div class="nacc__item">
                          <h3 class="main--header">Edit Post/Repost</h3>    
                          <form action="">
                              <div class="task__contract clearfix">
                              <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                        <div class="project__icon">
                                        <div class=" img_user_edit img-thumbnail">
                                          <img src="img/05.png" class="avatar img-circle" alt="avatar">
                                          <label class="file__image--label" for="file--profile"><i class="far fa-edit"></i></label>
                                        </div>
                                        <input type="file" id="file--profile"  class="file__image text-center center-block file-upload">
                                        </div>
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Project Name</p>
                                          <input  type="text" placeholder="Accounting System" value="Project Accounting System">
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Company Name</p>
                                          <input type="Text" placeholder="Heaven Maker group" value="Freelancer.com">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Location</p>
                                          <input type="text" placeholder="Kathmandu,Nepal" value="Kathmandu,Nepal">
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Industry</p>
                                          <input type="text" placeholder="IT &amp; Telecomunication" value="IT &amp; Telecomunication">
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
                                          <input type="text" placeholder="At least 2 year" value="At least 2 year">
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
                                          <input type="text" placeholder="10 days" value="10 days">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Salary Range(NRP)</p>
                                          <input type="text" placeholder="40,000 - 60,000" value="40,000 - 60,000">
                                      </fieldset>
                                  </div>
                                  <fieldset class="input__message">
                                      <p class="input__text">Your Message</p>
                                      <textarea name="" rows="2"></textarea>
                                  </fieldset>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="Post">
                                      </fieldset>
                              </div>
                          </form>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- edit page  end -->
    <!-- footer start -->
   <?php 
    include('include/footer.php');
   ?>
   <!-- footer end -->
    <!-- script start -->
    <?php
    include('include/script.php');
    ?>
    <script src="js/image.js">
                    </script>
    <!-- script end -->
  </body>
</html>
