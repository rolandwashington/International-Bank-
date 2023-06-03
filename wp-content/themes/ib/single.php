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
            
                <div id="primary" <?php if(strpos($_SERVER['REQUEST_URI'], 'ib-team_member') !== false ) { ?> class="ib-members-profile-detail" <?php } ?> class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <main id="main" class="site-main">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <?php if(!strpos($_SERVER['REQUEST_URI'], 'ib-team_member') ) { ?>
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
                                        
                                        <?php 
                                            if(strpos($_SERVER['REQUEST_URI'], 'ib-recruitment') !== false ) { 
                                                ?>
                                                    <h3>Job Title: <?php the_title()?></h3>
                                                <?php
                                            }    
                                        ?>

                                        <div class="entry-summary">
                                            <?php the_content(); ?>
                                        </div>

                                        <?php 
                                            if(strpos($_SERVER['REQUEST_URI'], 'ib-recruitment') !== false ) { 
                                                ?>

                                                    <p>To apply, please send your cover letter and CV to:</p>

                                                    <p>
                                                        <strong>Attn: HR Manager</strong><br>
                                                        International Bank (Liberia) Limited <br>
                                                        Tubman Boulevard, between 11th and 12th Streets <br>
                                                        Monrovia, Liberia
                                                    </p>
                                                    <a class="btn" href="mailto:erequest@ibliberia.com">Apply Now</a>
                                                <?php
                                            }    
                                        ?>

                                    </div>
                                </article>
                            <?php } ?>

                            <?php if(strpos($_SERVER['REQUEST_URI'], 'ib-team_member') ) { ?>
                                <section id="ib-team" class="wpb_row row-fluid section-padd no-top">
                                    <div class="container">
                                        <div class="row">	
                                            <div class="wpb_column column_container col-sm-6 col-md-3">
                                                <div class="column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="member-item radius">
                                                            <div class="avatar">
                                                                <?php the_post_thumbnail(); ?>
                                                            </div>
                                                            <div class="mem-info">
                                                                <h5>
                                                                    <?php the_title(); ?>
                                                                    <span class="font12 normal"><?php echo get_post_meta(get_the_ID(), 'job_position', true); ?></span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="empty_space_30"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <?php if (get_the_content()) : ?>
                                                <?php the_content(); ?>
                                            <?php else : ?>
                                                <p>Member profile is not available.</p>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                </section>
                            <?php } ?>


                        <?php endwhile; endif; ?>

                    </main>
                    <!-- #main -->
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
