<?php get_header(); ?>
			  <div class="page-inner">
                <div class="page-main" id="pg-common">
                  <ul class="commons">
<?php
$parent_id = get_the_ID();
$args = array(
  'posts_per_page' => -1,
  'post_type' => 'page',
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'post_parent' => $parent_id,
);
$common_pages = get_child_pages();
if( $common_pages->have_posts() ):
  while( $common_pages->have_posts() ): $common_pages->the_post();
    get_template_part( 'content-common' );
  endwhile;
  wp_reset_postdata();
endif;
?>
                  </ul>
                </div>
              </div>
<?php get_footer(); ?>
