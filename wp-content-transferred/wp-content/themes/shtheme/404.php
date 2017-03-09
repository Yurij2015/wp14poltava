<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php the_title() ?>
                <small><a href=""></a></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"></a>
                </li>
                <li class="active"></li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- Category template -->
            <h3>Ошибка</h3>
            <p>Нет такой страницы</p>

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


