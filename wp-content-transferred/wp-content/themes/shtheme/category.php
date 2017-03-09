<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category Name
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Category template</a>
                </li>
                <li class="active">Category #1</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- Category template -->
            <h3>Шаблон категории</h3>
            <?php echo category_description() ?>

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


