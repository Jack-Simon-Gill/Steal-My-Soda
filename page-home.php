<?php
/*
 Template Name: Home
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">
				<div class="container">
				<div id="inner-content" class="wrap cf">
					<div class="row">
						<div class="col-md-12">

							<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							    <div class="row">
							        <div class="col-md-12">
							            <h6 class="text-center featured">Featured Blogs</h6>
							        </div>
							     </div>
							    <div class="row">
							        <?php
							        $args = array(
							            'post_type' => 'post',
							        );
                                        $the_query = new WP_Query( $args );
                                    
                                        if ( $the_query->have_posts() ) {
	                                        while ( $the_query->have_posts() ) { 
	                                        $the_query->the_post();
	                                        ?>
	                                        <div class="col-md-4">
	                                            <p class="text-center"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium') ?></a></p>
	                                            <?php
	                                            echo '<p class="text-center site-tag">Stealmysoda</p>';
		                                        echo '<p class="text-center uppercase"><a href="'.get_the_permalink() .'">'.get_the_title() .'</a></p>';
		                                        $strapline = get_field('strapline');
		                                        echo '<p class="text-center"><a href="'.get_the_permalink() .'">'. $strapline .'</a></p>'; ?>
	                                        </div>
	                                        <?php
	                                    }
	                                        wp_reset_postdata();
                                        } else {
                                        }
                                    ?>
                                </div>
                                <hr>
                                <div class="row">
							        <div class="col-md-12">
							            <h6 class="text-center featured">Featured Reviews</h6>
							        </div>
							     </div>
							    <div class="row">
							        <?php
							        $args = array(
							            'post_type' => 'review',
							        );
                                        $the_query = new WP_Query( $args );
                                    
                                        if ( $the_query->have_posts() ) {
	                                        while ( $the_query->have_posts() ) { 
	                                        $the_query->the_post();
	                                        ?>
	                                        <div class="col-md-4">
	                                            <p class="text-center"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium') ?></a></p>
	                                            <?php
	                                            echo '<p class="text-center site-tag">Stealmysoda</p>';
		                                        echo '<p class="text-center uppercase"><a href="'.get_the_permalink() .'">'.get_the_title() .'</a></p>';
		                                        $strapline = get_field('strapline');
		                                        echo '<p class="text-center"><a href="'.get_the_permalink() .'">'. $strapline .'</a></p>'; ?>
	                                        </div>
	                                        <?php
	                                    }
	                                        wp_reset_postdata();
                                        } else {
                                        }
                                    ?>
                                </div>
                                <hr><div class="row">
							        <div class="col-md-12">
							            <h6 class="text-center featured">Featured Travel</h6>
							        </div>
							     </div>
							    <div class="row">
							        <?php
							        $args = array(
							            'post_type' => 'travels',
							        );
                                        $the_query = new WP_Query( $args );
                                    
                                        if ( $the_query->have_posts() ) {
	                                        while ( $the_query->have_posts() ) { 
	                                        $the_query->the_post();
	                                        ?>
	                                        <div class="col-md-4">
	                                            <p class="text-center"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium') ?></a></p>
	                                            <?php
	                                            echo '<p class="text-center site-tag">Stealmysoda</p>';
		                                        echo '<p class="text-center uppercase"><a href="'.get_the_permalink() .'">'.get_the_title() .'</a></p>';
		                                        $strapline = get_field('strapline');
		                                        echo '<p class="text-center"><a href="'.get_the_permalink() .'">'. $strapline .'</a></p>'; ?>
	                                        </div>
	                                        <?php
	                                    }
	                                        wp_reset_postdata();
                                        } else {
                                        }
                                    ?>
                                </div>
                                <hr>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="row">
                                    <div class="col-md-8">
        								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
        									
        
        									<section class="entry-content cf" itemprop="articleBody">
        										<?php
        											// the content (pretty self explanatory huh)
        											the_content();
        
        											/*
        											 * Link Pages is used in case you have posts that are set to break into
        											 * multiple pages. You can remove this if you don't plan on doing that.
        											 *
        											 * Also, breaking content up into multiple pages is a horrible experience,
        											 * so don't do it. While there are SOME edge cases where this is useful, it's
        											 * mostly used for people to get more ad views. It's up to you but if you want
        											 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
        											 *
        											 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
        											 *
        											*/
        											wp_link_pages( array(
        												'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
        												'after'       => '</div>',
        												'link_before' => '<span>',
        												'link_after'  => '</span>',
        											) );
        										?>
        									</section>
        
        								</article>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center"><?php the_post_thumbnail('medium') ?></div>
                                    </div>
                                </div>
								<?php endwhile; else : ?>

										<article id="post-not-found" class="hentry cf">
												<header class="article-header">
													<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
											</header>
												<section class="entry-content">
													<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
											</section>
											<footer class="article-footer">
													<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
											</footer>
										</article>

								<?php endif; ?>

							</main>


						</div>
					</div>
				</div>

			</div>
</div>

<?php get_footer(); ?>
