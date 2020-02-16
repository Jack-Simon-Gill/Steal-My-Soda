<?php
/*
 * CUSTOM POST TYPE TAXONOMY TEMPLATE
 *
 * This is the custom post type taxonomy template. If you edit the custom taxonomy name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom taxonomy is called "register_taxonomy('shoes')",
 * then your template name should be taxonomy-shoes.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates#Displaying_Custom_Taxonomies
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
							<h1 class="text-center"><?php single_cat_title(); ?></h1>
						</div>
					</div>
				</div>
				<div class="container">
						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						    <div class="row">
					        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							    <?php 
									$rowcounter = 0;
									$imagecounter = 0; 
								?>
                                <div class="col-md-4">
    							    <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
													    
										<?php 
                                                        $image = get_field('photograph');
                                                        if( !empty($image) ): ?>
	                                                        <a href="<?php echo $image['url']; ?>" data-lightbox="photograph-<?php echo $imagecounter;?>"><img src="<?php echo $image['url']; ?>" width="100%" height="auto" alt="<?php echo $image['alt']; ?>" /></a>
                                                        <?php endif; ?>
                                                        
														<section class="entry-content cf">
														<p class="byline entry-meta vcard text-center">
																<?php printf( __( '', 'bonestheme' ).' %1$s',
																	/* the time the post was published */
																	'<time class="updated entry-time" datetime="' . get_the_time('d-m-Y') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'													
																); ?>
														</p>
														<header class="article-header">
															<h1 class="h2 entry-title text-center"><a href="<?php echo $image['url']; ?>" data-lightbox="0"><?php the_title(); ?></a></h1>															
														</header>
														
														<p class="text-center"><?php echo the_field('image_description');?></p>
														</section>
	
                                                        <p class="text-center">
														 <?php 
                                                            $terms = get_the_terms( $post->ID, 'photograph_category' ); 
                                                            
                                                            foreach($terms as $term) {
                                                                $term_link = get_term_link( $term );
                                                                echo '<a href="' . esc_url( $term_link ) . '">#' . $term->name . '</a> ';
                                                            }
                                                            
                                                            ?>
                                                            </p>
                                                        

									</article>
                                </div>
                            
							    <?php endwhile; ?>
					        </div>
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
												<p><?php _e( 'This is the error message in the taxonomy-custom_cat.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>
							<?php endif; ?>
						</main>
				    </div>
			    </div>
			</div>

<?php get_footer(); ?>