<?php /* Template Name: About */ ?>
<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>
  
  <section class="hero grey-hero about-hero py-32" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="hero-content">
            <h1 data-aos="fade-up"><?php echo get_field("title"); ?></h1>
            <div class="hero-line left-line" data-aos="fade-up">
              <?php echo get_field("content"); ?>
              <a href="#sect1" class="scrolllink">Scroll<img src="/img/right-arrow.png"></a>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="quote">
            <h2><?php echo get_field("quote"); ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="sect1" class="book-section abt-section py-16">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <div class="book-content" data-aos="fade-up" data-aos-offset="-100">
            <p class="text-primary h5 italic"><?php echo get_field("about_small_title"); ?></p>
            <h2 class="h2"><?php echo get_field("about_title"); ?></h2>
            <?php echo get_field("about_content"); ?>
          </div>
        </div>
        <div class="col-md-6 order-lg-1">
          <div class="book-bg-wrap" data-aos="fade-up"  data-aos-offset="-100">
            <div class="book-bg" style="background: url(<?php echo get_field("about_image"); ?>)"></div>
            <div class="fade-wrap" data-aos="zoom-in-left" data-aos-offset="-100" data-aos-delay="1000" data-aos-duration="1200">
            <div class="book-shadow"></div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  
  <section class="record-section timeline-section pt-12 pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="heading-section text-center mt-4 pb-12" data-aos="fade-up">
            <p class="text-primary mb-0"><?php echo get_field("journey_small_title", 2) ?></p>
            <h2 class="mb-0"><?php echo get_field("journey_title", 2) ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="timeline-section py-0 pb-12">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="slide-wrap" data-aos="fade-up">
            
            <div class="alt-slider">
              <?php foreach(get_field("journey_items", 2) as $it): ?>
              
              <div class="slide">
                <div class="content">
                <p class="title text-primary"><?php echo $it['title'] ?></p>
                <p><?php echo $it['content'] ?></p>
                </div>
              </div>
              
              <?php endforeach; ?>

            </div>
<!--
            
            <div class="text-center mt-0">
              <a href="#" class="prev"><img src="/img/left-arrow.png"></a>
              <a href="#" class="next"><img src="/img/right-arrow.png"></a>
            </div>
-->
            
            
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="book-section contact-section py-16">
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
  
  <?php if(get_field("show_podcast_section", 2)): ?>
  
  <section class="podcast-section pt-32" style="background: url(<?php echo get_field("podcast_background_image", 2); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="podcast-content mt-12" data-aos="fade-up">
            <h2><?php echo get_field("podcast_title", 2); ?></h2>
            <div class="left-line" data-aos="fade-up">
              <?php echo get_field("podcast_content", 2); ?>
            </div>
            
            <div class="pod-links">
              <?php if(!empty(get_field("spotify_link", 2))): ?>
              <a href="<?php echo get_field("spotify_link"); ?>" class="" target="_blank"><img src="/img/spotify.png"></a>
              <?php endif; ?>
              <?php if(!empty(get_field("apple_link", 2))): ?>
              <a href="<?php echo get_field("apple_link", 2); ?>" class="" target="_blank"><img src="/img/apple.png"></a>
              <?php endif; ?>
            </div>
            
            <img src="<?php echo get_field("signature_image", 2) ?>" class="sig mt-8">
            
            <a href="/contact" class="btn btn-primary mt-8">Submit a question for Oliver to answer on the podcast here</a>

          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="pod-img" data-aos="fade-down">
            <img src="<?php echo get_field("podcast_image", 2) ?>">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php endif; ?>



<?php get_footer(); ?>