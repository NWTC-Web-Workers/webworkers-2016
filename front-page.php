<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webworkers-2016
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
            <section class="container row">
                <div class="col-md-12 next-meeting">
                    <h3>Next Meetup:</h3>
                    <date>May 24th</date>
                </div>
            </section>
        
        
            <section class="jumbotron row">
                <div class="col-md-9">
                    <h1>NWTC Web Workers</h1>
                    <p>Learn. Share. Stay in touch.</p>
                </div>
                <div class="col-md-3">
                    <!-- Begin MailChimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup{
                            background:transparent; 
                            clear:left; 
                            color: hsla(0,0%,100%,1.00);
                            font-size:14px; 
                          }
                          #mc_embed_signup .button {
                              background-color: hsla(31, 78%, 53%, 1);
                              color: hsla(0,0%,100%, 1);
                              border-color: hsl(31, 78%, 53%);    
                              border: 1px solid hsl(31, 78%, 53%);
                              box-shadow: none;
                          }                      
                          #mc_embed_signup .button:hover{
                              box-shadow: none;
                              background-color: hsla(31, 78%, 53%, .30);
                              color: hsl(31, 78%, 53%);
                              
                          }
                          #mc_embed_signup #mce-success-response {
                                color: hsla(31, 78%, 53%, 1);   
                           }
                        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                        <form action="//nwtcwebworkers.us13.list-manage.com/subscribe/post?u=7e697a70c032ac038787e38b3&amp;id=d67ce0feaf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                            <h2>Join the Web Workers</h2>
                            <div class="mc-field-group">
                                <label for="mce-EMAIL">Email Address</label>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7e697a70c032ac038787e38b3_d67ce0feaf" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                    </div>
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                    <!--End mc_embed_signup-->
                </div>
            
            
            </section>
            
            <section class="row container about-us">
                <div class="col-md-12">
                    <p>
                        NWTC Web Workers is Northeast Wisconsin Technical College's web development alumni group.
                        We meet to share what we've learned outside of the classroom walls and keep in touch. Come to our next meetup
                        for some cool demos and some good conversation!
                    </p>
                </div>
            </section>
            
            

		<?php
		//if ( have_posts() ) :
//
//			if ( is_home() && ! is_front_page() ) : ?>
				<!--<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>-->

			<?php
//			endif;
//
//			/* Start the Loop */
//			while ( have_posts() ) : the_post();
//
//				/*
//				 * Include the Post-Format-specific template for the content.
//				 * If you want to override this in a child theme, then include a file
//				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//				 */
//				get_template_part( 'template-parts/content', get_post_format() );
//
//			endwhile;
//
//			the_posts_navigation();
//
//		else :
//
//			get_template_part( 'template-parts/content', 'none' );
//
//		endif; ?>


        


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
