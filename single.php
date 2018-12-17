<?php
/**
 * Created by PhpStorm.
 * User: kalika
 * Date: 28/11/2018
 * Time: 11:27
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
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"><br><br>
            <!-- Blog Post -->
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p class="card-text"><?php the_content(); ?></p>
                        </div>
                        <div class="card-footer text-muted">
                            <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
                            <?php edit_post_link('Editer', ' &#124; ', ''); ?>
                        </div>
                    </div>
                <div class="mb-4">
                        <form class="form-control">
                            <p class="card-text"><?php comments_template(); ?></p>
                        </form>
                </div>
                <?php endwhile; ?>
                <div><span class="navigation"><?php previous_post_link() ?></span> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <span class="navigation"><?php next_post_link() ?> </span></div>
            <?php else : ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title"></h2>
                        <p class="card-text">Désolé, aucun article ne correspond à vos critères.</p>
                    </div>
                </div>
                <?php include (TEMPLATEPATH . "/searchform.php"); ?>
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