<?php get_header(); ?>

			<div id="content">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
			                <h1 class="text-center archive-title">Search</h1>
			            </div>
			        </div>
			     </div>
			     <div class="container">
			         <h6 class="text-center archive-title"><span><?php _e( 'Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h6>
    					<main id="main" role="main">
    						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    						<div class="row justify-content-center">
    						    <div class="col-md-9">
    							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

    								<section class="entry-content">
    								    <header class="entry-header article-header">
    									<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                      						<p class="byline entry-meta vcard">
                        							<?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
                       							    /* the time the post was published */
                       							    '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                          							    /* the author of the post */
                           							    '<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                        							); ?>
                      						</p>
    								    </header>
    										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>
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
    											<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
    										</header>
    										<section class="entry-content">
    											<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
    										</section>
    										<footer class="article-footer">
    												<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
    										</footer>
    									</article>
    							<?php endif; ?>
    					</main>
    			</div>
    		</div>

<?php get_footer(); ?>
