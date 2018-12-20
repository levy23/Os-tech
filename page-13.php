<?php get_header(); ?>

    <!DOCTYPE html>
    <html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    </div>
    <div class="container-fluid">
        <section class="py-5">
            <h2 class="mb-5 text-center"><?php the_title();?></h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0 container-fluid">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2462.085953974887!2d19.94321441566963!3d51.89589549004435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471bd9a8e23e7f1d%3A0xee741154218ddb70!2sPo%C5%82udniowa+18%2C+96-127+Lipce+Reymontowskie!5e0!3m2!1spl!2spl!4v1544729538466" width="200" height="200" frameborder="0" style="border:0; margin: 0 auto" allowfullscreen></iframe></div>
                    <div class="col-md-6">
                        <h5><?php echo CFS()->get( 'opis' ); ?></h5>
                        <p class="mb-5 text-secondary"></p>
                        <div class="d-flex">
                            <img class="p-1" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ikony/mapa.png" alt=""/>
                            <p class="text-secondary"><?php echo CFS()->get( 'adres' ); ?></p></div>
                        <div class="d-flex">
                            <img class="p-1" height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ikony/telefon.png" alt=""/>
                            <p class="text-secondary"><?php echo CFS()->get( 'telefon' ); ?></p></div>
                        <div class="d-flex">
                            <img class="p-1"  height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ikony/email.png" alt=""/>
                            <p class="text-secondary"><?php echo CFS()->get( 'e_mail' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



        <?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
            <!-- post -->
    <div class="">
<?php the_content();?>
        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
    </div>
</body>



<?php get_footer(); ?>