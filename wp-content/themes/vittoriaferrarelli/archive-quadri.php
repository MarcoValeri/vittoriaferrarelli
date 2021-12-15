<!-- Include header.php and related code -->
<?php get_header(); ?>

<!-- Add main section -->
<main class="quadri">
    <section class="quadri__title">
        <h1 class="font-painting-background">Il paesaggio nei colori</h1>
    </section>
    <!-- Loop through the quadri and if exists display them --> 
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <section class="quadri__container">
            <?php the_title('<h1>', '</h1>'); ?>
            <section>
                    <?php the_content(); ?>
            </section>
            <section class="quadri__container-image">
                    <?php the_post_thumbnail(); ?>
            </section>
        </section>
    <?php endwhile; endif; ?>
</main>

<!-- Include footer.php and related code -->
<?php get_footer(); ?>