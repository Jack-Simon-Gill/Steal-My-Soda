<?php get_header(); ?>
			<div id="content">
			    <div class="container">
                    <div class="row">
					    <div class="col-md-12">
						<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p class="text-center breadcrumbs" id="breadcrumbs">','</p>');
							} ?>
					    </div>
				    </div>
				</div>
				<div class="container">
					<div class="row justify-content-center">
                        <div class="col-md-9">
    						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    								<header class="article-header">
    									<h1 class="page-title custom-post-type-title text-center"><?php the_title(); ?></h1>
    								</header> <?php // end article header ?>
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
    								</section> <?php // end article section ?>
    								<footer class="article-footer cf">
    								</footer>
    
    								<?php comments_template(); ?>
    							</article>
    							<?php endwhile; endif; ?>
    						</main>
                        </div>
                    </div>
                </div>
			</div>
<?php get_footer(); ?>
