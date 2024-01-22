<!-- footer -->
<!-- footer -->
<section class="footer_main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="nasa_main">
                    <img class="mover" src="assets/images/main.png" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_main">
                    <ul>
                        <li><a href="tel:(000)0000000">(000) 000 0000</a></li>
                        <li><a href="mailto:support@dazzledesign.co">support@dazzledesign.co</a></li>
                    </ul> 
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer_main">
                    <p><a href="#" target="_blank">123  Dazzle STREET, LONDON ABC, UK</a></p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer_main">
                    <p><a href="#" target="_blank">123  Dazzle STREET, LONDON ABC, UK</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <style>
  .dma{
    display:flex;
  }
  .dma img{
    width:80px;
    margin-right: 40px;
    margin-top: 10px;
  }
</style> -->
<section class="sec_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="footer_inner">
                    <p>© Copyrights 2024 | <a href="/">Dazzle Design</a> All Rights Reserved</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pp_links">
                    <ul>
                        <li><a href="/terms/">Terms & Conditions</a></li>
                        <li><a href="/privacy/">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="ball"></div>


<!-- modal -->

<!-- modal -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="popup_heading">
                        <h2>GET FREE CONSULTATION</h2>
                        <p>Discuss your idea with our consultants today</p>
                    </div>
                    <div class="popup_img">
                        <img class="mover" src="assets/images/main.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_wrap_popup">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <input type="text" name="name" placeholder="Full Name" required>
                            <input type="email" name="email" placeholder="Email Address" required>
                            <input type="number" name="phone" placeholder="Phone Number" required>
                            <textarea name="brief" placeholder="Enter a brief description"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
      </div>
      </div>
    </div>
  </div>
</div>


<!-- footer end -->

<!-- Jquery JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://unpkg.com/gsap%403.12.4/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap%403.12.4/dist/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>

<script type="module" src="https://unpkg.com/ionicons%407.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons%407.1.0/dist/ionicons/ionicons.js"></script>

<script src="/assets/js/script.js"></script>
<script src="https://unpkg.com/aos%402.3.1/dist/aos.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/%40fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min.js"></script>

<script src="/assets/slick/slick/slick.js"></script>
<script src="/assets/bootstrap/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/%40popperjs/core%402.9.2/dist/umd/popper.min.js"></script>

<script>
        jQuery(document).ready(function() {
    var prevScrollPos = jQuery(window).scrollTop();

    jQuery(window).scroll(function() {
        var currentScrollPos = jQuery(this).scrollTop();
        if (currentScrollPos > prevScrollPos) {
            jQuery(".overlay_wrap").css("background", "#232323");
            jQuery(".checking").css("color", "#fff");
            jQuery(".checking2").css("color", "#fff");
            jQuery(".filter_img").css("filter", "invert(1)");
        } else {
            jQuery(".overlay_wrap").css("background", "#fff");
            jQuery(".checking").css("color", "#000");
            jQuery(".checking2").css("color", "#000");
            jQuery(".filter_img").css("filter", "unset");
        }
        prevScrollPos = currentScrollPos;
    });
});

</script>

<script>

