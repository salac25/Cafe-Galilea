<?php

/**
 * Template Name:Contact Page
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
                    <!-- Contact page -->
                    <section>
                        <div class="container">
                            <p class="lead fs-5 text-secondary p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem consequuntur ipsa, mollitia omnis in et! Excepturi, non quo. Cum?</p>
                            <div class="row justify-content-center align-items-center">
                                <h2 class="text-center text-secondary">Let's Start a Conversation</h2>
                                <div class="label">
                                    +63 949 195 9421
                                </div>
                                <div class="copy-text text-center">
                                    <input type="text" class="mobile-number text" value="+63 949 195 9421">
                                    <button>
                                        <i class="fa-regular fa-clone"></i>
                                    </button>
                                </div>
                                <!-- <p class="fs-5 text-center">
                                    <a href="#" class="text-secondary"><i class="fa-solid fa-phone text-secondary me-2"></i>+63 949 195 9421</a>
                                </p> -->


                                <div class="col-12 col-md-7 mx-auto">
                                    <iframe class="w-100 px-3 my-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.9013138659743!2d120.90753667591412!3d14.942590485585333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397aabb2ab1d2cb%3A0x5dfa965ca50ffb92!2sCafe%20Galilea%20Main%20Branch!5e0!3m2!1sen!2sph!4v1716833029783!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                                <div class="feedback col-12 col-md-5 col-lg-4  px-3 ">
                                    <!-- <form action="#" class="row justify-content-center"> -->
                                    <!-- <h3 class="text-secondary text-center">Feedback</h3> -->
                                    <?php echo do_shortcode('[wpforms id="150" title="false"]') ?>
                                    <!-- <input type="text" placeholder="Name" class="form-control mt-3" />
                                    <input type="email" placeholder="Email" class="form-control mt-3" />

                                    <textarea placeholder="Message" class="form-control mt-3" name="" id="" cols="30" rows="5"></textarea>
                                    <div class="d-flex justify-content-start mt-3">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div> -->
                                    <!-- </form> -->
                                </div>


                                <!-- <div class="col-md-5 mx-auto text-primary ">
                                    <h4 class="text-center text-secondary">Feedback</h4>-->

                                <!-- <?php echo do_shortcode('[contact-form-7 id="82f85f8" title="Contact form 1"]') ?> </div> -->
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
