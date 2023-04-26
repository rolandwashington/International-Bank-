<?php get_header(); ?>

<?php 
    $category = get_the_category();
    $category_name = $category[0]->name;
?>

<div id="content" class="site-content">
	<div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="page-title"><?php echo $category_name; ?></h1>
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

                        <?php

                            $args = array(
                                'category_name' => $category_name,
                                'posts_per_page' => 10,
                            );

                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) : $query->the_post(); ?>

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
                                                <!-- .entry-meta -->
                                                <h4 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                                                <div class="entry-meta">
                                                    <span class="posted-on">
                                                        <time class="entry-date published"><?php echo get_the_date(); ?></time>
                                                    </span>
                                                    <span class="posted-in">
                                                        <?php the_category( ', ' ); ?>
                                                    </span>
                                                </div>
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

                                <?php endwhile;
                                wp_reset_postdata();
                            else :
                                echo 'No posts found';
                            endif;
                        ?>

                    </main>
                    <!-- #main -->
                </div>

				<?php require_once get_template_directory() . "/core/includes/blog-aside.php"; ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>