jQuery('.e-commerce-slider').slick({
  dots: false,
  arrows:false,
  infinite: true,
  speed: 1000,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

</script>



<script>
jQuery(window).on("load", function() {
    jQuery(".loader-container").fadeOut(2000); // Fade out after 2 seconds
});

</script>


<script>

gsap.registerPlugin(ScrollTrigger);

document.body.style.overflow = "auto";

const backTextWrapper = document?.querySelectorAll(".background-text");

backTextWrapper.forEach((section) => {
  
  const textLines = section?.querySelectorAll(".background-text__item");
  
  textLines.forEach(function(line, index) {
    
    const [x, xEnd] = index % 2
    ? [window.innerWidth, (line.scrollWidth - section.offsetWidth) * -1]
    : [line.scrollWidth * -1, 0];

    gsap.fromTo(
      line,
      { x },
      {
        x: xEnd,
        scrollTrigger: {
          trigger: section,
          scrub: 0.5,
          start: 'center bottom',
          end: 'bottom center',
          // markers: true
        }
      }
    );
    
  })
  
}),

document.addEventListener("DOMContentLoaded", function () {
  // Select the elements to animate
  const scrollText = document.querySelector(".scroll-text");

  // Create the scroll-triggered animation using GSAP
  gsap.to(scrollText, {
    opacity: 0,       // Start with full opacity and decrease it as you scroll
    y: 100,           // Move the text downward as you scroll
    ease: "power2.inOut", // Easing function for smoother animation
    scrollTrigger: {
      trigger: ".scroll-section", // Section that triggers the animation
      start: "top 80%",           // Animation starts when section is 80% in view
      end: "bottom top",          // Animation ends when section is fully out of view
      scrub: 1                     // Controls the smoothness of the animation
    }
  });
});

</script>


<script>
jQuery.noConflict();

jQuery(document).ready(function() {
    jQuery(".inner_banner h1").lettering();
    jQuery(document).on('mouseenter mouseleave touchend', '.inner_banner h1', function (ev) {
    var el = jQuery(this).find('span');
    if(ev.type === 'mouseenter') {
        TweenMax.staggerTo(el, 0.8, {color:'#7c21c7', ease:Power4.easeOut},0.07);
    } else {
        TweenMax.staggerTo(el, 0.8, {color:'#000', ease:Power4.easeOut},0.07);
    }php
    });
});

jQuery(document).ready(function() {
    jQuery(".inner_banner h2").lettering();
    jQuery(document).on('mouseenter mouseleave touchend', '.inner_banner h2', function (ev) {
    var el = jQuery(this).find('span');
    if(ev.type === 'mouseenter') {
        TweenMax.staggerTo(el, 0.8, {color:'#7c21c7', ease:Power4.easeOut},0.07);
    } else {
        TweenMax.staggerTo(el, 0.8, {color:'#000', ease:Power4.easeOut},0.07);
    }php
    });
});


jQuery(document).ready(function() {
    jQuery(".inner_banner h3").lettering();
    jQuery(document).on('mouseenter mouseleave touchend', '.inner_banner h3', function (ev) {
    var el = jQuery(this).find('span');
    if(ev.type === 'mouseenter') {
        TweenMax.staggerTo(el, 0.8, {color:'#7c21c7', ease:Power4.easeOut},0.07);
    } else {
        TweenMax.staggerTo(el, 0.8, {color:'#000', ease:Power4.easeOut},0.07);
    }php
    });
});

</script>


<script>

gsap.set(".ball", {xPercent: -50, yPercent: -50});

const ball = document.querySelector(".ball");
const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
const mouse = { x: pos.x, y: pos.y };
const speed = 0.2;

const xSet = gsap.quickSetter(ball, "x", "px");
const ySet = gsap.quickSetter(ball, "y", "px");

window.addEventListener("mousemove", e => {    
  mouse.x = e.x;
  mouse.y = e.y;  
});

gsap.ticker.add(() => {
  
  // adjust speed for higher refresh monitors
  const dt = 1.0 - Math.pow(1.0 - speed, gsap.ticker.deltaRatio()); 
  
  pos.x += (mouse.x - pos.x) * dt;
  pos.y += (mouse.y - pos.y) * dt;
  xSet(pos.x);
  ySet(pos.y);
});

</script>

<script>

jQuery(document).ready(function() {
  jQuery('.image_slider').slick({
    dots: false,
    arrows: false,
    centerPadding: '60px',
    centerMode: true,
    infinite: true, // Set to true for infinite looping
    speed: 1000,
    autoplay: true, // Add this line for automatic movement
    autoplaySpeed: 3000, // Adjust the time between slides (in milliseconds)
    slidesToShow: 4,
    slidesToScroll: 1,
    // Responsive settings...
  });
});


$('[data-fancybox]').fancybox({
  // Options will go here
  buttons : [
    'close'
  ],
  wheel : false,
  transitionEffect: "slide",
   // thumbs          : false,
  // hash            : false,
  loop            : true,
  // keyboard        : true,
  toolbar         : false,
  // animationEffect : false,
  // arrows          : true,
  clickContent    : false
});


</script>

<script>
  AOS.init();
</script>
<script>
  $(document).ready(function() {
    if ($(window).width() < 768) {
  $('.testimonial_slider').slick({
        dots: true,
		arrows: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 5,
        settings: "unslick",
        slidesToScroll: 1,
        responsive: [
       
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1

                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1

                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    })
  }
  });
</script>


</body>

</html>

<?php

if (isset($_POST['submit'])) {
  $to_email = 'zeeshanzeegota@gmail.com';
  $name = $_POST['name'];
  $from = $_POST['email'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $brief = $_POST['brief'];
  $headers = "From: $from";

  mail($to_email, $name, $email, $phone, $brief, implode("\r\n", $headers));
  
  echo"mail sent";
}   

?>