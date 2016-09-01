<?php
/*
 Template Name: HERO HOMEPAGE
 */
    ?>


<?php get_header('hero'); ?>

<div id="content">

    <div id="inner-content" class="row">

    <main id="main" class="large-12 medium-12 columns" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_template_part( 'parts/loop', 'page-home' ); ?>

<?php endwhile; endif; ?>

</main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php /*get_footer();*/ ?>

