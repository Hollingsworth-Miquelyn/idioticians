<!-- MAGAZINE INTRO -->

<div class="mag-wrap container-fluid">
   <div class="row">
      <div class="col-md-3">
         <div class="mw-shadow mw-shadow-small">
            <?php
            $args = array( 'posts_per_page' => 1, 'orderby' => 'date', 'offset' => 1);
            $recent_posts = get_posts( $args );
            foreach ( $recent_posts as $post ) :
              setup_postdata( $post ); ?>
            	<a href="<?php the_permalink(); ?>" class="thumbnails">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('150, 150', array('class' => 'img-responsive'));
 						} ?>
					</a>
					<span class="mag-cat-ribbon color2"><?php the_category(', '); ?><br><?php the_date('m/d/Y'); ?></span>
					<div class="mws-inner">
						<?php the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
					</div>
            <?php endforeach;
            wp_reset_postdata(); ?>
         </div>
         <div class="sep-2x"></div>
         <div class="mw-shadow mw-shadow-small">
				<?php
            $args = array( 'posts_per_page' => 1, 'orderby' => 'date', 'offset' => 2);
            $rand_posts = get_posts( $args );
				foreach ( $rand_posts as $post ) :
              setup_postdata( $post ); ?>
            	<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('150, 150', array('class' => 'img-responsive'));
 						} ?>
					</a>
					<span class="mag-cat-ribbon color2"><?php the_category(', '); ?><br><?php the_date('m/d/Y'); ?></span>
					<div class="mws-inner">
						<?php the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
					</div>
            <?php endforeach;
            wp_reset_postdata(); ?>
         </div>
      </div>
      <div class="col-md-6">
         <div class="mw-shadow">
				<?php
            $args = array( 'posts_per_page' => 1, 'orderby' => 'date');
				$rand_posts = get_posts( $args );
				foreach ( $rand_posts as $post ) :
              setup_postdata( $post ); ?>
            	<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('300, 150', array('class' => 'img-responsive'));
 						} ?>
					</a>
					<span class="mag-cat-ribbon color2"><?php the_category(', '); ?><br><?php the_date('m/d/Y'); ?></span>
					<div class="mws-inner">
						<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					</div>
            <?php endforeach;
            wp_reset_postdata(); ?>
         </div>
      </div>
      <div class="col-md-3">
         <div class="mw-shadow mw-shadow-small">
				<?php
            $args = array( 'posts_per_page' => 1, 'orderby' => 'date', 'offset' => 3);
            $rand_posts = get_posts( $args );
				foreach ( $rand_posts as $post ) :
              setup_postdata( $post ); ?>
            	<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('150, 150', array('class' => 'img-responsive'));
 						} ?>
					</a>
					<span class="mag-cat-ribbon color2"><?php the_category(', '); ?><br><?php the_date('m/d/Y'); ?></span>
					<div class="mws-inner">
						<?php the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
					</div>
            <?php endforeach;
            wp_reset_postdata(); ?>
         </div>
         <div class="sep-2x"></div>
         <div class="mw-shadow mw-shadow-small">
				<?php
            $args = array( 'posts_per_page' => 1, 'orderby' => 'date', 'offset' => 4);
            $rand_posts = get_posts( $args );
				foreach ( $rand_posts as $post ) :
              setup_postdata( $post ); ?>
            	<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('150, 150', array('class' => 'img-responsive'));
 						} ?>
					</a>
					<span class="mag-cat-ribbon color2"><?php the_category(', '); ?><br><?php the_date('m/d/Y'); ?></span>
					<div class="mws-inner">
						<?php the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
					</div>
            <?php endforeach;
            wp_reset_postdata(); ?>
         </div>
      </div>
      </div>
   </div>
</div>
