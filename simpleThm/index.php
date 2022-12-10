

<?php get_header(); ?>

<section class="post-area">

<!-- petla dodająca posty na stronę -->
<?php 
//Petla iterujaca po wszystkich postach dostepnych w bazie danych
    if(have_posts()){
        while(have_posts(  )){
            the_post(  );?>
<!-- tworzenie na podstawie postow article, div etc... dla DOM  -->
            
        <article <?php post_class();?> id="post-<?php the_ID(); ?>">
            <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
        <div class="post-meta">
           <p>Posted on: <?php the_date(); ?> at: <?php the_time(); ?></p>
           <p>Posted by: <?php the_author( ); ?></p>   
        </div>
<!-- kod dodajacy czesc kontentu na strone pod powyzszym tytulem postu, autorem oraz datą -->
        <?php the_excerpt() ?>
        </article>
        
<!-- zamkniecie petli, nawiasy zamykają powyzszego while i if'a -->
        <?php 
        }
    }
            // 2 mozliwe opcje, wp pozwala na uzywanie : zamiast {} i konczenie "endif or endwhile etc.. etc.. 
            //  if(have_posts()) :
            //     while(have_posts(  )) :
            //         the_post(  );
            //          the_title( );
            //         the_content();
            //     Endwhile;
            // Endif;
// zamkniecie pętli   
?>

</section>
<div class="pagination">
    <?php the_posts_pagination(); ?>
</div>
<?php get_footer(); ?>