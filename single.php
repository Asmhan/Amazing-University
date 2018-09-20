<?php
  get_header();
  while (have_posts()) {
    # code...
    the_post();
    pageBanner();
    ?>

    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo site_url('/blog');?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            Blog Home
          </a>
          <span class="metabox__main">
             Bosted by <?php echo "  "; the_author_posts_link(); echo "  ";?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?>
          </span>
        </p>
      </div>

      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>
    <?php
  }
  get_footer();
 ?>
