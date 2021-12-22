<!-- Include header.php and related code -->
<?php get_header(); ?>

<!-- Add main section -->
<main class="content">
    <section class="content__container">
        <section class="single-post__container">
            <?php the_title('<h1 class="single-post__title">', '</h1>'); ?>
            <section class="single-post__image">
                <?php the_post_thumbnail(); ?>
            </section>
            <section class="single-post__content paragraph">
                <?php the_content(); ?>
            </section>
        </section>
    </section>
    <aside class="aside">
    </aside>
</main>


<!-- Include footer.php and related code -->
<?php get_footer(); ?>