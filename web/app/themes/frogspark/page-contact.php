<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>
  
  <section class="hero contact-hero py-32" style="background: url('<?php echo get_field("image"); ?>')" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="hero-content">
            <h1 data-aos="fade-up" class="mb-4"><?php echo get_field("title"); ?></h1>
            <div class="contact-content mb-12">
              <?php echo get_field("content"); ?>
            </div>
            <?php echo do_shortcode("[ninja_form id=2]"); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  


<?php get_footer(); ?>