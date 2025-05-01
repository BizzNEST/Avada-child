<?php
/**
 * Template Name: Benefit Landing Page
 * Description: A custom landing page for the Digital NEST Benefit.
 */

get_header(); ?>
<body>

<!-- Hero Banner Section-->
    <section class="benefit-wrapper">
    <section class="benefit-info" id="pageContent">
        <div class="logo-and-text">
            <img class="golden-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Vector.svg" alt="golden digital NEST logo">
            <div class="digital-nest-text">
                <h2 class="digital-text">Digital</h2>
                <h2 class="nest-text">NEST</h2>
                <h2 class="benefit-text">Benefit</h2>
            </div>
        </div>
        <div class="donation-info">
            <h3 class="amount-raised">
                TOGETHER, WE'VE<span class="mobile-break"></span> 
                <span class="raised-amount">RAISED <span class="amount-text">$800K</span></span>
            </h3>
            <h4 class="help-us-text">HELP US CLOSE THE GAP</h4>
            <h4 class="our-goal-text">$200K TO REACH OUR GOAL</h4>
            <button class="donate-today-button"><p class="donate-today-text">DONATE TODAY</p></button>
        </div>
    </section>
    <div id="videoContainer">
        <iframe id="youtubeVideo" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</section>
<!-- End of Hero Banner Section-->

<!-- Start of Statbar Section -->
<section class="statsbar-section">
    <div class="topHorizontalLine">
      <object class="svg-line" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/topHorizontalLine.svg"></object>
    </div>
  
    <div class="statsbar-content">
      <!-- Text: initially hidden -->
      <div id="textBlock" class="text-container hidden">
        <p>Thanks to your support,<br>our <span class="highlight">10-Year Benefit</span> was a huge success<br/>
          raising <span class="highlight">$800,000</span> to support youth access<br/>
          to tech careers.
        </p>
        <p>
          Your donation helps us create opportunity for<br/>
          thousands more young people across California.
        </p>
      </div>
  
      <!-- Circle: starts shifted left, then slides right -->
      <div id="circleWrapper" class="circle-wrapper">
        <div id="animation" class="animation-container"></div>
        <div class="circle-text">$1MIL</div>
      </div>
    </div>
  
    <div class="bottomHorizontalLine">
      <object class="svg-line" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/bottomHorizontalLine.svg"></object>
    </div>
  </section>
  
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
  <script src="script.js"></script>-->
  
  
  <!-- Trigger animation on scroll -->
  <script>
    let hasAnimated = false;
  
    window.addEventListener("scroll", () => {
      const section = document.querySelector(".statsbar-section");
      const circle = document.getElementById("circleWrapper");
      const text = document.getElementById("textBlock");
  
      const sectionTop = section.getBoundingClientRect().top;
      const sectionBottom = section.getBoundingClientRect().bottom;
      const windowHeight = window.innerHeight;
  
      if (!hasAnimated && sectionTop < windowHeight * 0.85 && sectionBottom > windowHeight * 0.2) {
        hasAnimated = true;
  
        // Start Lottie animation
        if (window.lottieAnimations) {
          window.lottieAnimations.forEach(anim => anim.play());
        }
  
        // Slide circle
        setTimeout(() => {
          circle.classList.add("slide-right");
        }, 4000); 
  
        // Fade in text
        setTimeout(() => {
          text.classList.remove("hidden");
        }, 4100);
      }
    });
  </script>
  
