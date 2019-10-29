<?php get_header(); ?>
			  <div class="page-inner">
                <div class="page-main" id="pg-contribution">
                  <div class="contribution">
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
    get_template_part( 'content-contribution' );
  endwhile;
  wp_reset_postdata();
endif;
?>
                  </div>
                </div>
              </div>
<?php get_footer(); ?>
