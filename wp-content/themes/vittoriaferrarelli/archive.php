<!-- Include header.php and related code -->
<?php get_header(); ?>

<!-- Add main section -->
<main class="content">
    <section class="content__container">
        <h1><?php the_archive_title(); ?></h1>
        <!-- Loop through the content --> 
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <section>
                    <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                </section>
                <section>
                    <?php the_excerpt(); ?>
                </section>
            </article>    
        <?php endwhile; endif; ?>
    </section>
    <aside class="aside">
    </aside>
</main>

<!-- Include footer.php and related code -->
<?php get_footer(); ?>