<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="page-title">NEWS</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="entry-content">
        <div class="container">
            <div class="row">
            
                <div id="primary" class="content-area ib-post col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <main id="main" class="site-main">

                        <div class="blog-posts">
                            <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 6,
                                'paged' => $paged,
                            );
                            $query = new WP_Query( $args );
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                                    <article class="post-box post type-post hentry">
                                        <div class="entry-media">
                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail( 'medium' ); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="inner-post">
                                            <header class="entry-header">
                                                <div class="entry-meta">
                                                    <span class="posted-on">
                                                        <time class="entry-date published"><?php echo get_the_date(); ?></time>
                                                    </span>
                                                    <span class="posted-in">
                                                        <?php the_category( ', ' ); ?>
                                                    </span>
                                                </div>
                                                <!-- .entry-meta -->
                                                <h4 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                                            </header>
                                            <!-- .entry-header -->
                                            <div class="entry-summary">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <!-- .entry-summary -->
                                            <footer class="entry-footer">
                                                <a class="post-link" href="<?php the_permalink(); ?>">Read more</a>
                                            </footer>
                                            <!-- .entry-footer -->
                                        </div>
                                    </article>
                                    <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo '<p>No posts found.</p>';
                            }
                            ?>
                        </div>

                        <div class="pagination">
                            <?php
                            $big = 999999999;
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $query->max_num_pages,
                                'prev_text' => '<i class="fas fa-angle-left"></i>',
                                'next_text' => '<i class="fas fa-angle-right"></i>',
                            ) );
                            ?>
                        </div>
                    </main>
                    <!-- #main -->
                </div>

				<?php require_once get_template_directory() . "/core/includes/blog-aside.php"; ?>
                
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>