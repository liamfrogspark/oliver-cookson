<?php /* Template Name: Book */ ?>
<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>
  
  <section class="hero grey-hero about-hero book-hero py-32" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="hero-content">
            <h1 data-aos="fade-up">Title of book</h1>
            <div class="hero-line left-line" data-aos="fade-up">
              <p>In 2004, Oliver Cookson borrowed £500 from the bank and went on to create the number one sports nutrition company in Europe, Myprotein. Circled by buyers including over a dozen private equity bidders and global conglomerates, he sold the company just seven years later for £58 million in a combined cash and shares deal with 100% equity.</p>

<p>Now, for the first time, Cookson tells his story. How he built his empire on a shoestring at just 24, why he chose to sell and the risks, setbacks and triumphs encountered along the way.</p>

<p>During this humorous, intimate and inspiring journey, Cookson shares his life lessons for anyone in business. From students with an idea to FTSE 100 CEOs, this book will inspire all to reach for their goals and bootstrap their life.</p>

Published Autumn 2020. Register interest for updates or pre-order now.</p>
                <br><a href="#" class="btn btn-secondary">Pre-order now</a>
            </div>
            <div class="available mt-8">
            <p class="italic grey">Available at</p>
            <div class="logos">
              <?php foreach(get_field("available_logos", 2) as $log): ?>
              <a href="#"><img src="<?php echo $log['logo']; ?>"></a>
              <?php endforeach; ?>
            </div>
            
            
            
          </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="book-bg-wrap" data-aos="fade-up"  data-aos-offset="-100">
            <div class="book-bg" style="background: url(/img/book.jpg)"></div>
            <div class="fade-wrap" data-aos="zoom-in-left" data-aos-offset="-100" data-aos-delay="1000" data-aos-duration="1200">
            <div class="book-shadow"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="sect1" class="book-section test-section abt-section py-16">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <div class="book-content" data-aos="fade-up" data-aos-offset="-100">
            <p class="text-primary h5 italic">Reviews</p>
            <h2 class="h2">What are they saying</h2>
            <p>Donec erat nunc, dignissim a convallis in, egestas sed tellus. In et imperdiet justo. Mauris tincidunt maximus mi nec ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin cursus egestas mauris eget semper. Cras euismod vel ligula vitae laoreet. </p>
            <p>Aliquam viverra eros nulla, in rhoncus dui cursus ac. Quisque nec pulvinar mauris. Maecenas finibus, enim vehicula sagittis gravida, lacus tortor molestie tellus, quis dictum velit urna vel ipsum. Mauris sollicitudin volutpat sapien euismod commodo. Nam in placerat erat.</p>
            <p>Nullam fermentum dolor vel imperdiet semper. Nam ut tortor sed orci accumsan sodales ac nec magna. Proin finibus libero eget ante eleifend eleifend. Nam imperdiet risus arcu, non tristique nisl vehicula sed. Cras lacinia diam sed leo congue, sit amet ornare erat efficitur. Praesent maximus ante ut tortor pulvinar, posuere tincidunt massa sollicitudin. Proin ac tempor turpis. Donec quis lacinia ligula. Nunc sollicitudin luctus mi non tincidunt. </p>
            <p>Donec erat nunc, dignissim a convallis in, egestas sed tellus. In et imperdiet justo. Mauris tincidunt maximus mi nec ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin cursus egestas mauris eget semper. Cras euismod vel ligula vitae laoreet. </p>
            <p>Aliquam viverra eros nulla, in rhoncus dui cursus ac. Quisque nec pulvinar mauris. Maecenas finibus, enim vehicula sagittis gravida, lacus tortor molestie tellus, quis dictum velit urna vel ipsum. Mauris sollicitudin volutpat sapien euismod commodo. Nam in placerat erat.</p>
            
          </div>
        </div>
        <div class="col-md-6 order-lg-1">
          <div class="book-bg-wrap grey-bg" data-aos="fade-up"  data-aos-offset="-100">
            <div class="book-bg" style="background: url(<?php echo get_field("about_image", 101); ?>)"></div>
            <div class="fade-wrap" data-aos="zoom-in-left" data-aos-offset="-100" data-aos-delay="1000" data-aos-duration="1200">
            <div class="book-shadow"></div>
            </div>
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