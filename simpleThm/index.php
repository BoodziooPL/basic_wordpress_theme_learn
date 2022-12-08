
<?php get_header(); ?>
<?php 
//Loops
    if(have_posts()){
        while(have_posts(  )){
            the_post(  );
            the_content();
        }
    }

    //  if(have_posts()) :
    //     while(have_posts(  )) :
    //         the_post(  );
    //         the_content();
    //     Endwhile;
    // Endif;
    // 2 mozliwe opcje, wp pozwala na uzywanie : zamiast {} i konczenie "endif or endwhile etc.. etc.. 
?>

<?php get_footer(); ?>