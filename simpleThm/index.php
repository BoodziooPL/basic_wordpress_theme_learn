

<?php get_header(); ?>

<section class="post-area">
<!-- petla dodająca posty na stronę -->
<?php 
//Loops
    if(have_posts()){
        while(have_posts(  )){
            the_post(  );
            the_title( );
            the_content();
        }
    }

    //  if(have_posts()) :
    //     while(have_posts(  )) :
    //         the_post(  );
    //          the_title( );
    //         the_content();
    //     Endwhile;
    // Endif;
    // 2 mozliwe opcje, wp pozwala na uzywanie : zamiast {} i konczenie "endif or endwhile etc.. etc.. 
?>

</section>
<?php get_footer(); ?>