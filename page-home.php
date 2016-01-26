<?php
/*
   Template Name: Home Page
 */
get_header(); ?>

<!-- BANNER AD
================================================== -->
<div class="ad-space">
   <div class="container">
      <div class="ad-head">
         <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 ad-box">
               <h3 class="text-center">Banner AD Space</h3>
            </div>
            <div class="col-sm-3">
               <a href="https://twitter.com/bradhussey" class="badge social twitter pull-right" target="_blank"><i class="fa fa-twitter"></i></a>
               <a href="https://facebook.com/bradhussey" class="badge social facebook pull-right" target="_blank"><i class="fa fa-facebook"></i></a>
               <a href="https://plus.google.com/+BradHussey" class="badge social gplus pull-right" target="_blank"><i class="fa fa-google-plus"></i></a>
                <form role="form" class="search-form">
                   <label for="sidebar-search" class="sr-only">Search the blog</label>
                   <input type="text" placeholder="Search the blog..." id="sidebar-search">
                </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Ad Space -->

<!-- MAGAZINE INTRO -->

<div class="mag-wrap container-fluid">
   <div class="row">
      <div class="col-md-3">
         <div class="mw-shadow mw-shadow-small">
            <?php
            $args = array( 'posts_per_page' => 1, 'orderby' => 'date', 'offset' => 1);
            $rand_posts = get_posts( $args );
            foreach ( $rand_posts as $post ) :
              setup_postdata( $post ); ?>
            	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach;
            wp_reset_postdata(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            	<header class="entry-header">
            		<?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            		<?php if ( 'post' === get_post_type() ) : ?>

            			<div class="item world">
            				<div class="item-inner">
            					<div class="mf-thumb">
            						<img src="images/content/mag/4.jpg" class="img-responsive" alt=""/>
            						<span class="mag-cat-ribbon color2"><?php the_category(', '); ?></span>
            					</div>
            					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            					<span class="nmeta"><?php the_date(); ?></span>
            					<?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i>', '</div>' ); ?>
            				</div>
            			</div>

            		<?php endif; ?>
            	</header><!-- .entry-header -->

            	<?php if ( has_post_thumbnail() ) { ?>
            	<div class="mf-thumb"> <!-- post image -->
            		<?php the_post_thumbnail(); ?>
            		<span class="mag-cat-ribbon color2"><?php the_category(', '); ?></span>
            		<?php the_excerpt(); ?> <!-- excerpt -->
            	</div>
            	<?php } ?>

            	<footer class="entry-footer">
            		<?php idioticians_entry_footer(); ?>
            	</footer><!-- .entry-footer -->
            </article><!-- #post-## -->
         </div>
         <div class="sep-2x"></div>
         <div class="mw-shadow mw-shadow-small">
            <?php
            $args = array( 'posts_per_page' => 1, 'orderby' => 'date', 'offset' => 2);
            $rand_posts = get_posts( $args );
            foreach ( $rand_posts as $post ) :
              setup_postdata( $post ); ?>
            	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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
            	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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
               <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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
               <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach;
            wp_reset_postdata(); ?>
         </div>
      </div>
      </div>
   </div>
</div>

<!-- OPT IN SECTION
================================================== -->
<section id="optin">
  <div class="container">
     <div class="row">

        <div class="col-sm-8">
           <p class="lead text-center"><strong>Get breaking news in your inbox.</strong></p>
        </div><!-- end col -->

        <div class="col-sm-4">
           <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
              Click here to subscribe
           </button>
        </div><!-- end col -->

     </div><!-- row -->
  </div><!-- container -->
</section><!-- optin -->

<!-- NEWS FEED
================================================== -->
<div class="news-feed">
<div class="container">
   <div class="nf-head">
      <div class="row">
         <div class="col-md-3">
            <h3>News Feed</h3>
         </div>
         <div class="col-md-9">
            <ul id="filters" class="clearfix newsfeed-filter" data-option-key="filter">
               <li><a href="#filter" class="active" data-option-value="*">All</a></li>
               <li><a href="#filter" data-option-value=".world">World</a></li>
               <li><a href="#filter" data-option-value=".politics">Politics</a></li>
               <li><a href="#filter" data-option-value=".travel">Travel</a></li>
               <li><a href="#filter" data-option-value=".sport">Sport</a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="containter">
         <div class="row">
            <div class="col-md-3">
               <div class="top-stories">
                  <h4>Top Stories</h4>
                  <ul>
                     <li><a href="#">Ebola-Free Pham Visits White House After Release</a><span>4 minutes ago</span></li>
                     <li><a href="#">Russia Banned Moldovan Wine Export</a><span>17 minutes ago</span></li>
                     <li><a href="#">Man arrested in Manchester car fire murder hunt</a><span>1 hour ago</span></li>
                     <li><a href="#">Writers given free homes in Leeds</a><span>1 hour ago</span></li>
                     <li><a href="#">Russia Banned Moldovan Wine Export</a><span>2 hour ago</span></li>
                     <li><a href="#">Ebola-Free Pham Visits White House After Release</a><span>2 hour ago</span></li>
                     <li><a href="#">Russia Banned Moldovan Wine Export</a><span>2 hour ago</span></li>
                     <li><a href="#">Man arrested in Manchester car fire murder hunt</a><span>3 hour ago</span></li>
                     <li><a href="#">Writers given free homes in Leeds</a><span>3 hour ago</span></li>
                  </ul>
               </div>
            </div>
      <!--<div class="row">-->
         <div class="newsfeed isotope1 col-md-9">
            <div class="item world">
               <div class="item-inner">
                  <div class="mf-thumb">
                     <img src="images/content/mag/4.jpg" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon color2">World</span>
                  </div>
                  <h4><a href="#">switzerland Economy Slowest Since Financial Crisis</a></h4>
                  <span class="nmeta">3 hours ago</span>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor.</p>
               </div>
            </div>
            <div class="item finance">
               <div class="item-inner2">
                  <div class="mf-thumb-small">
                     <img src="images/content/mag/3.png" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon-round color4">F</span>
                  </div>
                  <div class="item2-inner">
                     <h4><a href="#">Aenean lacinia bibendum nulla sed consectetur? Nullam id</a></h4>
                     <span class="nmeta">13 minutes ago</span>
                  </div>
               </div>
            </div>
            <div class="item lifestyle">
               <div class="item-inner2">
                  <div class="mf-thumb-small">
                     <img src="images/content/mag/7.png" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon-round color7">L</span>
                  </div>
                  <div class="item2-inner">
                     <h4><a href="#">Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque</a></h4>
                     <span class="nmeta">6 hours ago</span>
                  </div>
               </div>
            </div>
            <div class="item travel">
               <div class="item-inner2">
                  <div class="mf-thumb-small">
                     <img src="images/content/mag/4.png" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon-round color6">t</span>
                  </div>
                  <div class="item2-inner">
                     <h4><a href="#">Curabitur blandit tempus porttitor. Nullam id dolor nibh ultricies vehicula ut</a></h4>
                     <span class="nmeta">6 hours ago</span>
                  </div>
               </div>
            </div>
            <div class="item sport">
               <div class="item-inner">
                  <div class="mf-thumb">
                     <img src="images/content/mag/11.jpg" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon color1">Sport</span>
                  </div>
                  <h4><a href="#">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus</a></h4>
                  <span class="nmeta">1 day ago</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <div class="space30"></div>
               </div>
            </div>
            <div class="item world">
               <div class="item-inner2">
                  <div class="mf-thumb-small">
                     <img src="images/content/mag/8.png" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon-round color2">W</span>
                  </div>
                  <div class="item2-inner">
                     <h4><a href="#">Curabitur blandit tempus porttitor</a></h4>
                     <span class="nmeta">3 days ago</span>
                  </div>
               </div>
            </div>
            <div class="item finance">
               <div class="item-inner2">
                  <div class="mf-thumb-small">
                     <img src="images/content/mag/1.png" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon-round color4">F</span>
                  </div>
                  <div class="item2-inner">
                     <h4><a href="#">Curabitur blandit tempus porttitor. Nullam id dolor</a></h4>
                     <span class="nmeta">13 minutes ago</span>
                  </div>
               </div>
            </div>
            <div class="item tech">
               <div class="item-inner">
                  <div class="mf-thumb">
                     <img src="images/content/mag/10.jpg" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon color5">Tech</span>
                  </div>
                  <h4><a href="#">switzerland Economy Slowest Since Financial Crisis</a></h4>
                  <span class="nmeta">3 hours ago</span>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor.</p>
               </div>
            </div>
            <div class="item politics">
               <div class="item-inner2">
                  <div class="mf-thumb-small">
                     <img src="images/content/mag/2.png" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon-round color3">P</span>
                  </div>
                  <div class="item2-inner">
                     <h4><a href="#">Curabitur blandit tempus porttitor. Nullam id dolor</a></h4>
                     <span class="nmeta">6 hours ago</span>
                  </div>
               </div>
            </div>
            <div class="item politics">
               <div class="item-inner">
                  <div class="mf-thumb">
                     <img src="images/content/mag/12.jpg" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon color3">Politics</span>
                  </div>
                  <h4><a href="#">Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum</a></h4>
                  <span class="nmeta">1 day ago</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus.</p>
                  <div class="space30"></div>
               </div>
            </div>
            <div class="item lifestyle">
               <div class="item-inner">
                  <div class="mf-thumb">
                     <img src="images/content/mag/9.jpg" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon color7">Lifestyle</span>
                  </div>
                  <h4><a href="#">Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum</a></h4>
                  <span class="nmeta">1 day ago</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <div class="space30"></div>
               </div>
            </div>
            <div class="item sport">
               <div class="item-inner2">
                  <div class="mf-thumb-small">
                     <img src="images/content/mag/5.png" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon-round color1">s</span>
                  </div>
                  <div class="item2-inner">
                     <h4><a href="#">Duis mollis, est non commodo luctus, nisi erat</a></h4>
                     <span class="nmeta">6 hours ago</span>
                  </div>
               </div>
            </div>
            <div class="item finance">
               <div class="item-inner2">
                  <div class="mf-thumb-small">
                     <img src="images/content/mag/6.png" class="img-responsive" alt=""/>
                     <span class="mag-cat-ribbon-round color4">F</span>
                  </div>
                  <div class="item2-inner">
                     <h4><a href="#">Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante </a></h4>
                     <span class="nmeta">6 hours ago</span>
                     <div class="sep-2x"></div>
                     <div class="clearfix"></div>
                     <div class="sep-2x"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="space30"></div>
      <a href="#" class="btn-small btn-center space60">Load more</a>
   </div>
</div>
</div>
</div>

<?php get_footer(); ?>
