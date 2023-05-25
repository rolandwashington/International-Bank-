<?php get_header(); ?>

<div id="content" class="site-content">
    <div class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ib-background.jpg);">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="entry-content">
        <div class="container">
            <div class="row">
            
                <div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <main id="main" class="site-main">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article class="post-box post type-post hentry">
                            <div class="entry-media">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </a>
                                <?php endif; ?>
                            </div>
                            <div class="inner-post">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <time class="entry-date published"><?php the_date(); ?></time>
                                        </span>
                                        <span class="posted-in">
                                            <?php the_category( ', ' ); ?>
                                        </span>
                                    </div>
                                </header>

                                <div class="entry-summary">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </article>

                        <?php endwhile; endif; ?>

                    </main>
                    <!-- #main -->
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
