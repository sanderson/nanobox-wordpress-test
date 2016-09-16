<?php
/**
 * Category Template
 */

get_header(); ?>

    <!-- Subpage Top - Breadcrumb & Search
    -------------------------------------------------------------------------------------------------------------->
    <div class="sub-banner">
        <div class="bodywrap">
            <?php if (function_exists('simtiful_breadcrumbs')) simtiful_breadcrumbs(); ?>
            <div class="search-top">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    
    <!-- Content
    -------------------------------------------------------------------------------------------------------------->
    <div class="bodywrap main-content-wrap article-list">
        <div class="row group"> 
            <div class="grid12">
                <?php if ( have_posts() ) : ?>
                    <article>
                        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'simtiful' ), get_search_query() ); ?></h1>
                    </article>
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post(); ?>

                        <?php
                        /*
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'content', 'simple' );

                    // End the loop.
                    endwhile;

                    // Page navigation.
                    simtiful_posts_nav_link();

                // If no content, include the "No posts found" template.
                else :
                    get_template_part( 'content', 'none' );

                endif;
                ?>
            </div>
        </div>
    </div> <!-- END bodywrap -->

<?php get_footer(); ?>