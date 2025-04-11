<?php get_header(); ?>

  <body>
   
    <dialog class="hamburger-menu">
        <div class="hb-title-box">
            <h2 class="hb-title">DOTCOMFORGE</h2>
            <button class="hb-close-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
            <div class="hb-nav-list">
                <div class="dialog-nav-item"><p class="nav-item"><a href="<?php echo site_url('/about-us/')?>">ABOUT US</a></p><i class="fa-solid fa-angle-down"></i></div>
                <div class="dialog-nav-item"><p class="nav-item"><a href="#">BLOG</a></p><i class="fa-solid fa-angle-down"></i></div>
                <div class="dialog-nav-item"><p class="nav-item"><a href="#">PRICING</a></p><i class="fa-solid fa-angle-down"></i></div>
                <div class="dialog-nav-item"><p class="nav-item"><a href="#">CONTACT</a></p><i class="fa-solid fa-angle-down"></i></div>
            </div>
            <hr class="dialog-hr">
        <div class="contact-info-container">
            <p class="hb-contact-email">thiago.dematos.1@gmail.com</p>
        </div>
        <div class="nav-social-icons">
            <div class="hb-icon-box">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-x-twitter"></i>
             </div>
        </div>
</dialog>
<dialog class="search-modal">
    <div class="search-modal-container-1">
        <button class="search-modal-close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="search-modal-container-2">
        <input class="search-input" type="text" class="search-field" placeholder="Search...">
        <i id="search-modal-icon" class="fa-solid fa-magnifying-glass"></i>
    </div>
</dialog>
    <section class="hp-banner">
        <video autoplay muted loop src="<?php echo get_template_directory_uri(); ?>/assets/bannerVideo.webm" class="banner-video"></video>
         <div class="banner-overlay">
         <nav class="navigation-bar">
      <div class="site-logo"><a href="<?php echo esc_url(home_url('/')); ?>">.comFORGE</a></div>
      <div class="navigation">
        <ul class="nav-list">
          <li class="nav-item"><a href="<?php echo site_url('/about-us/')?>">ABOUT US</a></li>
          <li class="nav-item"><a href="#">PORTFOLIO</a></li>
          <li class="nav-item"><a href="#">BLOG</a></li>
          <li class="nav-item"><a href="#">PRICING</a></li>
          <li class="nav-item"><a href="#">CONTACT</a></li>
        </ul>
      </div>
      <!-- <div class="search">
        <button class="search-btn"><i class="fa-solid fa-magnifying-glass search-glass"></i>SEARCH</button>
      </div> -->
      <div class="connect-container">
      </div>
    </nav>
            <div class="title-container">
                    <h2 class="banner-title-1">Watermellon</h2>
                    <h2 class="banner-title-3">Development</h2>
                    <h2 class="banner-title-2">Agency.</h2>
                 <h3 class="banner-subtitle">Take your website to new heights by hiring .comForge for your next project.</h3>
             </div>
             <div class="banner-btn-container">
                    <button class="banner-cta-btn">CONNECT</button>
             </div>
             <div class="agency-slogan">
                 <i class="fa-solid fa-globe globe-icon"></i>
                <p>GLOBAL WP AGENCY </p>
            </div>
        </div>
    </section>
    <section class="banner2">
        <div class="banner2-img-container">
             <img class="banner-2-img" src="<?php echo get_template_directory_uri(); ?>/assets/smiley-pc.png" alt="image of a laptop and code on the screen">
        </div>
        <div class="banner-2-info">
            <h3 class="banner-2-title">Discover what we have to offer</h3>
            <p class="banner-2-subtitle">With .comForge you can count on us to design the website of your dreams.</p>
            <button class="banner-2-btn">ABOUT US</button>
        </div>
    </section>
 <section class="service-banner">
    <h3 class="service-title-main">Services for Our Clients</h3>
    <div class="service-box first-box service-1">
        <div class="service-title-1">
            <p>01</p>
            <h4 class="service-title">Web Development</h4>
            <div class="webDev-description"></div>
        </div>
        <p class="box-open box-open-1">+</p>
    </div>
    <div class="service-box service-2">
        <div class="service-title-2">
            <p>02</p>
            <h4 class="service-title">Website Redesign</h4>
            <div class="webRD-description"></div>
        </div>
        <p class="box-open box-open-2">+</p>
    </div>
    <div class="service-box service-3">
    <div class="service-title-3">
            <p>03</p>
            <h4 class="service-title">Improve SEO</h4>
            <div class="impSEO-description"></div>
        </div>
        <p class="box-open box-open-3">+</p>
    </div>
    <div class="service-box service-4">
    <div class="service-title-4">
            <p>04</p>
            <h4 class="service-title">Website Maintenance</h4>
            <div class="webM-description"></div>
        </div>
        <p class="box-open box-open-4">+</p>
    </div>
 </section>
 <section class="page-white-space"></section>
