<?php
/**
 * Created by PhpStorm.
 * User: kalika
 * Date: 28/11/2018
 * Time: 11:12
 */
?>

<?php get_header(); ?> <!-- ouvrir header,php -->
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>
            <!-- Blog Post -->
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="card mb-4">
                        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="card-footer text-muted">
                            <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
                            <?php edit_post_link('Editer', ' &#124; ', ''); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class= "post" id="post-<?php the_ID(); ?>"> <div class= "post_content"> </div> </div>
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php get_footer(); ?>

</body>
</html>
