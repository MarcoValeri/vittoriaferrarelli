<!-- Include header.php and related code -->
<?php get_header(); ?>

<!-- Add main section -->
<main class="content">
    <section class="content__container">
        <!-- Loop through the pages if them exists --> 
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <section class="post">
                <section class="post__image">
                    <?php the_post_thumbnail(); ?>
                </section>
                <section class="post__title">
                    <?php the_title('<h1 class="post__title-main">', '</h1>'); ?>
                </section>
                <section class="post__content">
                    <?php the_content(); ?>
                </section>
            </section>
        <?php endwhile; endif; ?>
    </section>
    <!-- Add sidebar --> 
    <?php get_sidebar(); ?>
</main>

<!-- Include footer.php and related code -->
<?php get_footer(); ?>