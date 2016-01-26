<?php
/* Template Name: About Page */

get_header();

//Advanced Custom Fields
$blogger_name_1          = get_field('blogger_name_1');
$blogger_title_1         = get_field('blogger_title_1');
$blogger_image_1         = get_field('blogger_image_1');
$twitter_username_1      = get_field('twitter_username_1');
$facebook_username_1     = get_field('facebook_username_1');
$google_plus_username_1  = get_field('google_plus_username_1');
$blogger_name_2          = get_field('blogger_name_2');
$blogger_title_2         = get_field('blogger_title_2');
$blogger_image_2         = get_field('blogger_image_2');
$twitter_username_2      = get_field('twitter_username_2');
$facebook_username_2     = get_field('facebook_username_2');
$google_plus_username_2  = get_field('google_plus_username_2');
$blogger_name_3          = get_field('blogger_name_3');
$blogger_title_3         = get_field('blogger_title_3');
$blogger_image_3         = get_field('blogger_image_3');
$twitter_username_3      = get_field('twitter_username_3');
$facebook_username_3     = get_field('facebook_username_3');
$google_plus_username_3 = get_field('google_plus_username_3');
?>

   <!-- TEAM CONTENT -->
   	<div class="team no-bg">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">
   					<div class="row">
   						<div class="col-md-4">
   							<div class="team-max">
   							<div class="staff-thumb">
                           <?php if( !empty($blogger_image_1) ): ?>
                           	<img src="<?php echo $blogger_image_1['url']; ?>" alt="<?php echo $blogger_image_1['alt']; ?>" class="img-responsive">
                           <?php endif; ?>
   								<span><a href="#"><i class="fa fa-plus"></i></a></span>
   							</div>
                        <h4><?php echo $blogger_name_1; ?><span><?php echo $blogger_title_1; ?></span></h4>
                           <!-- TEAM CONTENT -->
                        <ul class="team-social">
                           <?php //if( !empty($twitter_username_1) ): ?>
                           <a href="https://twitter.com/<?php //echo $twitter_username_1; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                           <?php //endif; ?>

                           <?php //if( !empty($facebook_username_1) ): ?>
                           <a href="https://facebook.com/<?php //echo $facebook_username_1; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                           <?php //endif; ?>

                           <?php //if( !empty($google_plus_username_1) ): ?>
                           <a href="https://plus.google.com/<?php //echo $google_plus_username_1; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                           <?php //endif; ?>
                        </ul>
                        </div>
                     </div>

                     <div class="col-md-4">
                        <div class="team-max">
                        <div class="staff-thumb">
                           <?php if( !empty($blogger_image_2) ): ?>
                              <img src="<?php echo $blogger_image_2['url']; ?>" alt="<?php echo $blogger_image_2['alt']; ?> class="img-responsive">
                           <?php endif; ?>
   								<span><a href="#"><i class="fa fa-plus"></i></a></span>
   							</div>
                        <h4><?php echo $blogger_name_2; ?><span><?php echo $blogger_title_2; ?></span></h4>
                        <ul class="team-social">
                           <?php if( !empty($twitter_username_2) ): ?>
                           <a href="https://twitter.com/<?php echo $twitter_username_2; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                           <?php endif; ?>

                           <?php if( !empty($facebook_username_2) ): ?>
                           <a href="https://facebook.com/<?php echo $facebook_username_2; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                           <?php endif; ?>

                           <?php if( !empty($google_plus_username_2) ): ?>
                           <a href="https://plus.google.com/<?php echo $google_plus_username_2; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                           <?php endif; ?>
                         </ul>
                        </div>
                     </div>

                     <div class="col-md-4">
                        <div class="team-max">
                        <div class="staff-thumb">
                           <?php if( !empty($blogger_image_3) ): ?>
                           	<img src="<?php echo $blogger_image_3['url']; ?>" alt="<?php echo $blogger_image_3['alt']; ?> class="img-responsive">
                           <?php endif; ?>
                           <span><a href="#"><i class="fa fa-plus"></i></a></span>
   							</div>
                        <h4><?php echo $blogger_name_3; ?><span><?php echo $blogger_title_3; ?></span></h4>
                        <ul class="team-social">
                           <?php if( !empty($twitter_username_2) ): ?>
                           <a href="https://twitter.com/<?php echo $twitter_username_3; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                           <?php endif; ?>

                           <?php if( !empty($facebook_username_3) ): ?>
                           <a href="https://facebook.com/<?php echo $facebook_username_3; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                           <?php endif; ?>

                           <?php if( !empty($google_plus_username_3) ): ?>
                           <a href="https://plus.google.com/<?php echo $google_plus_username_3; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                           <?php endif; ?>
                         </ul>
                        </div>
                     </div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
<?php get_footer(); ?>
