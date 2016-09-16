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
            <div class="grid9">
                <?php if ( have_posts() ) : ?>
                <article>
                    <h1 class="page-title"><?php single_cat_title(); ?></h1>
                <?php
                    // Show an optional term description.
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                        printf( '<div class="taxonomy-description">%s</div>', $term_description );
                    endif;
                ?>
                </article>
                <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        // Include the page content template.
                        get_template_part( 'content', 'simple' );

                    // End the loop.
                    endwhile;

                    // Page navigation.
                    simtiful_posts_nav_link();
                
                else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );
                
                endif;
			     ?>
            </div>
            <div class="grid3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div> <!-- END bodywrap -->

<?php get_footer(); ?>