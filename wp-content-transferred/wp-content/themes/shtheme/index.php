<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Blog Home One
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">Blog Home One</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- First Blog Post -->
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <h2>
                        <a href="#"><?php the_title() ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="<?php the_author_link() ?>"><?php the_author() ?></a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> Posted on <?php the_date() ?></p>
<!--                    <hr>-->
<!--                    <a href="--><?php //the_permalink() ?><!--">-->
<!--                        <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">-->
<!--                    </a>-->
                    <hr>
                    <?php the_content() ?>
                    <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>
                    <hr>
                    <?php
                    // код внутри цикла (теги шаблонов, html и пр.)
                endwhile;
            endif;
            ?>
            <!-- Second Blog Post -->
<!--            <h2>-->
<!--                <a href="#">Blog Post Title</a>-->
<!--            </h2>-->
<!--            <p class="lead">-->
<!--                by <a href="index.php">Start Bootstrap</a>-->
<!--            </p>-->
<!--            <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:45 PM</p>-->
<!--            <hr>-->
<!--            <a href="blog-post.html">-->
<!--                <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">-->
<!--            </a>-->
<!--            <hr>-->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum-->
<!--                voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum-->
<!--                perferendis labore impedit voluptates!</p>-->
<!--            <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>-->
<!---->
<!--            <hr>-->

            <!-- Third Blog Post -->
<!--            <h2>-->
<!--                <a href="#">Blog Post Title</a>-->
<!--            </h2>-->
<!--            <p class="lead">-->
<!--                by <a href="index.php">Start Bootstrap</a>-->
<!--            </p>-->
<!--            <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:45 PM</p>-->
<!--            <hr>-->
<!--            <a href="blog-post.html">-->
<!--                <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">-->
<!--            </a>-->
<!--            <hr>-->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam-->
<!--                cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id-->
<!--                incidunt autem. Magni, ratione.</p>-->
<!--            <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>-->
<!---->
<!--            <hr>-->

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


