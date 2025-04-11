<?php get_header(); ?>

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
                    <h2 class="banner-title-1">Wordpress Development</h2>
                    <h2 class="banner-title-2">Agency</h2>
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

<?php get_footer(); ?>