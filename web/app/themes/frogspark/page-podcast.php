<?php /* Template Name: Podcast */ ?>
<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>
  
  <section class="hero grey-hero about-hero pod-hero py-32 pb-0" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="hero-content">
            <h1 data-aos="fade-up"><?php echo get_field("podcast_title", 2); ?></h1>
            <div class="hero-line left-line" data-aos="fade-up">
              
              <?php echo get_field("podcast_content", 2); ?>
              <div class="pod-links">
                <?php if(!empty(get_field("apple_link", 2))): ?>
                <a href="<?php echo get_field("apple_link", 2); ?>" class="" target="_blank"><img src="/img/apple.png"></a>
                <?php endif; ?>
                <?php if(!empty(get_field("spotify_link", 2))): ?>
                <a href="<?php echo get_field("spotify_link"); ?>" class="" target="_blank"><img src="/img/spotify.png"></a>
                <?php endif; ?>
                
              </div>
              
<!--               <img src="<?php echo get_field("signature_image", 2) ?>" class="sig mt-8"> -->
              </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="book-bg-wrap" data-aos="fade-up"  data-aos-offset="-100">
            <img src="<?php echo get_field("podcast_image", 2) ?>" class="hero-pod">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="episodes abt-section py-16" style="display: none;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="embed-wrap">
            <iframe src="https://open.spotify.com/embed-podcast/episode/5HWoAEjIDTvbcYkhJzEZVY" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="embed-wrap">
            <iframe src="https://open.spotify.com/embed-podcast/episode/5HWoAEjIDTvbcYkhJzEZVY" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
        <div class="col-md-6">
          <div class="embed-wrap">
            <iframe src="https://open.spotify.com/embed-podcast/episode/5HWoAEjIDTvbcYkhJzEZVY" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="embed-wrap">
            <iframe src="https://open.spotify.com/embed-podcast/episode/5HWoAEjIDTvbcYkhJzEZVY" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
        <div class="col-md-6">
          <div class="embed-wrap">
            <iframe src="https://open.spotify.com/embed-podcast/episode/5HWoAEjIDTvbcYkhJzEZVY" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="embed-wrap">
            <iframe src="https://open.spotify.com/embed-podcast/episode/5HWoAEjIDTvbcYkhJzEZVY" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
        <div class="col-md-6">
          <div class="embed-wrap">
            <iframe src="https://open.spotify.com/embed-podcast/episode/5HWoAEjIDTvbcYkhJzEZVY" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="embed-wrap">
            <iframe src="https://open.spotify.com/embed-podcast/episode/5HWoAEjIDTvbcYkhJzEZVY" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
        <div class="col-md-6">
          <div class="embed-wrap">
            <iframe src="https://open.spotify.com/embed-podcast/episode/5HWoAEjIDTvbcYkhJzEZVY" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
      </div>
    </div>

  </section>

  
  <section class="book-section contact-section py-16 mt-16">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6">
          <div class="book-content" data-aos="fade-up" data-aos-offset="-100">
            <p class="text-primary h5 italic"><?php echo get_field("contact_small_title", 2); ?></p>
            <h2 class="h2"><?php echo get_field("contact_title", 2); ?></h2>
            <?php echo do_shortcode("[ninja_form id=1]"); ?>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="book-bg-wrap" data-aos="fade-up"  data-aos-offset="-100">
            <div class="book-bg" style="background: url('/app/uploads/2020/05/cookson-big.jpg')"></div>
            <div class="fade-wrap" data-aos="zoom-in-right" data-aos-offset="-100" data-aos-delay="1000" data-aos-duration="1200">
            <div class="book-shadow"></div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </section>
  



<?php get_footer(); ?>