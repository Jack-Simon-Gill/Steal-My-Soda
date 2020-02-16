<?php
/*
 Template Name: Reviews
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
					<div class="row">
						<div class="col-md-12">
							<?php if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<p class="text-center breadcrumbs" id="breadcrumbs">','</p>');
								} ?>
							<h1 class="text-center"><?php echo get_the_title(); ?></h1>
						</div>
					</div>
						<div class="row justify-content-center">
							<div class="col-md-9">
								<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
										<?php $query = new WP_Query( array( 'post_type' => 'review' ) );
										
											if ( $query->have_posts() ) : ?>
											<?php while ( $query->have_posts() ) : $query->the_post(); ?>  
											<div class="row">											
												<div class="col-md-12">
													<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
														<section class="entry-content cf">
    														<p class="byline entry-meta vcard">
    																<?php printf( __( '', 'bonestheme' ).' %1$s',
    																	/* the time the post was published */
    																	'<time class="updated entry-time" datetime="' . get_the_time('d-m-Y') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
    																);

                                                            $terms = get_the_terms( $post->ID, 'review_category' );
															if ($terms != null) {
																echo '&nbsp;&nbsp;  &bull;   &nbsp;&nbsp;';

																foreach ($terms as $term) {
																	$term_link = get_term_link($term);
																	echo '<a href="' . esc_url($term_link) . '">#' . $term->name . '</a> ';
																}
															} ?>

    														</p>
    														<header class="article-header">
    															<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>															
    														</header>
    														<p><?php echo the_excerpt(); ?></p>
															<p class="text-center"><?php the_post_thumbnail('full') ?></p>
                                                            <div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&amp;src=sdkpreparse">Share</a></div>
														</section>
													</article>
													<hr>
												</div>
											</div>
													<?php endwhile; ?>
														<?php bones_page_navi(); ?>
												<?php else : ?>

													<article id="post-not-found" class="hentry cf">
															<header class="article-header">
																<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
														</header>
															<section class="entry-content">
																<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
														</section>
														<footer class="article-footer">
																<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
														</footer>
													</article>

											<?php endif; ?>
									
								</main>
						</div>
					</div>
			</div>


<?php get_footer(); ?>
