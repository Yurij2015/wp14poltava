<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <?php
            if (have_posts()) :
            while (have_posts()) :
            the_post();
            ?>
            <h1 class="page-header"><?php the_title() ?>
                <small>by <a href="<?php the_author_link() ?>"><?php the_author() ?></a></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><?php the_category() ?></a>
                </li>
                <li class="active"><?php the_title() ?></li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <!-- Category template -->
            <h3>Шаблон страницы Contacts</h3>
            <h2>
                <a href="#"><?php the_title() ?></a>
            </h2>
            <p class="lead">
                by <a href="index.php"><?php the_author() ?></a>
            </p>
            <p><i class="fa fa-clock-o"></i> Posted on <?php the_date() ?></p>
            <hr>
            <?php the_content() ?>
            <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>
            <hr>
            <?php
            // код внутри цикла (теги шаблонов, html и пр.)
            endwhile;
            endif;
            ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <!-- /.row -->
    <hr>
    <?php get_footer(); ?>


