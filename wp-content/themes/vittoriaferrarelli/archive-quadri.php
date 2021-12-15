<!-- Include header.php and related code -->
<?php get_header(); ?>

<!-- Add main section -->
<main>
    <h1>Archive Quadri</h1>
    <!-- Loop through the quadri and if exists display them --> 
    <?php
        if (have_posts()) : while(have_posts()) : the_post();
            the_title();
            the_content();
        endwhile; endif;
    ?>
</main>

<!-- Include footer.php and related code -->
<?php get_footer(); ?>