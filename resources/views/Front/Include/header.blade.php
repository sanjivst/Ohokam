 <header>
        <div class="fluid-container clearfix">
          <a href="" class="logo"><img src="img/logo.png" alt="logo"></a>
       <div class="wrapper-nav clearfix">
          <div id="bun1"><div class="mmm-burger"></div></div>
          <nav>
              <ul>
                <li>
                 <a href="./" class="index-link">Home</a>
                </li>
                <li>
                  <a href="{{ route('about') }}" class="about-link">About Us</a>
                </li>
                <li>
                  <a href="{{ route('professional') }}" class="professionals-link">Professionals</a>
                </li>
                <li>
                  <a href="{{ route('support') }}" class="suppot-link">Support</a>
                </li>
                <li>
                  <a href="{{ route('blog') }}" class="blog-link">Blog</a>
                </li>
                <li>
                  <a href="./becomaprofessional.php"  class="professional-link">Become A Professional</a>
                </li>
              </ul>
            </nav>
            <div class="user-icon">
              <div class="user-signIn">
                <figure>
                  <img src="http://amentotech.com/projects/wpworkreap/wp-content/themes/workreap/images/user.png" alt="user">
                </figure>
                <!-- enable when user was log out-->
                <a id="login-trigger" class="login-trigger">Jasmine Olson</a>
                <div  class="login__profile login-content user__logged">
                <div class="login-name clearfix">
                  <span id="title-form">Your Pages:</span>
                    <a>
                        <svg width="64" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 64 64" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64">
                          <g>
                            <path fill="#1D1D1B" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                          </g>
                        </svg>
                    </a>
                  </div>
                  <ul class="user__settings">
                    <li class="setting__item">
                        <a href="./user.php" class="setting__text">
                        <i class="fas fa-user-circle"></i> Profile <span>60%</span>
                        </a>
                    </li>
                    <li class="setting__item" >
                        <a href="./category.php" class="setting__text">
                        <i class="fas fa-bell"></i>  Notification <span>10</span>
                        </a>
                    </li>
                    <li class="setting__item">
                        <a href="./user.php" class="setting__text">
                        <i class="fas fa-cog"></i>  Settings
                        </a>
                    </li>
                    <li class="setting__item">
                        <a href="" class="setting__text">
                        <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                  </ul>
                </div>
              <!-- disable when user was login -->
                <!-- <a id="login-trigger" class="login-trigger">Sign In</a>
                <div class=" login__profile login-content">
                  <div class="login-name clearfix">
                    <span id="title-form">Login</span>
                    <a>
                        <svg width="64" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 64 64" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64">
                          <g>
                            <path fill="#1D1D1B" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                          </g>
                        </svg>
                    </a>
                  </div>
                  <form id="login-form">
                    <div class="form">
                        <fieldset class="inputs">
                            <input id="username" type="email" name="Email" placeholder="Your email address" required>
                            <input id="password" type="password" name="Password" placeholder="Password" required>
                          </fieldset>
                          <fieldset class="actions">
                            <input type="submit" id="submit" class="join--btn" value="Log in">
                            <input id="checkbox" type="checkbox">
                            <label for="checkbox"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              width="459px" height="459px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
                          <g>
                            <g id="check-box-outline">
                              <path d="M124.95,181.05l-35.7,35.7L204,331.5l255-255l-35.7-35.7L204,260.1L124.95,181.05z M408,408H51V51h255V0H51
                                C22.95,0,0,22.95,0,51v357c0,28.05,22.95,51,51,51h357c28.05,0,51-22.95,51-51V204h-51V408z"/>
                            </g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          </svg>
                            Keep me signed in</label>
                          </fieldset>
                    </div>
                      <div class="login-social">
                      <a href="" class="login-facebook"><i class="fab fa-facebook-f"></i><em>facebook</em></a>
                      <a href="" class="login-google"><i class="fab fa-google-plus-g"></i><em>google</em></a>
                      <a href="" class="login-linkedin"><i class="fab fa-linkedin-in"></i><em>LinkedIn</em></a>
                    </div>
                  </form>
                  <form action="" id="forgetPassword">
                      <div class="form">
                          <fieldset class="inputs">
                              <input id="username" type="email" name="Email" placeholder="Your email address" required>
                            </fieldset>
                            <fieldset class="actions">
                              <input type="submit" id="submit" class="join--btn" value="Get Password">
                            </fieldset>
                      </div>
                  </form>
                  <div class="forget-password clearfix">
                    <a onClick="forgetPassord()" id="forgetText" >
                      Forgot password?
                    </a>
                    <a onClick="loginForm()" id="loginText" style="display: none">
                        Login Now
                      </a>
                  </div>
                </div>
              </div> -->
              <!-- disable when user was login -->
              <!-- <a href="" class="sing-up" data-toggle="modal" data-target="#extraLargeModal" >SignUp</a> -->
            </div>
       </div>

        </div>
    </header>
