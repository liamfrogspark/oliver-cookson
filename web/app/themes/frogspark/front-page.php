<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>
  
  <section class="hero py-32" style="background: url('<?php echo get_field("image"); ?>')" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="hero-content">
            <h1 data-aos="fade-up"><?php echo get_field("title"); ?></h1>
            <div class="hero-line left-line" data-aos="fade-up">
              <?php echo get_field("content"); ?>
              <a href="<?php echo get_field("button")['url']; ?>" class="btn btn-primary"><?php echo get_field("button")['title']; ?></a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="book-section py-16">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <div class="book-content" data-aos="fade-up" data-aos-offset="-100">
            <p class="text-primary h5 italic"><?php echo get_field("book_subtitle"); ?></p>
            <h2 class="h2"><?php echo get_field("book_title"); ?></h2>
            <?php echo get_field("book_content"); ?>
            <?php if(get_field('order_url')): ?>
              <a href="<?php echo get_field('order_url')['url']; ?>" target="_blank" class="btn btn-secondary"><?php echo get_field('order_url')['title']; ?></a>
            <?php endif; ?>
          </div>
          <div class="available mt-8">
            <?php if(get_field('available_logos')): ?>
            <p class="italic grey">Available at</p>
            <div class="logos">
              <?php foreach(get_field("available_logos") as $log): ?>
              <a href="#"><img src="<?php echo $log['logo']; ?>"></a>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            
            
            
          </div>

        </div>
        <div class="col-md-6 order-lg-1">
          <div class="book-bg-wrap" data-aos="fade-up"  data-aos-offset="-100">
            <div class="book-bg" style="background: url(<?php echo get_field("book_image"); ?>)"></div>
            <div class="fade-wrap" data-aos="zoom-in-left" data-aos-offset="-100" data-aos-delay="1000" data-aos-duration="1200">
            <div class="book-shadow"></div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  
  <?php if(get_field("show_podcast_section")): ?>
  
  <section class="podcast-section pt-32" style="background: url(<?php echo get_field("podcast_background_image"); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="podcast-content mt-12" data-aos="fade-up">
            <h2><?php echo get_field("podcast_title"); ?></h2>
            <div class="left-line" data-aos="fade-up">
              <?php echo get_field("podcast_content"); ?>
            </div>
            
            <div class="pod-links">
              <?php if(!empty(get_field("apple_link"))): ?>
              <a href="<?php echo get_field("apple_link"); ?>" class="" target="_blank"><img src="/img/apple.png"></a>
              <?php endif; ?>
              <?php if(!empty(get_field("spotify_link"))): ?>
              <a href="<?php echo get_field("spotify_link"); ?>" class="" target="_blank"><img src="/img/spotify.png"></a>
              <?php endif; ?>
              
            </div>
            <?php if(get_field("signature_image")): ?>
            <img src="<?php echo get_field("signature_image") ?>" class="sig mt-8">
            <?php endif; ?>
            <a href="/contact" class="btn btn-primary mt-8">Submit a question for Oliver to answer on the podcast here</a>

          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="pod-img" data-aos="fade-down">
            <img src="<?php echo get_field("podcast_image") ?>">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php endif; ?>
  
  <section class="record-section pt-12 pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="heading-section text-center mt-4 pb-12" data-aos="fade-up">
            <p class="text-primary mb-0"><?php echo get_field("journey_small_title") ?></p>
            <h2 class="mb-0"><?php echo get_field("journey_title") ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="timeline-section py-0 pb-24">
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

            
          </div>
        </div>
      </div>
    </div>
  </section>
  
<!--
  <section class="record-section py-12">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="heading-section text-center mt-4 pb-12" data-aos="fade-up">
            <p class="text-primary mb-0"><?php echo get_field("journey_small_title") ?></p>
            <h2 class="mb-0"><?php echo get_field("journey_title") ?></h2>
          </div>
          <div class="slide-wrap" data-aos="fade-up">
            
            <div class="journey-slider">
              <?php foreach(get_field("journey_items") as $it): ?>
              
              <div class="slide">
                <p class="title text-primary"><?php echo $it['title'] ?></p>
                <p><?php echo $it['content'] ?></p>
              </div>
              
              <?php endforeach; ?>

            </div>
            
            <div class="text-center mt-0">
              <a href="#" class="prev"><img src="/img/left-arrow.png"></a>
              <a href="#" class="next"><img src="/img/right-arrow.png"></a>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
  </section>
-->
  
  <section class="book-section contact-section py-16">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6">
          <div class="book-content" data-aos="fade-up" data-aos-offset="-100">
            <p class="text-primary h5 italic"><?php echo get_field("contact_small_title"); ?></p>
            <h2 class="h2"><?php echo get_field("contact_title"); ?></h2>
            <?php echo do_shortcode("[ninja_form id=2]"); ?>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="book-bg-wrap" data-aos="fade-up"  data-aos-offset="-100">
            <div class="book-bg" style="background: url(<?php echo get_field('contact_image')['url'] ?>)"></div>
            <div class="fade-wrap" data-aos="zoom-in-right" data-aos-offset="-100" data-aos-delay="1000" data-aos-duration="1200">
            <div class="book-shadow"></div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </section>
  
  <section class="press-section py-12">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="heading-section text-left mt-4 pb-12">
            <p class="text-primary mb-0"><?php echo get_field("featured_small_title"); ?></p>
            <h2 class="mb-0"><?php echo get_field("featured_title"); ?></h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="heading-section text-left mt-4 pb-12 d-none d-lg-block">
            <div class="text-right mt-12">
              <a href="#" class="prevv"><img src="/img/left-arrow.png"></a>
              <a href="#" class="nextt"><img src="/img/right-arrow.png"></a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="slide-wrap">
            
            <div class="press-slider">
              <?php foreach(get_field("featured_logos") as $it): ?>
              
                <div class="slide">
                  <img src="<?php echo $it['logo'] ?>">
                </div>
              
              <?php endforeach; ?>
              
              
              
              <div class="slide">
                <img src="/img/times.png">
              </div>
              <div class="slide">
                <img src="/img/times.png">
              </div>
              <div class="slide">
                <img src="/img/times.png">
              </div>
              <div class="slide">
                <img src="/img/times.png">
              </div>
              <div class="slide">
                <img src="/img/times.png">
              </div>
              <div class="slide">
                <img src="/img/times.png">
              </div>
              <div class="slide">
                <img src="/img/times.png">
              </div>
            </div>
            
            
            
          </div>
        </div>
        
        <div class="heading-section text-left d-block d-lg-none">
          <div class="text-right mt-12">
            <a href="#" class="prevv"><img src="/img/left-arrow.png"></a>
            <a href="#" class="nextt"><img src="/img/right-arrow.png"></a>
          </div>
        </div>
        
      </div>
    </div>
  </section>

<?php get_footer(); ?>