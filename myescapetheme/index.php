<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_date(); ?></p>
    <?php the_post_thumbnail(); ?>
    <p><?php the_content(); ?></p>
    <p><?php the_tags(); ?></p>

<?php endwhile; ?>

<?php get_footer(); ?>