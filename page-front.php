<?php
/*
Template Name: WPDocs Frontpage
*/

get_header();
?>
<div id="wrapper">
    <div class="homepage-hero container-fluid ifthenpay-dev-hp">
        <div class="container up">
            <div class="row">
                <div class="text-center col-sm-12">
                    <h2>&nbsp;</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <?php
                        if (has_post_thumbnail( $post->ID ) ) :
                            $imageURL = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            $alt_text = get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true );;
                    ?>
                    <img class="homepage-image img-responsive" src="<?php echo esc_url($imageURL); ?>" alt="<?php echo $alt_text; ?>">
                    <?php
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="homepage-content container-fluid">
        <div class="container">
            <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="doc_content">
                    <?php
                        $content = apply_filters('the_content', $post->post_content); 
                        echo $content;
                    ?> 
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="push"></div>
</div>
<div id="footer" class="hero-buttons container-fluid footer">
    <div class="container text-center">
        <?php require_once(realpath(dirname(__FILE__)) . "/inc/walkerMenu.php"); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'frontpage_footer_menu', 'walker'  => new walkerMenu() ) ); ?>
        <div class="clearfix"></div>
    </div>
</div>
<?php
get_footer();