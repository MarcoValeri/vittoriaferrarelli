<!-- Include header.php and related code -->
<?php get_header(); ?>

<!-- Add main section -->
<main class="content">
    <section class="content__container">
        <section class="quadro__container">
            <?php the_title('<h2 class="quadro__title">', '</h2>'); ?>
            <section class="quadro__content">
                <?php the_content(); ?>
            </section>
            <section class="quadro__image">
                <?php the_post_thumbnail(); ?>
            </section>
        </section>
    </section>
    <aside class="aside">
    </aside>
</main>

<!-- Include footer.php and related code -->
<?php get_footer(); ?>