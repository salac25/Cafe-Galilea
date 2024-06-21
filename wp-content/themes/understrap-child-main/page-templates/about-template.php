<?php

/**
 * Template Name: About Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
    get_template_part('global-templates/hero');
}

$wrapper_id = 'full-width-page-wrapper';
if (is_page_template('page-templates/no-title.php')) {
    $wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. 
                            ?>">

    <div class="<?php echo esc_attr($container); ?>" id="content">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">

                    <?php
                    while (have_posts()) {
                        the_post();
                        get_template_part('loop-templates/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    }
                    ?>
                    <!-- About page -->
                    <section id="about">
                        <div class="m-3">
                            <p class="lead fs-6">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
                                sapiente illum hic fugit animi nulla aliquam, consectetur debitis
                                praesentium nesciunt blanditiis voluptatum labore id alias, qui, aut
                                quasi! Veniam magni aliquid ipsam corporis minus vel maxime facilis,
                                est veritatis quos itaque. Ipsa ea quasi autem commodi quo enim
                                officiis eius?
                            </p>
                        </div>
                        <div id="about-2">
                            <div class="content-box-lg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="about-item my-5">
                                                <a href="#"><img src="/wp-content/uploads/2024/05/San-Ildefonso.jpg" class="w-100 h-50" alt="" /></a>

                                                <h3 class="mt-3 text-primary text-center ">Mission</h3>

                                                <hr />
                                                <p class="lead fs-6">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Atque eos at sapiente quia ratione eligendi veniam ab
                                                    officia alias reprehenderit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="about-item my-5">
                                                <a href="#">
                                                    <img src="/wp-content/uploads/2024/05/Pulilan.jpg" class="w-100 h-50" alt="" /></a>

                                                <h3 class="mt-3 text-primary text-center ">Vision</h3>

                                                <hr />
                                                <p class="lead fs-6">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Atque eos at sapiente quia ratione eligendi veniam ab
                                                    officia alias reprehenderit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="about-item my-5">
                                                <a href="#"><img src="/wp-content/uploads/2024/05/Bustos.jpg" class="w-100 h-50" alt="" /></a>

                                                <h3 class="mt-3 text-primary text-center ">Achievements</h3>

                                                <hr />
                                                <p class="lead fs-6">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Atque eos at sapiente quia ratione eligendi veniam ab
                                                    officia alias reprehenderit.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>

            </div><!-- #primary -->

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. 
            ?> -->

<?php
get_footer();
