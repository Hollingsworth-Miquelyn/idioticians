<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Idioticians
 */

get_header(); ?>

 	<?php if ( have_posts() ) : ?>
      <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
         <h1 class="page-title">
         <?php
         	the_archive_title( '', '' );
         	the_archive_description( '<small class="taxonomy-description">', '</small>' );
         ?>
         </h1>
      </section>
         <div class="container">
            <div id="primary">
            	<main id="content" class="col-sm-8">
                  <?php /* Start the Loop */ ?>
                  <?php while ( have_posts() ) : the_post(); ?>

                  <?php
                  /* Include the Post-Format-specific template for the content.
                  * If you want to override this in a child theme, then include a file
                  * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                  */
                  	get_template_part( 'template-parts/content', get_post_format() );
                  ?>

                  <?php endwhile; ?>

                  <?php the_posts_navigation(); ?>

                	<?php else : ?>

                        <?php get_template_part( 'template-parts/content', 'none' ); ?>

                	<?php endif; ?>
               </main><!--content-->
               <aside class="col-sm-4">
               	<?php get_sidebar(); ?>
               </aside>
            </div><!-- primary -->
      	</div><!-- container -->

<?php get_footer(); ?>