<section class="grid-section">
    <div class="project-grid">
        <div class="project-box pb1">
            <div class="pf-image-1">
                <div class="pf-img-overlay">
                    <h3 class="pf-title-1">.comFORGE</h3>
                </div>
            </div>
            <p>Agency Website | Wordpress </p>
            <h4>.comFORGE</h4>
            <button>VIEW PROjECT <i class="fa-solid fa-arrow-up-right-from-square pj-icon"></i></button>
        </div>
        <div class="project-box pb2">
        <div class="pf-image-2">
                <div class="pf-img-overlay">
                    <h3 class="pf-title-1">devbythiago.</h3>
                </div>
            </div>
            <p>Personal Website | Porfolio | Branding</p>
            <h4>devbythiago</h4>
            <button>VIEW PROjECT <i class="fa-solid fa-arrow-up-right-from-square pj-icon"></i></button>
        </div>
        <div class="project-box pb3">
        <div class="pf-image-3">
                <div class="pf-img-overlay">
                    <h3 class="pf-title-1">.comFORGE</h3>
                </div>
            </div>
            <p>Project 3</p>
            <h4>Project 3</h4>
            <button>VIEW PROjECT <i class="fa-solid fa-arrow-up-right-from-square pj-icon"></i></button>
        </div>
        <div class="project-box pb4">
        <div class="pf-image-4">
                <div class="pf-img-overlay">
                    <h3 class="pf-title-1">.comFORGE</h3>
                </div>
            </div>
             <p>Project 4</p>
            <h4>Project 4</h4>
            <button>VIEW PROjECT <i class="fa-solid fa-arrow-up-right-from-square pj-icon"></i></button>
        </div>
        <div class="project-box pb5">VIEW ALL</div>
    </div>
</section>
<section class="team-section">
    <div class="team-container-1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/thiago-emoji.png" alt="Emoji image of Thiago">
     </div>
     <div class="team-container-2">
        <h4 class="team-heading">"Hi there"</h4>
        <p class="team-blurb">It's me Thiago and here is some information about what I do.</p>
     </div>
     
</section>
<section class="testimonial-container">
    <div class="testimonial-box">
        <h4 class="testimonial-title">Testimonials</h4>
        <div class="quote-icon">"</div>
        <p class="testimonial-quote"></p>
        <h5 class="testimonial-author"></h5>
        <p class="author-location"></p>
        <div class="testimonial circle"></div>
    </div>
    <div class="testimonial-pic">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/talking-emoji.png" alt="photo of a talkig smiley emoji">
    </div>
</section>
<section class="blog-container">
    <h3 class="blog-section-title">Read Our Article and News</h3>
    <div class="article-box">
        <?php
        $latest_posts = new WP_Query(array(
            'posts_per_page' => 3,
        ));

        if ( $latest_posts->have_posts() ) {
            while ( $latest_posts->have_posts() ) {
                $latest_posts->the_post();
        ?>
            <div class="article-card">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="blog-img">
                <?php else : ?>
                    <img src="default.jpg" alt="Default image" class="blog-img">
                <?php endif; ?>
                
                <p class="article-date"><?php echo get_the_date(); ?></p>
                <h3 class="article-title"><?php the_title(); ?></h3>
                <a class="article-btn-link" href="<?php the_permalink(); ?>" class="article-cta-btn">READ MORE</a>
            </div>
        <?php
            }
            wp_reset_postdata(); 
        } else {
            echo '<p>No posts found.</p>';
        }
        ?>
    </div>
</section>

<section class="page-white-space"></section>

<?php get_footer();
?>