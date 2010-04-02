<?php get_header(); ?>
    <?php if (have_posts()) : ?>
    
    <div class="breadcrumb">
    <?php
    if(function_exists('bcn_display'))
    {
	    bcn_display();
    }
    ?>
    </div>

    
    <?php while (have_posts()) : the_post(); ?>
      <h1 class="pagetitle"><?php the_title(); ?></h1>
      <div class="entry page clear">
        <?php the_content(); ?>
        <?php edit_post_link(__('Edit This','<p>','</p>', 'titan')); ?>
        <?php wp_link_pages(); ?>
        <ul class="subpages-toc">
          <?php wp_list_pages('title_li=Capitole&child_of='.$post->ID); ?>
        </ul>
      </div><!--end entry-->
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <?php comments_template('', true); ?>
    <?php else : ?>
    <?php endif; ?>
  </div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
