<?php

/*
Template Name: WPDocs Documentation Page
*/

get_header();
?>
 <div class="container-fluid fluid-height wrapper">
    <div class="navbar navbar-static-top hidden-print">
        <div class="container-fluid">
            <a class="brand navbar-brand pull-left" href="<?php echo get_site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
    </div>
    <div class="row columns content">
        <div class="left-column article-tree col-sm-3 hidden-print">
            <!-- For Mobile -->
            <div class="responsive-collapse">
                <button type="button" class="btn btn-sidebar" id="menu-spinner-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="sub-nav-collapse" class="sub-nav-collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'sidemenu_documentation', 'items_wrap' => '<ul class="nav nav-list">%3$s' ) ); ?>
            </div>
        </div>
        <div class="right-column content-area col-sm-9">
            <div class="content-page">
                <div class="doc_content">
                    <article>
                        <div class="page-header sub-header clearfix">
                            <h1><?php echo get_the_title( $post->ID ); ?></h1>
                        </div>
                        <?php
                            $content = apply_filters('the_content', $post->post_content); 
                            echo $content;
                        ?> 
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>