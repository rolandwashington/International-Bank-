<aside id="sidebar" class="widget-area primary-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <section id="search-2" class="widget widget_search">
        <form role="search" method="get" id="search-form" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" class="search-field" placeholder="Enter keyword..." value="" name="s">
            <button type="submit" class="search-submit"><i class="fab fa-search"></i></button>
        </form>
    </section>
    <section id="categories-2" class="widget widget_categories">
        <h4 class="widget-title">Categories</h4>
        <ul>
            <?php
                $categories = get_categories();
                foreach ( $categories as $category ) {
                    $category_link = get_category_link( $category->term_id );
                    ?>
                    <li>
                        <a href="<?php echo esc_url( $category_link ); ?>"><?php echo esc_html( $category->name ); ?></a>
                    </li>
                    <?php
                }
            ?>
        </ul>
    </section>
</aside>