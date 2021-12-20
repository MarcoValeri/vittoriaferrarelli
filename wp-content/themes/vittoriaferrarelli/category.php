<!-- Include header.php and related code -->
<?php get_header(); ?>

<!-- Add main section -->
<main class="content">
    <section class="content__container">
        <section class="archive">
            <section class="archive__details">
                <h1 class="archive__details-title font-painting-background"><?php the_archive_title(); ?></h1>
            </section>
            <!-- Loop through the content --> 
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <a class="archive__container link-no-decoration link-hover" href="<?php the_permalink(); ?>">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <section class="archive__container-title">
                            <?php the_title('<h2 class="archive__container-title-main">', '</h2>'); ?>
                        </section>
                        <section class="archive__description">
                            <section class="archive__description-img">
                                <?php the_post_thumbnail(); ?>
                            </section>
                            <section class="archive__description-content paragraph">
                                <?php the_excerpt(); ?>
                            </section>
                        </section>
                    </article>
                </a>
            <?php endwhile; endif; ?>
        </section>
    </section>
    <aside class="aside">
    </aside>
</main>

<!-- Include footer.php and related code -->
<?php get_footer(); ?>