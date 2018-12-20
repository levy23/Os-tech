<?php get_header(); ?>

    <!DOCTYPE html>
    <html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container bg-light p-3">
        <?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
            <!-- post -->
    <div class=""><h1><?php the_title();?></h1>
        <p class="mb-4 text-secondary"><?php the_content();?></p>
        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
    </div>
    </div>

</body>


<?php get_footer(); ?>