<!-- End of Stats Bar Section-->  

    <!-- sponsors section -->
    <section class="sponsors-section">
    <div class="sponsor-section-title">
        <h1> THANK YOU TO OUR GENEROUS CO-CHAIRS & SPONSORS </h1>
    </div>
    
    <div class="sponsors-scroll">
        <div class="scroll-inner">      
            
            <div class="sponsor-pair">
                <div class="sponsor-con">
                    <img src="images/Game Changer Sponsor.png" alt="Game Changer Sponsor" class="sponsor-title-pair" loading="lazy">
                    <div class="sponsor-center-div">
                        <img src="images/image 1.png" alt="The Eden Foundation" class="sponsor-logo-pair" loading="lazy">
                    </div>
                </div>

                <div class="sponsor-con">
                    <img src="images/Advocate Sponsor.png" alt="Advocate Sponsor" class="sponsor-title-pair" loading="lazy">
                    <div class="sponsor-center-div">
                        <img src="images/image 2.png" alt="Driscoll's" class="sponsor-logo-pair" loading="lazy">
                    </div>
              </div>
            </div>
            
            <div class="sponsor-grid one-cols">
                <img src="images/Supporter Sponsors.png" alt="" loading="lazy">
            </div>

            <div class="sponsor-grid three-cols">
                <img src="images/image 3.png" alt="" loading="lazy"/>
                <img src="images/image 4.png" alt="" loading="lazy"/>
                <img src="images/image 5.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Table Sponsors.png" alt="Driscoll's">
            </div>
           
            <div class="sponsor-grid three-cols">
                <img src="images/image 6.png" alt="" loading="lazy"/>
                <img src="images/image 7.png" alt="" loading="lazy"/>
                <img src="images/image 8.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid three-cols">
                <img src="images/image 9.png" alt="" loading="lazy"/>
                <img src="images/image 10.png" alt="" loading="lazy"/>
                <img src="images/image 11.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid two-cols">
                <img src="images/image 12.png" alt="" loading="lazy"/>
                <img src="images/image 13.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Frame 1.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Frame 4.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Frame 3.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Frame 5.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Frame 6.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Frame 7.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Frame 8.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Frame 9.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Friends of The Nest.png" alt="Driscoll's">
            </div>

            <div class="sponsor-grid three-cols">
                <img src="images/image 21.png" alt="" loading="lazy"/>
                <img src="images/image 22.png" alt="" loading="lazy"/>
                <img src="images/image 23.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid two-cols">
                <img src="images/image 24.png" alt="" loading="lazy"/>
                <img src="images/Frame 10.png" alt="" loading="lazy"/>
            </div>


            <div class="sponsor-grid one-cols">
                <img src="images/Frame 11.png" alt="" loading="lazy"/>
            </div>

            <div class="sponsor-grid one-cols">
                <img src="images/Frame 128.png" alt="" loading="lazy"/>
            </div>
          </div>
        </div>
    </section>
      <!-- end of sponsor section -->
    <script src="app.js"></script>


   <!-- Start of Mason Grid section -->
    <div class="line-break">
        <div class="circle top"></div>
        <fieldset class="text-frame">
            <legend>CELEBRATING 10 YEARS OF IMPACT</legend>
        </fieldset>
        <div class="circle top"></div>
    </div>

    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="column-first">
                        <div class="block large"></div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="column-second">
                        <div class="block small"></div>
                        <div class="block small"></div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="column-third">
                        <div class="block large"></div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="column-fourth">
                        <div class="block large"></div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="column-fifth">
                        <div class="block"></div>
                        <div class="block"></div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div class="line-break">
        <div class="circle bottom"></div>
        <fieldset class="text-frame">
            <legend><button class="browse-more-bttn">BROWSE MORE</button></legend>
        </fieldset>
        <div class="circle bottom"></div>
    </div>

    <!-- start of donation section -->
    <section class="donation-section">
        <div class="donation-line-break">
            <div class="donation-circle donation-top"></div>
            <fieldset class="donation-text-frame">
                <legend class="donation-top-legend">1</legend>
            </fieldset>
            <div class="donation-circle donation-top"></div>
        </div>

        <div class="donation-text">
            <h2> <span class="donation-highlight italic"> LET'S FINISH STRONG</span></h2>
            <p> We're just <span class="donation-highlight">$200,000</span> away from our goal. <br> Be part of this milestone moment for <br> <span class="donation-highlight">DIGITAL NEST<span class="dono-nest-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Vector.svg"></span></span> youth.</p> 

        </div>

        <div class="donation-line-break">
            <div class="donation-circle donation-bottom"></div>
            <fieldset class="donation-text-frame">
                <legend class="donation-bottom-legend"><button class="donate-more-bttn">DONATE TODAY</button></legend>
            </fieldset>
            <div class="donation-circle donation-bottom"></div>
        </div>
    </section>

    <!-- end of donation section -->

   <script src="
   https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
   "></script>
   <script>
       document.addEventListener("DOMContentLoaded", () => {
           const splide = new Splide(".splide",{
               autoWidth:true,
               gap:16,
               type   : 'loop',
               autoplay: true,
               interval: 1000, // 3 seconds
               pauseOnHover: true,
               pauseOnFocus: true,
               drag:true,
           }).mount();
   
       })
   </script>   

    <!-- End of Mason Grid section -->
  </body>

  <?php get_footer(); ?>