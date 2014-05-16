<?php get_header(); ?>
<?php if( is_front_page() ): ?>
  <div class="row">
    <div class="large-12 columns" id="slide"  >

      <ul class="example-orbit" data-orbit>
        <?php

        $pagina = get_page_by_title( 'slides' );

        $imagens = get_posts( array('post_type' => 'attachment', 'post_parent' => $pagina->ID, 'numberposts' => null) );

        if ($imagens):
          foreach ($imagens as $imagem) :
            $imgem_link = wp_get_attachment_url($imagem->ID);
            echo '<li><img  src="'.$imgem_link.'" /></li>';
          endforeach;
        endif;
        ?>
      </ul>

    </div>
  </div>
<?php else: ?>
  <div class="row">
    <div class="large-8 columns" >
      <?php if ( have_posts() ):  ?>
        <?php while ( have_posts() ):?>
          <?php the_post();?>
          <h2><?php the_title(); ?></h2>
          <hr />
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="large-4 columns" >
      <?php get_sidebar(); ?>
    </div>
  </div>
<? endif; ?>
<?php get_footer(); ?>