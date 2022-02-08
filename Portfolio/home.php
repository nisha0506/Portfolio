<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nisha Singh Portfolio Website</title>
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
    >
 <!--css link-->
 <?php
  include 'style.php'  
 ?>

 <!--Unicons link-->
 <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
<?php
  include 'portdb.php'; 

  if(isset($_POST['submit']))
  {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $insertquery = "insert into contact( username, email, message) values('$username' , '$email' , '$message')";

            $iquery = mysqli_query($con, $insertquery);

            if( $iquery)
        {
                   ?>
                      <script>
                          alert("Message Sent");
                         </script>
                     <?php
        }
     else
        {
                    ?>
                      <script>
                            alert("Message Not sent");
                       </script>
                    <?php
        }
    }
   
 
 ?>

   <header class="header" id="header">
       <nav class="nav-container">
           <a href="#" class="nav__logo">Nisha Singh</a>
           <div class="nav__menu" id="nav-menu">
               <ul class="nav__list grid">
                   <li class="nav__item">
                       <a href="#home" class="nav__link active-link">
                        <i class="uil uil-estate nav__icon"></i>Home
                       </a>
                   </li>
                   <li class="nav__item">
                    <a href="#about" class="nav__link">
                        <i class="uil uil-user nav__icon"></i>About Me
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#skills" class="nav__link">
                        <i class="uil uil-file-alt nav__icon"></i>Skills
                    </a>
                </li>
                
                <li class="nav__item">
                    <a href="#portfolio" class="nav__link">
                        <i class="uil uil-scenery nav__icon"></i>Portfolio
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">
                        <i class="uil uil-message nav__icon"></i>Contact Me
                    </a>
                </li>
               </ul>
               <i class="uil uil-times nav__close" id="nav-close"></i>
           </div>
           <div class="nav__btns">
               <!--Theme change button-->
               <i class="uil uil-moon change-theme" id="theme-button"></i>
               <div class="nav__toggle" id="nav-toggle">
                <i class="uil uil-apps"></i>
               </div>
           </div>
       </nav>
   </header>
   
   <main class="main">
       <section class="home section" id="home">
           <div class="home__container container grid">
               <div class="home__content grid">
                   <div class="home__social">
                       <a href="https://www.linkedin.com/in/nisha-singh-279176200/" target="_blank" class="home__social-icon">
                        <i class="uil uil-linkedin-alt"></i>
                       </a>
                       <a href="https://github.com/nisha0506/projects" target="_blank" class="home__social-icon">
                        <i class="uil uil-github-alt"></i>
                    </a>
                   
                   </div>
                   <div class="home__img">
                   
                       <img src="th.jpeg" 
                        >
                   </div>
                   <div class="home__data">
                       <h1 class="home__title">Hi, I am Nisha Singh</h1>
                       <h3 class="home__subtitle">Coder and Web Developer</h3>
                       <p class="home__description">
                           Passionate about Coding and learning. I'am hard-working, producing quality work.
                       </p>
                       <a href="#contact" class="button button--flex">
                        Contact Me<i class="uil uil-message button__icon"></i>
                       </a>
                   </div>
               </div>
               <div class="home__scroll">
                <a href="#about" class="home__scroll-button button--flex">
                    <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                    <span class="home__scroll-name">Scroll down</span>
                    <i class="uil uil-arrow-down home__scroll-arrow"></i>
                   </a>
               </div>
           </div>
       </section>
       <section class="about section" id="about">
           <h2 class="section__title">About Me</h2>
           <span class="section__subtitle">My Introduction</span>

           <div class="about__container container grid" >
                <img src="bg.jpeg" alt=" " class="about__img">
                <div class="about__data">
                    <p class="about__description">
                        Web Developer <!--baad mei jo aaega-->
                    </p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">Chandigarh University</span>
                            <span class="about__info-name"> persuing <br> Bachelor of Engineering in Computer Science </span>
                        </div>
                        <div>
                            <span class="about__info-title">2024</span>
                            <span class="about__info-name">Graduation <br> Year</span>
                        </div>
                        <div>
                            <span class="about__info-title">8.75</span>
                            <span class="about__info-name"> CGPA </span>
                        </div>  
                    </div>
                    <div class="about__buttons">
                        <a download=" " href="resume.pdf" class="button button--flex">
                            Download CV<i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
           </div>
       </section>
       <!--SKILLS-->
       <section class="skills section" id="skills">
           <h2 class="section__title">Skills</h2>
           <span class="section__subtitle">My technical level</span>
           <div class="skills__container container grid">
               <div>
                   <div class="skills__content skills__open">
                       <div class="skills__header">
                        <i class="uil uil-brackets-curly skills__icon"></i>
                      

                        <div>
                            <h1 class="skills__title">Frontent Developer </h1>
                            <span class="skills__subtitle">more than 1 year</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow "></i>
                       </div>

                       <div class="skills__list grid">
                           <div class="skills__data">
                               <div class="skills__titles">
                                   <h3 class="skills__name">HTML</h3>
                                   <span class="skills__number">90%</span>
                               </div>
                               <div class="skills__bar">
                                   <span class="skills__percentage skills__html"></span>
                               </div>
                           </div>

                           <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">CSS</h3>
                                <span class="skills__number">60%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__css"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">JavaScript</h3>
                                <span class="skills__number">70%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__js"></span>
                            </div>
                        </div>
                       </div>
                   </div>

                   <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-arrow skills__icon"></i>

                     <div>
                         <h1 class="skills__title"> Progamming Language </h1>
                         <span class="skills__subtitle">more than 3 years</span>
                     </div>
                     <i class="uil uil-angle-down skills__arrow "></i>
                    </div>

                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">C++</h3>
                                <span class="skills__number">90%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__cpp"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                         <div class="skills__titles">
                             <h3 class="skills__name">C</h3>
                             <span class="skills__number">90%</span>
                         </div>
                         <div class="skills__bar">
                             <span class="skills__percentage skills__c"></span>
                         </div>
                     </div>

                     <div class="skills__data">
                         <div class="skills__titles">
                             <h3 class="skills__name">Java</h3>
                             <span class="skills__number">70%</span>
                         </div>
                         <div class="skills__bar">
                             <span class="skills__percentage skills__java"></span>
                         </div>
                     </div>
                    </div>
                </div>
               </div>
           </div>
       </section>

          <section class="qualification section">
              <h2 class="section__title">Qualification</h2>
              <span class="section__subtitle">My personal Journey</span>

              <div class="qualification__container container">
                  <div class="qualification__tabs">
                      <div class="qualification__button button--flex qualification__active" data-target = #education>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                      </div>

                  </div>
                  <div class="qualification__sections">
                      <div class="qualification__content qualification__active" data-content id="education">
                          <div class="qualification__data">
                              <div>
                                  <h3 class="qualification__title">Computer Science Engineering</h3>
                                  <span class="qualification__subtitle">Chandigarh University</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2020-2024
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                          </div>

                          <div class="qualification__data">
                              <div></div>

                              <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">Higher Secondary Education</h3>
                                <span class="qualification__subtitle">Chinmaya Vidyalaya</span>
                                  <div class="qualification__calendar">
                                      <i class="uil uil-calendar-alt"></i>
                                      2020
                                  </div>
                              </div>

                             
                        </div>

                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Secondary Education</h3>
                                <span class="qualification__subtitle">Chinmaya Vidyalaya</span>
                                  <div class="qualification__calendar">
                                      <i class="uil uil-calendar-alt"></i>
                                      2018
                                  </div>
                              </div>

                              <div>
                                  <span class="qualification__rounder"></span>
                                  <span class="qualification__line"></span>
                              </div>
                        </div>

                      </div>
                  </div>
              </div>
          </section>

          <section class="portfolio section" id="portfolio">
          <h2 class="section__title">Portfolio</h2>
          <span class="section__subtitle">Most recent work</span>

          <div class="portfolio__container container swiper ">

            <div class="swiper-wrapper">

                <div class="portfolio__content grid swiper-slide">
                    <img src="port.jpg" alt="" class="portfolio__img">

                    <div class="portfolio__data">
                        <h3 class="portfolio__title">Music Website</h3>
                        <p class="portfolio__description">Groove on your favourite music, adaptable to all devices, user-friendly interaction</p>
                        <a href="#" class="button button--flex button--small portfolio__button">
                            Demo
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>

                </div>
                 
                <div class="portfolio__content grid swiper-slide">
                    <img src="port2.jpg" alt="" class="portfolio__img">

                    <div class="portfolio__data">
                        <h3 class="portfolio__title">File Management</h3>
                        <p class="portfolio__description">Based on C++ codes, Made some program on Files</p>
                        <a href="#" class="button button--flex button--small portfolio__button">
                            Demo
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>

                </div>

            </div>
             <!--Add Arrows-->
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </section>
          <section class="contact section" id="contact">
          <h2 class="section__title">Contact Me</h2>
          <span class="section__subtitle">Get in touch</span>

          <div class="contact__container container grid">
              <div>
                  <div class="contact__information">
                    <i class="uil uil-phone contact__icon"></i>
                    <div>
                        <h3 class="contact__title">Call Me</h3>
                        <span class="contact__subtitle">3849-93-3849</span>
                    </div>
                  </div>

                  <div class="contact__information">
                    <i class="uil uil-envelope contact__icon"></i>
                    <div>
                        <h3 class="contact__title">Email</h3>
                        <span class="contact__subtitle">nsingh201510@gmail.com</span>
                    </div>
                  </div>

                  <div class="contact__information">
                    <i class="uil uil-map-marker contact__icon"></i>
                    <div>
                        <h3 class="contact__title">Location</h3>
                        <span class="contact__subtitle">Bokaro, Jharkhand</span>
                    </div>
                  </div>
              </div>

              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method= "POST" class="contact_form grid">
                  <div class="contact__inputs grid">
                      <div class="contact__content">
                          <label for="" class="contact__label">Name</label>
                          <input name="username" type="text" class="contact__input">
                      </div>
                      <div class="contact__content">
                        <label for="" class="contact__label">Email</label>
                        <input name="email" type="email" class="contact__input">
                    </div>
                  </div>

                  <div class="contact__content">
                    <label for="" class="contact__label">Message</label>
                    <textarea name="message" id="" cols="0" rows="7" class="contact__input"></textarea>
                </div>

                <div>
                <button type="submit" name="submit" class="button button--flex " >
                        Send Message
                        <i class="uil uil-message button__icon"></i>
                    </a>
                </div>
              </form>
          </div>
          </section>
   </main>

   <footer class="footer">
       <div class="footer__bg">
           <div class="footer__container container grid">
               <div>
                   <h1 class="footer__title">Nisha Singh</h1>
                   <span class="footer__subtitle">Coder</span>
               </div>
               <ul class="footer__links">
                   <li>
                       <a href="#portfolio" class="footer__link">Portfolio</a>
                   </li>
                   <li>
                    <a href="#contact" class="footer__link">Contact Me</a>
                </li>
               </ul>
           </div>
           <p class="footer__copy">&#169; NishaSingh. All right reserved</p>
       </div>
   </footer>
   <a href="#" class="scrollup" id="scroll-up">
    <i class="uil uil-arrow-up scrollup__icon"></i>
   </a>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>    
     <script src="main.js"  ></script> 
    
</body>
</html>