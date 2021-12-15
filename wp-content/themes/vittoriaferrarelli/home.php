<!-- Include header.php and related code -->
<?php get_header(); ?>

<main class="quadri">
    <section class="quadri__title">
        <h1 class="font-painting-background">Ultimi quadri</h1>
    </section>
    <!-- Loop through the quadri and if exists display them --> 
    <?php 
        $args = [
            'post_type' => 'quadri',
            'posts_per_page' => 5,
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); 
    ?>
        <a class="link-no-decoration" href="<?php the_permalink(); ?>">
            <section class="quadri__container">
                <?php the_title('<h1>', '</h1>'); ?>
                <section>
                        <?php the_content(); ?>
                </section>
                <section class="quadri__container-image">
                        <?php the_post_thumbnail(); ?>
                </section>
            </section>
        </a>
    <?php endwhile; endif; ?>
</main>

<!-- Include footer.php and related code -->
<?php get_footer(); ?>