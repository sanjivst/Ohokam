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

  <body class="professional-user professional-edit">
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
           <h3>Hr-heavenmaker's Professional</h3>
           <div class="breadcrumb">
             <ul>
               <li>
                 <a href="./">Home</a>
               </li>
               <li>
                 <a href="" class="active"><span>&#47</span>Professional-Edit</a>
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
                 
                </div>
                <div class="professional__button clearfix menu">
                          <div class=" btn--featured active">
                            General <i class="fas fa-chevron-right"></i>
                          </div>
                          <div class=" btn--featured ">
                            Service <i class="fas fa-chevron-right"></i>
                          </div>
                          <div class=" btn--featured ">
                              Skill <i class="fas fa-chevron-right"></i>
                          </div>
                          <div class=" btn--featured ">
                            Experience <i class="fas fa-chevron-right"></i>
                          </div>
                          <div class=" btn--featured ">
                            Education <i class="fas fa-chevron-right"></i>
                          </div>
                          <div class=" btn--featured ">
                            AWARDS & CERTIFICATIONS <i class="fas fa-chevron-right"></i>
                          </div>
                          <div class=" btn--featured ">
                            CRAFTED PROJECTS <i class="fas fa-chevron-right"></i>
                          </div>
                          <div class=" btn--featured ">
                            Your Documents<i class="fas fa-chevron-right"></i>
                          </div>
                          <div class=" btn--featured ">
                            Upload CV <i class="fas fa-chevron-right"></i>
                          </div>
                          <div class=" btn--featured ">
                            Social links <i class="fas fa-chevron-right"></i>
                          </div>
                    </div>
                </div>
                <div class="col-12-of-8">
                  <ul class="nacc">
                    <li class="active nacc__list" >
                      
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header" >General</h3> 
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                        Message 
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Name</p>
                                          <input type="Text"  value="jasmine Olson">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Company Name</p>
                                          <input type="text" value="Web Developer at Highest Dreams Inc">
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Location</p>
                                          <input type="text" value="SAN FRANCISCO, CALIFORNIA">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">EMPLOYMENT STATUS</p>
                                          <select name="Type">
                                            <option value="Edu">EMPLOYED</option>
                                            <option value="Trn">UnEMPLOYED</option>
                                          </select>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">NATIONALITY</p>
                                          <input type="text" value="Nepali">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">GENDER</p>
                                          <select name="Type">
                                            <option value="Edu">Male</option>
                                            <option value="Trn">Female</option>
                                          </select>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">YEARS OF EXPERIENCE</p>
                                          <input type="text" value="10">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">WORK PERMIT</p>
                                          <select name="Type">
                                            <option value="Edu">Full Time</option>
                                            <option value="Trn">Part-Time</option>
                                            <option value="Trn">Freelance-Time</option>
                                          </select>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Degree</p>
                                          <input type="text" value="MBA">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Website</p>
                                          <input type="text" value="www.businessweb.com">
                                      </fieldset>
                                  </div>
                                  <fieldset class="input__message">
                                      <p class="input__text">Your Message</p>
                                      <textarea name=""  rows="2"></textarea>
                                  </fieldset>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="OK">
                                      </fieldset>
                              </div>
                          </form>
                        </div>
                      </div>
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header">Service</h3> 
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Message 
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                  <fieldset class="col-1-of-2">
                                          <p class="input__text">Name</p>
                                          <input type="text" placeholder="Web Design">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Slider Image</p>
                                          <input type="file" multiple id="gallery-photo-add">
                                          <div class="gallery">
                                          </div>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Fee(k)</p>
                                          <input type="text" value="100">
                                      </fieldset>
                                  </div>
                                  <fieldset class="input__message">
                                      <p class="input__text">Your Message</p>
                                      <textarea name=""  rows="2"></textarea>
                                  </fieldset>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="OK">
                                      </fieldset>
                              </div>
                          </form>
                        </div>
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                          <h3 class="main--header">Skill</h3>    
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Message
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Skill 1</p>
                                          <input type="Text" value="PHP">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Percentage(%)</p>
                                          <input type="text" value="70">
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Skill 2</p>
                                          <input type="text" value="Web Design">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Percentage(%)</p>
                                          <input type="text" value="60">
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Skill 2</p>
                                          <input type="text" value="UI/UX">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Percentage(%)</p>
                                          <input type="text" value="40">
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Skill 2</p>
                                          <input type="text" value="JQuery">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Percentage(%)</p>
                                          <input type="text" value="60">
                                      </fieldset>
                                  </div>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="OK">
                                  </fieldset>
                              </div>
                          </form>
                      </div>
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header">Experience</h3> 
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Message 
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                  <fieldset class="col-1-of-2">
                                          <p class="input__text">Name</p>
                                          <input type="text" value="Web & Apps Project Manager">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Company Name</p>
                                          <input type="text" value="Amento Tech">
                                          </div>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Start Date</p>
                                          <input type="text" value="Jun 2017">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">End Date</p>
                                          <input type="text" value="July 2018">
                                      </fieldset>
                                  </div>
                                  <fieldset class="input__message">
                                      <p class="input__text">Your Message</p>
                                      <textarea name=""  rows="2"></textarea>
                                  </fieldset>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="OK">
                                      </fieldset>
                              </div>
                          </form>
                        </div>
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header">Education</h3> 
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Message
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                  <fieldset class="col-1-of-2">
                                          <p class="input__text">Faculti Name</p>
                                          <input type="text" value="Bsc.Csit">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Institute Name</p>
                                          <input type="text" value="Amento Tech">
                                          </div>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Start Date</p>
                                          <input type="text" value="Jun 2017">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">End Date</p>
                                          <input type="text" value="July 2018">
                                      </fieldset>
                                  </div>
                                  <fieldset class="input__message">
                                      <p class="input__text">Your Message</p>
                                      <textarea name=""  rows="2"></textarea>
                                  </fieldset>
                                  <fieldset class="submit--btn">
                                    <input type="submit" id="submit" class="join--btn" value="OK">
                                  </fieldset>
                              </div>
                          </form>
                        </div>
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header">AWARDS & CERTIFICATIONS</h3> 
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Message 
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Award Name</p>
                                          <input type="text" placeholder="Vector Award">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Awards Image</p>
                                          <input type="file" class=" file__image text-center center-block file-upload">
                                          <div class="avatar--image">

                                            <img src="img\applicant\face-2.png" class="avatar avatar--image" alt="avatar">
                                          </div>
                                      </fieldset>
                                  </div>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="OK">
                                      </fieldset>
                              </div>
                          </form>
                        </div>
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header">CRAFTED PROJECTS</h3> 
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Message 
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Project Name</p>
                                          <input type="text" placeholder="Vector Award">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Project Image</p>
                                          <input type="file" class=" file__image text-center center-block file-upload">
                                          <div class="avatar--image">
                                            <img src="img\applicant\face-2.png" class="avatar avatar--image" alt="avatar">
                                          </div>
                                      </fieldset>
                                  </div>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="OK">
                                      </fieldset>
                              </div>
                          </form>
                        </div>
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header">Passport/Citizenship</h3> 
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Message 
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Drop Your Passport/Citizenship</p>
                                          <input type="file" class=" file__image text-center center-block file-upload">
                                      </fieldset>
                                  </div>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="OK">
                                      </fieldset>
                              </div>
                          </form>
                        </div>
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header">CV/Resume</h3> 
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Message 
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Drop Your CV/Resume</p>
                                          <input type="file" class=" file__image text-center center-block file-upload">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Generate CV/Resume</p>
                                          <a href="./cv.html" class="generate__cv--btn" target='_blank'>Generate</a>
                                      </fieldset>
                                  </div>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="OK">
                                      </fieldset>
                              </div>
                          </form>
                        </div>
                    </li>
                    <li class="nacc__list" >
                      <div class="nacc__item">
                        <div class="toggle--form clearfix">
                          <h3 class="main--header">Social Links</h3> 
                          <form action="">
                              <div class="task__contract clearfix">
                                  <h4 class="privacy__title">
                                      Message 
                                  </h4>
                                  <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda rem incidunt dolorum architecto laborum sed libero autem tempore qui error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.error vero minima saepe, sequi deleniti quidem praesentium suscipit. Explicabo, corrupti.</p>  
                                  <div class="contract__field clearfix row">
                                  <fieldset class="col-1-of-2">
                                          <p class="input__text">Name</p>
                                          <input type="text" value="Facebook">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Link</p>
                                          <input type="text" value="https://www.facebook.com">
                                          </div>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                  <fieldset class="col-1-of-2">
                                          <p class="input__text">Name</p>
                                          <input type="text" value="LinkedIn">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Link</p>
                                          <input type="text" value="https://www.linkedin.com/">
                                          </div>
                                      </fieldset>
                                  </div>
                                  <div class="contract__field clearfix row">
                                  <fieldset class="col-1-of-2">
                                          <p class="input__text">Name</p>
                                          <input type="text" value="Instragrame">
                                      </fieldset>
                                      <fieldset class="col-1-of-2">
                                          <p class="input__text">Link</p>
                                          <input type="text" value="https://www.instragrame.com/">
                                          </div>
                                      </fieldset>
                                  </div>
                                  <fieldset class="submit--btn">
                                          <input type="submit" id="submit" class="join--btn" value="OK">
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
          <script src="js/image.js">
                    </script>
                    <script>
                    $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>
    <!-- script end -->
  </body>
</html>
