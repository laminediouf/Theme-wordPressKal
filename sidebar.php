<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 27/11/2018
 * Time: 15:27
 */
?>

<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <!-- Search Widget -->
    <div class="card my-4">
                <h5 class="card-header">Recherche</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search for...">
                        <span class="input-group-btn">
                  <input type="submit" id="searchsubmit" class="btn btn-secondary" value="Rechercher" />
                </span>
                    </div>
                </div>
            </div>
</form>
<?php include(TEMPLATEPATH . '/searchform.php'); ?>

<!-- Calendrier Widget -->
<div class="card my-4">
    <h5 class="card-header">Calendrier</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                    <li><?php get_calendar(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                    <li><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
    <h5 class="card-header">Archives</h5>
    <div class="card-body">
        <ul class="list-unstyled mb-0">
            <li><?php wp_get_archives('type=monthly'); ?></li>
        </ul>
    </div>
</div>

        <?php get_links_list(); ?>

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?> </ul>

